@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: clamp(3rem, 8vw, 5rem) 0; margin-bottom: clamp(2rem, 5vw, 4rem);">
    <div class="container text-center text-white px-3">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 700; margin-bottom: 1.5rem;">
            Notification Details
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: clamp(1rem, 2.5vw, 1.25rem); opacity: 0.9; max-width: 700px; margin: 0 auto;">
            Stay updated with the latest announcements and important notices
        </p>
    </div>
</div>

<!-- Notification Detail -->
<section class="py-5" style="margin-bottom: clamp(2rem, 5vw, 4rem);">
    <div class="container px-3 px-md-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Back Button -->
                <div style="margin-bottom: clamp(1rem, 3vw, 1.5rem);">
                    <a href="{{ route('notification') }}" class="btn btn-outline-secondary" style="border-radius: clamp(0.5rem, 1.5vw, 0.75rem); font-weight: 600; font-size: clamp(0.875rem, 2vw, 1rem); padding: clamp(0.5rem, 1.5vw, 0.75rem) clamp(1rem, 3vw, 1.5rem);">
                        <i class="bi bi-arrow-left me-2"></i>Back to Notifications
                    </a>
                </div>
                
                <!-- Notification Card -->
                <div class="rounded-3" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: clamp(1rem, 3vw, 2rem); padding: clamp(1rem, 3vw, 1.5rem) clamp(1rem, 4vw, 3rem);">
                    <!-- Header -->
                    <div style="margin-bottom: clamp(1rem, 3vw, 1.5rem); padding-bottom: clamp(0.75rem, 2vw, 1rem); border-bottom: 1px solid #e2e8f0;">
                        <div class="d-flex align-items-start" style="margin-bottom: clamp(0.75rem, 2vw, 1rem);">
                            <div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); color: white; width: clamp(45px, 7vw, 60px); height: clamp(45px, 7vw, 60px); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: clamp(1rem, 3vw, 1.5rem); flex-shrink: 0;">
                                <i class="bi bi-bell-fill" style="font-size: clamp(1rem, 2.5vw, 1.5rem);"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h2 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin: 0 0 clamp(0.5rem, 1.5vw, 0.75rem) 0; font-size: clamp(1.125rem, 3vw, 1.75rem); line-height: 1.3;">
                                    {{ $notification->title }}
                                </h2>
                                <div class="d-flex align-items-center flex-wrap" style="gap: clamp(0.5rem, 2vw, 0.75rem);">
                                    <span style="font-family: 'Inter', sans-serif; color: #718096; font-size: clamp(0.75rem, 2vw, 0.9rem);">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ $notification->created_at->format('F d, Y') }}
                                    </span>
                                    <span style="font-family: 'Inter', sans-serif; color: #718096; font-size: clamp(0.75rem, 2vw, 0.9rem);">
                                        <i class="bi bi-clock me-1"></i>
                                        {{ $notification->created_at->format('h:i A') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Image -->
                    @if($notification->img)
                        <div style="margin-bottom: clamp(1rem, 3vw, 1.5rem);">
                            <img src="{{ asset('storage/' . $notification->img) }}" 
                                 alt="{{ $notification->title }}" 
                                 class="img-fluid rounded-3 w-100" 
                                 style="max-height: clamp(250px, 50vw, 500px); object-fit: cover; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: clamp(0.75rem, 2vw, 1rem);">
                        </div>
                    @endif
                    
                    <!-- Description -->
                    @if($notification->description)
                        <div style="margin-bottom: clamp(1rem, 3vw, 1.5rem);">
                            <div style="font-family: 'Inter', sans-serif; color: #4a5568; font-size: clamp(0.9rem, 2.5vw, 1.1rem); line-height: 1.8; white-space: pre-wrap;">
                                {{ $notification->description }}
                            </div>
                        </div>
                    @endif
                    
                    <!-- Footer -->
                    <div style="padding-top: clamp(0.75rem, 2vw, 1rem); border-top: 1px solid #e2e8f0;">
                        <div class="d-flex justify-content-start align-items-center">
                            <a href="{{ route('notification') }}" class="btn btn-outline-secondary" style="border-radius: clamp(0.5rem, 1.5vw, 0.75rem); font-weight: 600; font-size: clamp(0.875rem, 2vw, 1rem); padding: clamp(0.5rem, 1.5vw, 0.75rem) clamp(1rem, 3vw, 1.5rem);">
                                <i class="bi bi-arrow-left me-2"></i>Back to All Notifications
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

