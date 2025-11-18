<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = Certificate::latest()->paginate(10);
        return view('admin.certificates.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'registration_id' => 'required|string|max:255',
            'certificate_pdf' => 'required|mimes:pdf|max:5120',
        ]);

        if ($request->hasFile('certificate_pdf')) {
            $validated['certificate_pdf'] = $request->file('certificate_pdf')->store('certificates', 'public');
        }

        Certificate::create($validated);

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate uploaded successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        $validated = $request->validate([
            'registration_id' => 'required|string|max:255',
            'certificate_pdf' => 'nullable|mimes:pdf|max:5120',
        ]);

        if ($request->hasFile('certificate_pdf')) {
            if ($certificate->certificate_pdf) {
                Storage::disk('public')->delete($certificate->certificate_pdf);
            }
            $validated['certificate_pdf'] = $request->file('certificate_pdf')->store('certificates', 'public');
        } else {
            unset($validated['certificate_pdf']);
        }

        $certificate->update($validated);

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        if ($certificate->certificate_pdf) {
            Storage::disk('public')->delete($certificate->certificate_pdf);
        }

        $certificate->delete();

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate deleted successfully.');
    }
}
