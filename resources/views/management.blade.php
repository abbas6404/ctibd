@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: clamp(3rem, 8vw, 5rem) 0; margin-bottom: clamp(2rem, 5vw, 4rem);">
    <div class="container text-center text-white px-3">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: clamp(2rem, 5vw, 3rem); font-weight: 700; margin-bottom: 1.5rem;">
            Management
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: clamp(1rem, 2vw, 1.25rem); opacity: 0.9; max-width: 700px; margin: 0 auto 2rem;">
            Leading excellence in education through strategic management and innovative leadership
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#leadership" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="bi bi-people me-2"></i>
                Leadership Team
            </a>
        </div>
    </div>
</div>

<!-- Leadership Team Section -->
<section id="leadership" class="py-5" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5 px-3">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 4vw, 2.5rem); font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                Management Team
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto; font-size: clamp(0.95rem, 1.5vw, 1rem);">
                Meet our experienced leadership team dedicated to providing quality education and student success
            </p>
        </div>
        
        <!-- Static Chairman Card -->
        <div class="row g-4 mb-4">
            <div class="col-lg-4 col-md-6 offset-lg-4 offset-md-3">
                <div class="text-center p-4 rounded-3" style="background: white; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div class="mb-4">
                        <img src="{{ asset('img/chairman.jpeg') }}" 
                             alt="Chairman" 
                             style="width: clamp(150px, 25vw, 200px); height: clamp(187px, 31vw, 250px); object-fit: cover; border: 4px solid #006F3F; border-radius: 1rem;">
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem; font-size: clamp(1.1rem, 2vw, 1.25rem);">
                        Iqbal Karim
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600; margin-bottom: 0; font-size: clamp(0.9rem, 1.5vw, 1rem);">
                        Chairman
                    </p>
                </div>
            </div>
        </div>
        
        @if($management->count() > 0)
            <div class="row g-4">
                @foreach($management as $member)
                    <div class="col-lg-3 col-md-6">
                        <div class="text-center p-4 rounded-3" style="background: white; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-radius: 2rem;">
                            <div class="mb-4">
                                @if($member->pic)
                                    <img src="{{ asset('storage/' . $member->pic) }}" 
                                         alt="{{ $member->name }}" 
                                         style="width: clamp(150px, 25vw, 200px); height: clamp(187px, 31vw, 250px); object-fit: cover; border: 4px solid #006F3F; border-radius: 1rem;">
                                @else
                                    <div style="width: clamp(150px, 25vw, 200px); height: clamp(187px, 31vw, 250px); background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); border: 4px solid #006F3F; border-radius: 1rem; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                        <i class="bi bi-person" style="font-size: clamp(3rem, 6vw, 4rem); color: rgba(255,255,255,0.5);"></i>
                                    </div>
                                @endif
                            </div>
                            <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem; font-size: clamp(1.1rem, 2vw, 1.25rem);">
                                {{ $member->name }}
                            </h4>
                            <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600; margin-bottom: 0; font-size: clamp(0.9rem, 1.5vw, 1rem);">
                                {{ $member->designation }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-people" style="font-size: 4rem; color: #cbd5e0; margin-bottom: 1rem;"></i>
                <h3 style="font-family: 'Montserrat', sans-serif; color: #4a5568; margin-bottom: 0.5rem;">No Management Team Members</h3>
                <p style="font-family: 'Inter', sans-serif; color: #718096;">Check back soon for updates.</p>
            </div>
        @endif
    </div>
</section>

<!-- Trainer Team Section -->
<section class="py-5" style="background: #C3ECFB; margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5 px-3">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 4vw, 2.5rem); font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                Trainer Team
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto; font-size: clamp(0.95rem, 1.5vw, 1rem);">
                Meet our expert trainers who bring real-world experience and industry knowledge to every session
            </p>
        </div>
        
        @if($trainers->count() > 0)
            <div class="row g-4">
                @foreach($trainers as $trainer)
                    <div class="col-lg-3 col-md-6">
                        <div class="text-center p-3 rounded-3" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 1.5rem;">
                            <div class="mb-3">
                                @if($trainer->pic)
                                    <img src="{{ asset('storage/' . $trainer->pic) }}" 
                                         alt="{{ $trainer->name }}" 
                                         style="width: clamp(150px, 25vw, 200px); height: clamp(187px, 31vw, 250px); object-fit: cover; border: 3px solid #006F3F; border-radius: 1rem;">
                                @else
                                    <div style="width: clamp(150px, 25vw, 200px); height: clamp(187px, 31vw, 250px); background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); border: 3px solid #006F3F; border-radius: 1rem; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                        <i class="bi bi-person" style="font-size: clamp(3rem, 6vw, 4rem); color: rgba(255,255,255,0.5);"></i>
                                    </div>
                                @endif
                            </div>
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem; font-size: clamp(1rem, 1.8vw, 1.1rem);">
                                {{ $trainer->name }}
                            </h5>
                            <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600; margin-bottom: 0; font-size: clamp(0.85rem, 1.3vw, 0.95rem);">
                                {{ $trainer->designation }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-person-badge" style="font-size: 4rem; color: #cbd5e0; margin-bottom: 1rem;"></i>
                <h3 style="font-family: 'Montserrat', sans-serif; color: #4a5568; margin-bottom: 0.5rem;">No Trainers Available</h3>
                <p style="font-family: 'Inter', sans-serif; color: #718096;">Check back soon for updates.</p>
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%); border-radius: clamp(1rem, 3vw, 2rem); margin-bottom: clamp(2rem, 5vw, 4rem);">
    <div class="container text-center text-white px-3">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1rem;">
            Connect with Our Leadership
        </h2>
        <p style="font-family: 'Inter', sans-serif; font-size: clamp(0.95rem, 1.8vw, 1.1rem); opacity: 0.9; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Have questions about our management or want to discuss partnership opportunities? Reach out to our leadership team.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="/contact" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="bi bi-envelope me-2"></i>
                Contact Leadership
            </a>
            <a href="/admission" class="btn btn-outline-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="bi bi-mortarboard me-2"></i>
                Admission Process
            </a>
        </div>
    </div>
</section>
@endsection