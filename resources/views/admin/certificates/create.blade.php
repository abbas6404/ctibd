@extends('admin.layouts.app')

@section('title', 'Add Certificate')
@section('page-title', 'Add New Certificate')
@section('page-description', 'Create a new certificate record')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.certificates.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row g-3">
                    <div class="col-12">
                        <label for="registration_id" class="form-label fw-semibold">Registration ID <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('registration_id') is-invalid @enderror" 
                               id="registration_id" 
                               name="registration_id" 
                               value="{{ old('registration_id') }}" 
                               required
                               placeholder="Enter registration ID">
                        @error('registration_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-12">
                        <label for="certificate_pdf" class="form-label fw-semibold">Certificate PDF</label>
                        <input type="file" 
                               class="form-control @error('certificate_pdf') is-invalid @enderror" 
                               id="certificate_pdf" 
                               name="certificate_pdf" 
                               accept=".pdf">
                        <small class="form-text text-muted">Maximum file size: 5MB. Only PDF files are allowed.</small>
                        @error('certificate_pdf')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-4 pt-3 border-top">
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.certificates.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-x-circle me-1"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-upload me-1"></i> Upload Certificate
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
