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
                        <label for="certificate_file" class="form-label fw-semibold">Certificate File <span class="text-danger">*</span></label>
                        <input type="file" 
                               class="form-control @error('certificate_file') is-invalid @enderror" 
                               id="certificate_file" 
                               name="certificate_file" 
                               accept="application/pdf,.pdf"
                               required>
                        <small class="form-text text-muted">Maximum file size: 5MB. Only PDF files are allowed.</small>
                        @error('certificate_file')
                            <div class="text-danger small mt-1 d-block">
                                <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                            </div>
                        @enderror
                        <div id="fileError" class="text-danger small mt-1 d-none">
                            <i class="bi bi-exclamation-circle me-1"></i><span id="fileErrorText"></span>
                        </div>
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

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const fileInput = document.getElementById('certificate_file');
    const fileError = document.getElementById('fileError');
    const fileErrorText = document.getElementById('fileErrorText');
    
    // Client-side validation on form submit
    form.addEventListener('submit', function(e) {
        // Clear previous errors
        fileError.classList.add('d-none');
        fileInput.classList.remove('is-invalid');
        
        // Check if file is selected
        if (!fileInput.files || fileInput.files.length === 0) {
            e.preventDefault();
            fileErrorText.textContent = 'Please select a certificate file to upload.';
            fileError.classList.remove('d-none');
            fileInput.classList.add('is-invalid');
            fileInput.focus();
            return false;
        }
        
        // Check file type
        const file = fileInput.files[0];
        if (file.type !== 'application/pdf' && !file.name.toLowerCase().endsWith('.pdf')) {
            e.preventDefault();
            fileErrorText.textContent = 'Only PDF files are allowed.';
            fileError.classList.remove('d-none');
            fileInput.classList.add('is-invalid');
            fileInput.focus();
            return false;
        }
        
        // Check file size (5MB = 5 * 1024 * 1024 bytes)
        const maxSize = 5 * 1024 * 1024; // 5MB in bytes
        if (file.size > maxSize) {
            e.preventDefault();
            fileErrorText.textContent = 'The file size must not exceed 5MB.';
            fileError.classList.remove('d-none');
            fileInput.classList.add('is-invalid');
            fileInput.focus();
            return false;
        }
    });
    
    // Clear error when file is selected
    fileInput.addEventListener('change', function() {
        if (this.files && this.files.length > 0) {
            fileError.classList.add('d-none');
            this.classList.remove('is-invalid');
        }
    });
});
</script>
@endpush
