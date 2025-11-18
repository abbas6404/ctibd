@extends('admin.layouts.app')

@section('title', 'Add Employee')
@section('page-title', 'Add New Employee')
@section('page-description', 'Create a new employee or trainer')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.employees.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="name" 
                               id="name" 
                               value="{{ old('name') }}" 
                               required
                               class="form-control @error('name') is-invalid @enderror"
                               placeholder="Enter employee name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="designation" class="form-label fw-semibold">Designation <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="designation" 
                               id="designation" 
                               value="{{ old('designation') }}" 
                               required
                               class="form-control @error('designation') is-invalid @enderror"
                               placeholder="Enter designation">
                        @error('designation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="type" class="form-label fw-semibold">Type <span class="text-danger">*</span></label>
                        <select name="type" 
                                id="type" 
                                required
                                class="form-select @error('type') is-invalid @enderror">
                            <option value="">Select Type</option>
                            <option value="management" {{ old('type') === 'management' ? 'selected' : '' }}>
                                Management
                            </option>
                            <option value="trainer" {{ old('type') === 'trainer' ? 'selected' : '' }}>
                                Trainer
                            </option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="pic" class="form-label fw-semibold">Profile Picture</label>
                        <input type="file" 
                               name="pic" 
                               id="pic" 
                               accept="image/*"
                               class="form-control @error('pic') is-invalid @enderror">
                        <small class="form-text text-muted">Accepted formats: JPG, PNG, GIF, SVG (Max: 2MB)</small>
                        @error('pic')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-4 pt-3 border-top">
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.employees.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-x-circle me-1"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-1"></i> Create Employee
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
