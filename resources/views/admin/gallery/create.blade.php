@extends('admin.layouts.app')

@section('title', 'Add Gallery Image')
@section('page-title', 'Add New Gallery Image')
@section('page-description', 'Upload a new image to the gallery')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row g-3">
                    <div class="col-12">
                        <label for="img" class="form-label fw-semibold">Image <span class="text-danger">*</span></label>
                        <input type="file" 
                               name="img" 
                               id="img" 
                               accept="image/*" 
                               required
                               class="form-control @error('img') is-invalid @enderror">
                        <small class="form-text text-muted">Accepted formats: JPG, PNG, GIF, SVG (Max: 2MB)</small>
                        @error('img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-4 pt-3 border-top">
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.gallery.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-x-circle me-1"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-upload me-1"></i> Upload Image
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
