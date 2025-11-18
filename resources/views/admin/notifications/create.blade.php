@extends('admin.layouts.app')

@section('title', 'Add Notification')
@section('page-title', 'Add New Notification')
@section('page-description', 'Create a new notification')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.notifications.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row g-3">
                    <div class="col-12">
                        <label for="title" class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="title" 
                               id="title" 
                               value="{{ old('title') }}" 
                               required
                               class="form-control @error('title') is-invalid @enderror"
                               placeholder="Enter notification title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-12">
                        <label for="img" class="form-label fw-semibold">Image</label>
                        <input type="file" 
                               name="img" 
                               id="img" 
                               accept="image/*"
                               class="form-control @error('img') is-invalid @enderror">
                        <small class="form-text text-muted">Accepted formats: JPG, PNG, GIF, SVG (Max: 2MB)</small>
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
                                  placeholder="Enter notification description...">{{ old('description') }}</textarea>
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
                            <i class="bi bi-check-circle me-1"></i> Create Notification
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
