@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 5rem 0; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: 3rem; font-weight: 700; margin-bottom: 1.5rem;">
            Our Courses
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.25rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">
            Discover our comprehensive range of professional training programs designed to advance your career and skills
        </p>
    </div>
</div>

<!-- All Courses Section -->
<section class="py-5" style="background: #f8f9fa; margin-bottom: 4rem;">
    <div class="container">
        <div class="row g-4">
            <!-- Course 1: Business Development -->
            <div class="col-lg-3 col-md-6">
                <a href="{{ route('course-detail') }}" style="text-decoration: none; color: inherit;">
                    <div class="bg-white h-100" style="border-radius: 1.5rem; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 120px;"></div>
                        <div class="p-3">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                                Business Development Professional
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Course 2: IT Training -->
            <div class="col-lg-3 col-md-6">
                <a href="{{ route('course-detail') }}" style="text-decoration: none; color: inherit;">
                    <div class="bg-white h-100" style="border-radius: 1.5rem; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                        <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); height: 120px;"></div>
                        <div class="p-3">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                                IT Professional Certification
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Course 3: Digital Marketing -->
            <div class="col-lg-3 col-md-6">
                <a href="{{ route('course-detail') }}" style="text-decoration: none; color: inherit;">
                    <div class="bg-white h-100" style="border-radius: 1.5rem; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                        <div style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); height: 120px;"></div>
                        <div class="p-3">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                                Digital Marketing Mastery
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Course 4: Project Management -->
            <div class="col-lg-3 col-md-6">
                <a href="{{ route('course-detail') }}" style="text-decoration: none; color: inherit;">
                    <div class="bg-white h-100" style="border-radius: 1.5rem; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                        <div style="background: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%); height: 120px;"></div>
                        <div class="p-3">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                                Project Management
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Course 5: Data Analytics -->
            <div class="col-lg-3 col-md-6">
                <a href="{{ route('course-detail') }}" style="text-decoration: none; color: inherit;">
                    <div class="bg-white h-100" style="border-radius: 1.5rem; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                        <div style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); height: 120px;"></div>
                        <div class="p-3">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                                Data Analytics
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Course 6: Web Development -->
            <div class="col-lg-3 col-md-6">
                <a href="{{ route('course-detail') }}" style="text-decoration: none; color: inherit;">
                    <div class="bg-white h-100" style="border-radius: 1.5rem; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                        <div style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%); height: 120px;"></div>
                        <div class="p-3">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                                Web Development
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Course 7: Leadership Skills -->
            <div class="col-lg-3 col-md-6">
                <a href="{{ route('course-detail') }}" style="text-decoration: none; color: inherit;">
                    <div class="bg-white h-100" style="border-radius: 1.5rem; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                        <div style="background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%); height: 120px;"></div>
                        <div class="p-3">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                                Leadership Skills
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Course 8: Cybersecurity -->
            <div class="col-lg-3 col-md-6">
                <a href="{{ route('course-detail') }}" style="text-decoration: none; color: inherit;">
                    <div class="bg-white h-100" style="border-radius: 1.5rem; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 120px;"></div>
                        <div class="p-3">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                                Cybersecurity
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection