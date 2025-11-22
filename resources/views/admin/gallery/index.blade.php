@extends('admin.layouts.app')

@section('title', 'Gallery')
@section('page-title', 'Gallery Management')
@section('page-description', 'Manage all gallery images')

@section('header-actions')
    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle me-1"></i> Add Image
    </a>
@endsection

@section('content')
    @if($galleries->count() > 0)
        <div class="row g-4">
            @foreach($galleries as $gallery)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative" style="height: 200px; overflow: hidden;">
                            @if($gallery->img)
                                <img src="{{ asset('storage/' . $gallery->img) }}" 
                                     alt="Gallery" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;">
                            @else
                                <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center">
                                    <i class="bi bi-image text-muted fs-1"></i>
                                </div>
                            @endif
                        </div>
                        <div class="card-body p-3">
                            @if($gallery->title)
                                <h6 class="mb-2 fw-semibold">{{ $gallery->title }}</h6>
                            @endif
                            @if($gallery->category)
                                <span class="badge bg-primary mb-2">{{ $gallery->category->name }}</span>
                            @endif
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="bi bi-calendar3 me-1"></i>
                                    {{ $gallery->created_at->format('M d, Y') }}
                                </small>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('admin.gallery.edit', $gallery) }}" 
                                       class="btn btn-outline-primary" 
                                       title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.gallery.destroy', $gallery) }}" 
                                          method="POST" 
                                          class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this image?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-outline-danger" 
                                                title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        @if($galleries->hasPages())
            <div class="mt-4">
                {{ $galleries->links('pagination::bootstrap-5') }}
            </div>
        @endif
    @else
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center py-5">
                <div class="text-muted">
                    <i class="bi bi-images fs-1 d-block mb-3"></i>
                    <p class="mb-0">No gallery images found.</p>
                    <a href="{{ route('admin.gallery.create') }}" class="btn btn-sm btn-primary mt-3">
                        <i class="bi bi-plus-circle me-1"></i> Add First Image
                    </a>
                </div>
            </div>
        </div>
    @endif
@endsection
