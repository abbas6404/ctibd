@extends('layouts.app')

@section('content')
@if(isset($course))
<!-- Course Detail Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 2rem 0; margin-bottom: 1rem;">
    <div class="container text-center text-white px-3">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 700;">
            {{ $course->title }}
        </h1>
    </div>
</div>

<!-- Course Detail Section -->
<section class="py-5" style="margin-bottom: 4rem;">
    <div class="container px-3 px-md-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-white" style="border-radius: 2rem; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
                    <!-- Course Image -->
                    @if($course->img)
                        <div style="height: 400px; overflow: hidden; background: #f0f0f0;">
                            <img src="{{ asset('storage/' . $course->img) }}" 
                                 alt="{{ $course->title }}" 
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    @else
                        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 400px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-book" style="font-size: 5rem; color: rgba(255,255,255,0.5);"></i>
                        </div>
                    @endif
                    
                    <!-- Course Content -->
                    <div class="p-4 p-md-5">
                        @if($course->description)
                            <div style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.8; font-size: clamp(1rem, 2vw, 1.1rem);">
                                {!! nl2br(e($course->description)) !!}
                            </div>
                        @else
                            <div style="font-family: 'Inter', sans-serif; color: #718096; text-align: center; padding: 2rem;">
                                <p>No description available for this course.</p>
                            </div>
                        @endif
                        
                        <div class="mt-4 pt-4 border-top">
                            <a href="{{ route('courses') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); border: none; padding: 0.75rem 2rem; border-radius: 9999px;">
                                <i class="bi bi-arrow-left me-2"></i> Back to Courses
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<!-- No Course Found -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 2rem 0; margin-bottom: 1rem;">
    <div class="container text-center text-white px-3">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 700;">
            Course Not Found
        </h1>
    </div>
</div>

<section class="py-5" style="margin-bottom: 4rem;">
    <div class="container px-3 px-md-4">
        <div class="text-center py-5">
            <i class="bi bi-exclamation-circle" style="font-size: 4rem; color: #cbd5e0; margin-bottom: 1rem;"></i>
            <h3 style="font-family: 'Montserrat', sans-serif; color: #4a5568; margin-bottom: 0.5rem;">Course Not Available</h3>
            <p style="font-family: 'Inter', sans-serif; color: #718096; margin-bottom: 2rem;">The course you're looking for doesn't exist or has been removed.</p>
            <a href="{{ route('courses') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); border: none; padding: 0.75rem 2rem; border-radius: 9999px;">
                <i class="bi bi-arrow-left me-2"></i> Back to Courses
            </a>
        </div>
    </div>
</section>
@endif
@endsection