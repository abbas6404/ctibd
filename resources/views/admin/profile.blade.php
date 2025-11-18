@extends('admin.layouts.app')

@section('title', 'Profile')
@section('page-title', 'My Profile')
@section('page-description', 'Manage your account information')

@section('content')
    <div class="row g-4">
        <!-- Profile Information Card -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-bold">
                        <i class="bi bi-person-circle me-2 text-primary"></i>Profile Information
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="name" 
                                       id="name" 
                                       value="{{ old('name', $admin->name) }}" 
                                       required
                                       class="form-control @error('name') is-invalid @enderror"
                                       placeholder="Enter your full name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold">Email Address <span class="text-danger">*</span></label>
                                <input type="email" 
                                       name="email" 
                                       id="email" 
                                       value="{{ old('email', $admin->email) }}" 
                                       required
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Enter your email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mt-4 pt-3 border-top">
                            <h6 class="fw-semibold mb-3">
                                <i class="bi bi-lock me-2 text-warning"></i>Change Password (Optional)
                            </h6>
                            
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="current_password" class="form-label fw-semibold">Current Password</label>
                                    <input type="password" 
                                           name="current_password" 
                                           id="current_password" 
                                           class="form-control @error('current_password') is-invalid @enderror"
                                           placeholder="Enter current password">
                                    @error('current_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="password" class="form-label fw-semibold">New Password</label>
                                    <input type="password" 
                                           name="password" 
                                           id="password" 
                                           class="form-control @error('password') is-invalid @enderror"
                                           placeholder="Enter new password">
                                    <small class="form-text text-muted">Minimum 8 characters</small>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                                    <input type="password" 
                                           name="password_confirmation" 
                                           id="password_confirmation" 
                                           class="form-control"
                                           placeholder="Confirm new password">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 pt-3 border-top">
                            <div class="d-flex justify-content-end gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-1"></i> Update Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Account Information Card -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-bold">
                        <i class="bi bi-info-circle me-2 text-info"></i>Account Information
                    </h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label text-muted small mb-1">Member Since</label>
                        <p class="mb-0 fw-semibold">
                            <i class="bi bi-calendar3 me-1"></i>
                            {{ $admin->created_at->format('F d, Y') }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small mb-1">Last Updated</label>
                        <p class="mb-0 fw-semibold">
                            <i class="bi bi-clock me-1"></i>
                            {{ $admin->updated_at->format('F d, Y') }}
                        </p>
                    </div>
                    @if($admin->email_verified_at)
                        <div class="mb-3">
                            <label class="form-label text-muted small mb-1">Email Status</label>
                            <p class="mb-0">
                                <span class="badge bg-success">
                                    <i class="bi bi-check-circle me-1"></i>Verified
                                </span>
                            </p>
                        </div>
                    @endif
                    <div>
                        <label class="form-label text-muted small mb-1">Account ID</label>
                        <p class="mb-0 fw-semibold small">
                            <code>#{{ $admin->id }}</code>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Quick Actions Card -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-bold">
                        <i class="bi bi-lightning me-2 text-warning"></i>Quick Actions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-speedometer2 me-1"></i> Go to Dashboard
                        </a>
                        <a href="{{ route('home') }}" target="_blank" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-box-arrow-up-right me-1"></i> View Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
