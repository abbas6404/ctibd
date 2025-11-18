@extends('admin.layouts.app')

@section('title', 'Settings')
@section('page-title', 'Settings')
@section('page-description', 'Manage site settings and configuration')

@section('content')
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row g-4">
            <!-- Settings Navigation -->
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm sticky-top" style="top: 120px;">
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column" id="settingsTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="general-tab" data-bs-toggle="pill" data-bs-target="#general" type="button" role="tab">
                                    <i class="bi bi-gear me-2"></i> General
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="social-tab" data-bs-toggle="pill" data-bs-target="#social" type="button" role="tab">
                                    <i class="bi bi-share me-2"></i> Social Media
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="email-tab" data-bs-toggle="pill" data-bs-target="#email" type="button" role="tab">
                                    <i class="bi bi-envelope me-2"></i> Email
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Settings Content -->
            <div class="col-lg-9">
                <div class="tab-content" id="settingsTabsContent">
                    <!-- General Settings -->
                    <div class="tab-pane fade show active" id="general" role="tabpanel">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-bottom">
                                <h5 class="mb-0 fw-bold">
                                    <i class="bi bi-gear me-2 text-primary"></i>General Settings
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    @foreach($settings['general'] ?? [] as $setting)
                                        <div class="col-12">
                                            <label for="setting_{{ $setting->key }}" class="form-label fw-semibold">
                                                {{ ucwords(str_replace('_', ' ', $setting->key)) }}
                                                @if($setting->description)
                                                    <small class="text-muted d-block fw-normal">{{ $setting->description }}</small>
                                                @endif
                                            </label>
                                            @if($setting->type === 'textarea')
                                                <textarea name="{{ $setting->key }}" 
                                                          id="setting_{{ $setting->key }}" 
                                                          class="form-control" 
                                                          rows="3">{{ old($setting->key, $setting->value) }}</textarea>
                                            @else
                                                <input type="{{ $setting->type }}" 
                                                       name="{{ $setting->key }}" 
                                                       id="setting_{{ $setting->key }}" 
                                                       value="{{ old($setting->key, $setting->value) }}" 
                                                       class="form-control">
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Settings -->
                    <div class="tab-pane fade" id="social" role="tabpanel">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-bottom">
                                <h5 class="mb-0 fw-bold">
                                    <i class="bi bi-share me-2 text-info"></i>Social Media Settings
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    @foreach($settings['social'] ?? [] as $setting)
                                        <div class="col-12">
                                            <label for="setting_{{ $setting->key }}" class="form-label fw-semibold">
                                                {{ ucwords(str_replace('_', ' ', str_replace('_url', '', $setting->key))) }}
                                                @if($setting->description)
                                                    <small class="text-muted d-block fw-normal">{{ $setting->description }}</small>
                                                @endif
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    @if(str_contains($setting->key, 'facebook'))
                                                        <i class="bi bi-facebook text-primary"></i>
                                                    @elseif(str_contains($setting->key, 'twitter'))
                                                        <i class="bi bi-twitter text-info"></i>
                                                    @elseif(str_contains($setting->key, 'instagram'))
                                                        <i class="bi bi-instagram text-danger"></i>
                                                    @elseif(str_contains($setting->key, 'linkedin'))
                                                        <i class="bi bi-linkedin text-primary"></i>
                                                    @elseif(str_contains($setting->key, 'youtube'))
                                                        <i class="bi bi-youtube text-danger"></i>
                                                    @else
                                                        <i class="bi bi-link-45deg"></i>
                                                    @endif
                                                </span>
                                                <input type="url" 
                                                       name="{{ $setting->key }}" 
                                                       id="setting_{{ $setting->key }}" 
                                                       value="{{ old($setting->key, $setting->value) }}" 
                                                       class="form-control"
                                                       placeholder="https://...">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Email Settings -->
                    <div class="tab-pane fade" id="email" role="tabpanel">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white border-bottom">
                                <h5 class="mb-0 fw-bold">
                                    <i class="bi bi-envelope me-2 text-warning"></i>Email Settings
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    @foreach($settings['email'] ?? [] as $setting)
                                        <div class="col-12">
                                            <label for="setting_{{ $setting->key }}" class="form-label fw-semibold">
                                                {{ ucwords(str_replace('_', ' ', $setting->key)) }}
                                                @if($setting->description)
                                                    <small class="text-muted d-block fw-normal">{{ $setting->description }}</small>
                                                @endif
                                            </label>
                                            <input type="{{ $setting->type }}" 
                                                   name="{{ $setting->key }}" 
                                                   id="setting_{{ $setting->key }}" 
                                                   value="{{ old($setting->key, $setting->value) }}" 
                                                   class="form-control">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Save Button -->
                <div class="mt-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-end gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-1"></i> Save Settings
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

