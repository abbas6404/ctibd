@extends('admin.layouts.app')

@section('title', 'Edit Gallery Image')
@section('page-title', 'Edit Gallery Image')
@section('page-description', 'Update gallery image')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row g-3">
                    <div class="col-12">
                        <label for="img" class="form-label fw-semibold">Image</label>
                        @if($gallery->img)
                            <div class="mb-3">
                                <p class="text-muted small mb-2">Current Image:</p>
                                <img src="{{ asset('storage/' . $gallery->img) }}" 
                                     alt="Gallery" 
                                     class="rounded border" 
                                     style="max-width: 100%; max-height: 400px; object-fit: contain;">
                            </div>
                        @endif
                        <input type="file" 
                               name="img" 
                               id="img" 
                               accept="image/*"
                               class="form-control @error('img') is-invalid @enderror">
                        <small class="form-text text-muted">Accepted formats: JPG, PNG, GIF, SVG (Max: 2MB). Leave empty to keep current image.</small>
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
                            <i class="bi bi-check-circle me-1"></i> Update Image
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
