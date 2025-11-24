@extends('admin.layouts.app')

@section('title', 'Edit Home Slider')
@section('page-title', 'Edit Home Slider')
@section('page-description', 'Update slider image')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.home-sliders.update', $homeSlider) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row g-3">
                    <div class="col-12">
                        <label for="title" class="form-label fw-semibold">Title</label>
                        <input type="text" 
                               name="title" 
                               id="title" 
                               value="{{ old('title', $homeSlider->title) }}"
                               class="form-control @error('title') is-invalid @enderror"
                               placeholder="Optional title for the slider">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-12">
                        <label for="img" class="form-label fw-semibold">Image</label>
                        @if($homeSlider->img)
                            <div class="mb-3">
                                <p class="text-muted small mb-2">Current Image:</p>
                                <img src="{{ asset($homeSlider->img) }}" 
                                     alt="Slider" 
                                     class="rounded border" 
                                     style="max-width: 100%; max-height: 400px; object-fit: contain;">
                            </div>
                        @endif
                        <input type="file" 
                               name="img" 
                               id="img" 
                               accept="image/*"
                               class="form-control @error('img') is-invalid @enderror">
                        <small class="form-text text-muted">Accepted formats: JPG, PNG, GIF (Max: 2MB). Leave empty to keep current image.</small>
                        @error('img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="order" class="form-label fw-semibold">Display Order</label>
                        <input type="number" 
                               name="order" 
                               id="order" 
                               value="{{ old('order', $homeSlider->order) }}"
                               min="0"
                               class="form-control @error('order') is-invalid @enderror">
                        <small class="form-text text-muted">Lower numbers appear first.</small>
                        @error('order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Status</label>
                        <div class="form-check form-switch mt-2">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   name="is_active" 
                                   id="is_active" 
                                   value="1"
                                   {{ old('is_active', $homeSlider->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                Active (Show on home page)
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 pt-3 border-top">
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.home-sliders.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-x-circle me-1"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-1"></i> Update Slider
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

