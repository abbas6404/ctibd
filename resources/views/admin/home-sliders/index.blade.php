@extends('admin.layouts.app')

@section('title', 'Home Sliders')
@section('page-title', 'Home Slider Management')
@section('page-description', 'Manage slider images for home page')

@section('header-actions')
    <a href="{{ route('admin.home-sliders.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle me-1"></i> Add Slider Image
    </a>
@endsection

@section('content')
    @if($sliders->count() > 0)
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Image</th>
                                <th>Title</th>
                                <th style="width: 100px;">Order</th>
                                <th style="width: 100px;">Status</th>
                                <th style="width: 150px;">Created</th>
                                <th style="width: 120px;" class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>
                                        @if($slider->img)
                                            <img src="{{ asset($slider->img) }}" 
                                                 alt="Slider" 
                                                 class="rounded" 
                                                 style="width: 60px; height: 60px; object-fit: cover;">
                                        @else
                                            <div class="bg-light rounded d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                                <i class="bi bi-image text-muted"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="fw-semibold">{{ $slider->title ?? 'Untitled' }}</div>
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary">{{ $slider->order }}</span>
                                    </td>
                                    <td>
                                        @if($slider->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <small class="text-muted">
                                            {{ $slider->created_at->format('M d, Y') }}
                                        </small>
                                    </td>
                                    <td class="text-end">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="{{ route('admin.home-sliders.edit', $slider) }}" 
                                               class="btn btn-outline-primary" 
                                               title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.home-sliders.destroy', $slider) }}" 
                                                  method="POST" 
                                                  class="d-inline"
                                                  onsubmit="return confirm('Are you sure you want to delete this slider image?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn btn-outline-danger" 
                                                        title="Delete">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center py-5">
                <div class="text-muted">
                    <i class="bi bi-images fs-1 d-block mb-3"></i>
                    <p class="mb-0">No slider images found.</p>
                    <a href="{{ route('admin.home-sliders.create') }}" class="btn btn-sm btn-primary mt-3">
                        <i class="bi bi-plus-circle me-1"></i> Add First Slider Image
                    </a>
                </div>
            </div>
        </div>
    @endif
@endsection

