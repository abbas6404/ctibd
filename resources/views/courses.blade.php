@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 3rem 0; margin-bottom: 3rem;">
    <div class="container text-center text-white px-3">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 700; margin-bottom: 1rem;">
            Our Courses
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: clamp(1rem, 2.5vw, 1.25rem); opacity: 0.9; max-width: 700px; margin: 0 auto;">
            Discover our comprehensive range of professional training programs designed to advance your career and skills
        </p>
    </div>
</div>

<!-- All Courses Section -->
<section class="py-4" style="background: #f8f9fa; margin-bottom: 3rem;">
    <div class="container px-3 px-md-4">
        @if($courses->count() > 0)
            <div class="row g-3 g-md-4">
                @foreach($courses as $course)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ route('course-detail', ['id' => $course->id]) }}" style="text-decoration: none; color: inherit;">
                            <div class="bg-white h-100" style="border-radius: 1.5rem; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.12)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.08)';">
                                @if($course->img)
                                    <div style="height: 120px; overflow: hidden; background: #f0f0f0;">
                                        <img src="{{ asset('storage/' . $course->img) }}" 
                                             alt="{{ $course->title }}" 
                                             style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                @else
                                    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 120px; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi bi-book" style="font-size: 3rem; color: rgba(255,255,255,0.5);"></i>
                                    </div>
                                @endif
                                <div class="p-3">
                                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                                        {{ $course->title }}
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-book" style="font-size: 4rem; color: #cbd5e0; margin-bottom: 1rem;"></i>
                <h3 style="font-family: 'Montserrat', sans-serif; color: #4a5568; margin-bottom: 0.5rem;">No Courses Available</h3>
                <p style="font-family: 'Inter', sans-serif; color: #718096;">Check back soon for our upcoming courses.</p>
            </div>
        @endif
    </div>
</section>
@endsection