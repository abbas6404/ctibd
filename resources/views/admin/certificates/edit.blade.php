@extends('admin.layouts.app')

@section('title', 'Edit Certificate')
@section('page-title', 'Edit Certificate')
@section('page-description', 'Update certificate information')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.certificates.update', $certificate) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row g-3">
                    <div class="col-12">
                        <label for="registration_id" class="form-label fw-semibold">Registration ID <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('registration_id') is-invalid @enderror" 
                               id="registration_id" 
                               name="registration_id" 
                               value="{{ old('registration_id', $certificate->registration_id) }}" 
                               required
                               placeholder="Enter registration ID">
                        @error('registration_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-12">
                        <label for="certificate_pdf" class="form-label fw-semibold">Certificate PDF</label>
                        @if($certificate->certificate_pdf)
                            <div class="mb-3">
                                <p class="text-muted small mb-2">Current PDF:</p>
                                <a href="{{ asset('storage/' . $certificate->certificate_pdf) }}" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-file-pdf me-1"></i> View Current PDF
                                </a>
                            </div>
                        @endif
                        <input type="file" 
                               class="form-control @error('certificate_pdf') is-invalid @enderror" 
                               id="certificate_pdf" 
                               name="certificate_pdf" 
                               accept=".pdf">
                        <small class="form-text text-muted">Leave empty to keep current PDF. Maximum file size: 5MB. Only PDF files are allowed.</small>
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
                            <i class="bi bi-check-circle me-1"></i> Update Certificate
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
