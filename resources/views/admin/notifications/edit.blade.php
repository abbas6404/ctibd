@extends('admin.layouts.app')

@section('title', 'Edit Notification')
@section('page-title', 'Edit Notification')
@section('page-description', 'Update notification information')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.notifications.update', $notification) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row g-3">
                    <div class="col-12">
                        <label for="title" class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="title" 
                               id="title" 
                               value="{{ old('title', $notification->title) }}" 
                               required
                               class="form-control @error('title') is-invalid @enderror"
                               placeholder="Enter notification title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-12">
                        <label for="img" class="form-label fw-semibold">Image</label>
                        @if($notification->img)
                            <div class="mb-3">
                                <p class="text-muted small mb-2">Current Image:</p>
                                <img src="{{ asset('storage/' . $notification->img) }}" 
                                     alt="{{ $notification->title }}" 
                                     class="rounded border" 
                                     style="max-width: 200px; max-height: 200px; object-fit: cover;">
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
                    
                    <div class="col-12">
                        <label for="description" class="form-label fw-semibold">Description</label>
                        <textarea name="description" 
                                  id="description" 
                                  rows="6"
                                  class="form-control @error('description') is-invalid @enderror"
                                  placeholder="Enter notification description...">{{ old('description', $notification->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-4 pt-3 border-top">
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.notifications.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-x-circle me-1"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-1"></i> Update Notification
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
