@extends('admin.layouts.app')

@section('title', 'Short Courses')
@section('page-title', 'Short Courses Management')
@section('page-description', 'Manage all short courses')

@section('header-actions')
    <a href="{{ route('admin.short-courses.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle me-1"></i> Add Course
    </a>
@endsection

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="border-0">Image</th>
                            <th class="border-0">Description</th>
                            <th class="border-0">Created</th>
                            <th class="border-0 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($courses as $course)
                            <tr>
                                <td>
                                    @if($course->img)
                                        <img src="{{ asset('storage/' . $course->img) }}" 
                                             alt="Course" 
                                             class="rounded" 
                                             style="width: 80px; height: 80px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                             style="width: 80px; height: 80px;">
                                            <i class="bi bi-image text-muted fs-4"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="text-muted small">
                                        {{ Str::limit($course->description ?? 'No description', 150) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-muted small">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ $course->created_at->format('M d, Y') }}
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.short-courses.edit', $course) }}" 
                                           class="btn btn-sm btn-outline-primary" 
                                           title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.short-courses.destroy', $course) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this course?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-sm btn-outline-danger" 
                                                    title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="bi bi-book fs-1 d-block mb-3"></i>
                                        <p class="mb-0">No courses found.</p>
                                        <a href="{{ route('admin.short-courses.create') }}" class="btn btn-sm btn-primary mt-3">
                                            <i class="bi bi-plus-circle me-1"></i> Add First Course
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($courses->hasPages())
                <div class="card-footer border-top bg-white">
                    <div class="d-flex justify-content-center">
                        {{ $courses->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
