@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: clamp(3rem, 8vw, 5rem) 0; margin-bottom: clamp(2rem, 5vw, 4rem);">
    <div class="container text-center text-white px-3">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 700; margin-bottom: 1.5rem;">
            Notifications & Announcements
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: clamp(1rem, 2.5vw, 1.25rem); opacity: 0.9; max-width: 700px; margin: 0 auto 2rem;">
            Stay updated with the latest announcements, circulars, and important notices from CTIBD
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#latest" class="btn btn-light btn-lg" style="font-family: 'Inter', sans-serif; font-weight: 600; font-size: clamp(0.875rem, 2vw, 1rem); padding: clamp(0.75rem, 2vw, 1rem) clamp(1.5rem, 4vw, 2rem) !important;">
                <i class="bi bi-bell me-2"></i>
                Latest Updates
            </a>
        </div>
    </div>
</div>

<!-- Latest Notifications -->
<section id="latest" class="py-5" style="margin-bottom: clamp(2rem, 5vw, 4rem);">
    <div class="container px-3 px-md-4">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                Latest Notifications
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto; font-size: clamp(0.9rem, 2vw, 1rem);">
                Recent announcements and important updates
            </p>
        </div>
        
        @if($notifications->count() > 0)
            <!-- Notifications Grid -->
            <div class="row" style="gap: clamp(1rem, 3vw, 1.5rem) 0;">
                @foreach($notifications as $index => $notification)
                    @php
                        $colors = [
                            ['bg' => '#2563eb', 'border' => '#2563eb', 'badge' => '#e0e7ff'],
                            ['bg' => '#7c3aed', 'border' => '#7c3aed', 'badge' => '#f3e8ff'],
                            ['bg' => '#dc2626', 'border' => '#dc2626', 'badge' => '#fee2e2'],
                            ['bg' => '#f59e0b', 'border' => '#f59e0b', 'badge' => '#fef3c7'],
                            ['bg' => '#10b981', 'border' => '#10b981', 'badge' => '#d1fae5'],
                            ['bg' => '#ec4899', 'border' => '#ec4899', 'badge' => '#fce7f3'],
                        ];
                        $color = $colors[$index % count($colors)];
                    @endphp
                    <div class="col-12 col-md-6 col-lg-6" style="margin-bottom: clamp(1rem, 3vw, 1.5rem);">
                        <a href="{{ route('notification.show', $notification->id) }}" class="text-decoration-none">
                            <div class="rounded-3 h-100 notification-card" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; border-left: 4px solid {{ $color['border'] }}; transition: all 0.3s ease; cursor: pointer; overflow: hidden;">
                                <!-- Image -->
                                @if($notification->img)
                                    <div style="width: 100%; height: clamp(150px, 30vw, 200px); overflow: hidden;">
                                        <img src="{{ asset('storage/' . $notification->img) }}" 
                                             alt="{{ $notification->title }}" 
                                             class="w-100 h-100" 
                                             style="object-fit: cover; transition: transform 0.3s ease;">
                                    </div>
                                @endif
                                
                                <!-- Content -->
                                <div style="padding: clamp(1rem, 3vw, 1.5rem);">
                                    <div class="d-flex align-items-start" style="margin-bottom: clamp(0.75rem, 2vw, 1rem);">
                                        <div style="background: {{ $color['bg'] }}; color: white; width: clamp(40px, 6vw, 50px); height: clamp(40px, 6vw, 50px); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: clamp(0.75rem, 2vw, 1rem); flex-shrink: 0;">
                                            <i class="bi bi-bell" style="font-size: clamp(0.9rem, 2vw, 1.25rem);"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin: 0 0 clamp(0.25rem, 1vw, 0.5rem) 0; font-size: clamp(0.95rem, 2.5vw, 1.125rem); line-height: 1.4;">
                                                {{ $notification->title }}
                                            </h5>
                                            @if($notification->description)
                                                <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: clamp(0.8rem, 2vw, 0.9rem); margin-bottom: clamp(0.75rem, 2vw, 1rem); line-height: 1.6;">
                                                    {{ Str::limit($notification->description, 120) }}
                                                </p>
                                            @endif
                                            <div class="d-flex justify-content-between align-items-center flex-wrap" style="gap: clamp(0.5rem, 2vw, 0.75rem);">
                                                <span style="font-family: 'Inter', sans-serif; color: #718096; font-size: clamp(0.7rem, 1.5vw, 0.8rem);">
                                                    <i class="bi bi-clock me-1"></i>
                                                    {{ $notification->created_at->diffForHumans() }}
                                                </span>
                                                <span style="font-family: 'Inter', sans-serif; color: {{ $color['bg'] }}; font-size: clamp(0.7rem, 1.5vw, 0.8rem); font-weight: 600;">
                                                    Read More <i class="bi bi-arrow-right ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-bell-slash" style="font-size: 4rem; color: #cbd5e0; margin-bottom: 1rem;"></i>
                <h3 style="font-family: 'Montserrat', sans-serif; color: #4a5568; margin-bottom: 0.5rem;">No Notifications</h3>
                <p style="font-family: 'Inter', sans-serif; color: #718096;">Check back soon for updates and announcements.</p>
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%); border-radius: clamp(1rem, 3vw, 2rem); margin-bottom: clamp(2rem, 5vw, 4rem); padding: clamp(2rem, 5vw, 3rem) 0;">
    <div class="container text-center text-white px-3">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: clamp(0.75rem, 2vw, 1rem);">
            Stay Connected
        </h2>
        <p style="font-family: 'Inter', sans-serif; font-size: clamp(0.9rem, 2.5vw, 1.1rem); opacity: 0.9; margin-bottom: clamp(1.5rem, 4vw, 2rem); max-width: 600px; margin-left: auto; margin-right: auto;">
            Never miss an important update. Subscribe to our notification service and follow us on social media.
        </p>
        <div class="d-flex justify-content-center flex-wrap" style="gap: clamp(0.75rem, 2vw, 1rem);">
            <a href="#" class="btn btn-light" style="font-family: 'Inter', sans-serif; font-weight: 600; font-size: clamp(0.875rem, 2vw, 1rem); padding: clamp(0.75rem, 2vw, 1rem) clamp(1.5rem, 4vw, 2rem); border-radius: clamp(0.5rem, 1.5vw, 0.75rem);">
                <i class="bi bi-bell me-2"></i>
                Subscribe to Updates
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light" style="font-family: 'Inter', sans-serif; font-weight: 600; font-size: clamp(0.875rem, 2vw, 1rem); padding: clamp(0.75rem, 2vw, 1rem) clamp(1.5rem, 4vw, 2rem); border-radius: clamp(0.5rem, 1.5vw, 0.75rem);">
                <i class="bi bi-question-circle me-2"></i>
                Contact Support
            </a>
        </div>
    </div>
</section>

<style>
    .notification-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 35px rgba(0,0,0,0.15) !important;
    }
    
    .notification-card:hover img {
        transform: scale(1.05);
    }
    
    .notification-card h5 {
        transition: color 0.3s ease;
    }
    
    .notification-card:hover h5 {
        color: #006F3F !important;
    }
</style>
@endsection