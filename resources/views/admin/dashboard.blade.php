@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-description', 'Overview of your training institute')

@section('content')
    <!-- Statistics Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-primary bg-opacity-10 rounded p-3">
                                <i class="bi bi-people fs-3 text-primary"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="text-muted mb-1 small">Total Employees</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['employees'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-success bg-opacity-10 rounded p-3">
                                <i class="bi bi-book fs-3 text-success"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="text-muted mb-1 small">Short Courses</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['short_courses'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-warning bg-opacity-10 rounded p-3">
                                <i class="bi bi-bell fs-3 text-warning"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="text-muted mb-1 small">Notifications</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['notifications'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-info bg-opacity-10 rounded p-3">
                                <i class="bi bi-images fs-3 text-info"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="text-muted mb-1 small">Gallery Images</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['gallery'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-danger bg-opacity-10 rounded p-3">
                                <i class="bi bi-person-badge fs-3 text-danger"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="text-muted mb-1 small">Management</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['management'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-secondary bg-opacity-10 rounded p-3">
                                <i class="bi bi-person-workspace fs-3 text-secondary"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="text-muted mb-1 small">Trainers</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['trainers'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="bg-purple bg-opacity-10 rounded p-3" style="background-color: rgba(102, 126, 234, 0.1) !important;">
                                <i class="bi bi-award fs-3" style="color: #667eea;"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="text-muted mb-1 small">Certificates</h6>
                            <h3 class="mb-0 fw-bold">{{ $stats['certificates'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Items -->
    <div class="row g-4">
        <!-- Recent Employees -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-bold">
                        <i class="bi bi-people me-2 text-primary"></i>Recent Employees
                    </h5>
                </div>
                <div class="card-body">
                    @if($recent_employees->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach($recent_employees as $employee)
                                <div class="list-group-item px-0 border-0 border-bottom">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="mb-1 fw-semibold">{{ $employee->name }}</h6>
                                            <p class="text-muted small mb-0">{{ $employee->designation }}</p>
                                        </div>
                                        <span class="badge {{ $employee->type === 'management' ? 'bg-primary' : 'bg-success' }}">
                                            {{ ucfirst($employee->type) }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ route('admin.employees.index') }}" class="btn btn-sm btn-link text-decoration-none mt-3 p-0">
                            View all <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    @else
                        <p class="text-muted small mb-0">No employees yet.</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Recent Courses -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-bold">
                        <i class="bi bi-book me-2 text-success"></i>Recent Courses
                    </h5>
                </div>
                <div class="card-body">
                    @if($recent_courses->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach($recent_courses as $course)
                                <div class="list-group-item px-0 border-0 border-bottom">
                                    <p class="mb-1 small">{{ Str::limit($course->description ?? 'No description', 60) }}</p>
                                    <p class="text-muted small mb-0">
                                        <i class="bi bi-calendar3 me-1"></i>{{ $course->created_at->format('M d, Y') }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ route('admin.short-courses.index') }}" class="btn btn-sm btn-link text-decoration-none mt-3 p-0">
                            View all <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    @else
                        <p class="text-muted small mb-0">No courses yet.</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Recent Notifications -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-bold">
                        <i class="bi bi-bell me-2 text-warning"></i>Recent Notifications
                    </h5>
                </div>
                <div class="card-body">
                    @if($recent_notifications->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach($recent_notifications as $notification)
                                <div class="list-group-item px-0 border-0 border-bottom">
                                    <h6 class="mb-1 fw-semibold small">{{ $notification->title }}</h6>
                                    <p class="text-muted small mb-0">
                                        <i class="bi bi-calendar3 me-1"></i>{{ $notification->created_at->format('M d, Y') }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ route('admin.notifications.index') }}" class="btn btn-sm btn-link text-decoration-none mt-3 p-0">
                            View all <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    @else
                        <p class="text-muted small mb-0">No notifications yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Recent Items Row -->
    <div class="row g-4 mt-2">
        <!-- Recent Gallery -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-bold">
                        <i class="bi bi-images me-2 text-info"></i>Recent Gallery Images
                    </h5>
                </div>
                <div class="card-body">
                    @if($recent_gallery->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach($recent_gallery as $gallery)
                                <div class="list-group-item px-0 border-0 border-bottom">
                                    <div class="d-flex align-items-center">
                                        @if($gallery->img)
                                            <img src="{{ asset('storage/' . $gallery->img) }}" alt="Gallery" class="rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                        @else
                                            <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                <i class="bi bi-image text-muted"></i>
                                            </div>
                                        @endif
                                        <div class="flex-grow-1">
                                            <p class="text-muted small mb-0">
                                                <i class="bi bi-calendar3 me-1"></i>{{ $gallery->created_at->format('M d, Y') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ route('admin.gallery.index') }}" class="btn btn-sm btn-link text-decoration-none mt-3 p-0">
                            View all <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    @else
                        <p class="text-muted small mb-0">No gallery images yet.</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Recent Certificates -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-bold">
                        <i class="bi bi-award me-2" style="color: #667eea;"></i>Recent Certificates
                    </h5>
                </div>
                <div class="card-body">
                    @if($recent_certificates->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach($recent_certificates as $certificate)
                                <div class="list-group-item px-0 border-0 border-bottom">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="mb-1 fw-semibold small">Registration ID: {{ $certificate->registration_id }}</h6>
                                            <p class="text-muted small mb-0">
                                                <i class="bi bi-calendar3 me-1"></i>{{ $certificate->created_at->format('M d, Y') }}
                                            </p>
                                        </div>
                                        @if($certificate->certificate_file)
                                            <a href="{{ asset('storage/' . $certificate->certificate_file) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-file-pdf"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ route('admin.certificates.index') }}" class="btn btn-sm btn-link text-decoration-none mt-3 p-0">
                            View all <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    @else
                        <p class="text-muted small mb-0">No certificates yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
