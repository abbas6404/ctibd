@extends('admin.layouts.app')

@section('title', 'Certificates')
@section('page-title', 'Certificates Management')
@section('page-description', 'Manage all certificates')

@section('header-actions')
    <a href="{{ route('admin.certificates.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle me-1"></i> Add Certificate
    </a>
@endsection

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="border-0">Registration ID</th>
                            <th class="border-0">Certificate PDF</th>
                            <th class="border-0">Created</th>
                            <th class="border-0 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($certificates as $certificate)
                            <tr>
                                <td>
                                    <div class="fw-semibold">{{ $certificate->registration_id }}</div>
                                </td>
                                <td>
                                    @if($certificate->certificate_file)
                                        <a href="{{ asset('storage/' . $certificate->certificate_file) }}" 
                                           target="_blank" 
                                           class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-file-pdf me-1"></i> View PDF
                                        </a>
                                    @else
                                        <span class="badge bg-secondary">
                                            <i class="bi bi-x-circle me-1"></i> No PDF
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="text-muted small">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ $certificate->created_at->format('M d, Y') }}
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.certificates.edit', $certificate) }}" 
                                           class="btn btn-sm btn-outline-primary" 
                                           title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.certificates.destroy', $certificate) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this certificate?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-sm btn-outline-danger" 
                                                    title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="bi bi-award fs-1 d-block mb-3"></i>
                                        <p class="mb-0">No certificates found.</p>
                                        <a href="{{ route('admin.certificates.create') }}" class="btn btn-sm btn-primary mt-3">
                                            <i class="bi bi-plus-circle me-1"></i> Add First Certificate
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($certificates->hasPages())
                <div class="card-footer border-top bg-white">
                    <div class="d-flex justify-content-center">
                        {{ $certificates->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
