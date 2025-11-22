<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        $certificate = null;
        $errorMessage = null;
        
        if ($request->has('registration_id') && $request->filled('registration_id')) {
            $request->validate([
                'registration_id' => 'required|string|max:255',
            ]);

            $registrationId = $request->input('registration_id');
            $certificate = Certificate::where('registration_id', $registrationId)->first();
            
            if (!$certificate) {
                $errorMessage = 'Certificate not found with the provided registration number.';
            }
        }
        
        return view('certificates', compact('certificate', 'errorMessage'));
    }
}

