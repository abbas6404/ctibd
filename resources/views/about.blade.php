@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 5rem 0; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: 3rem; font-weight: 700; margin-bottom: 1.5rem;">
            About CTIBD
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.25rem; opacity: 0.9; max-width: 700px; margin: 0 auto 2rem;">
            Leading professional education and training in Bangladesh, empowering individuals and organizations to achieve excellence through innovative learning solutions.
        </p>
        <div class="row justify-content-center text-center" style="margin-top: 3rem;">
            <div class="col-md-4 mb-3">
                <h3 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">500+</h3>
                <p style="font-family: 'Inter', sans-serif; opacity: 0.9; margin: 0;">Students Trained</p>
            </div>
            <div class="col-md-4 mb-3">
                <h3 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">50+</h3>
                <p style="font-family: 'Inter', sans-serif; opacity: 0.9; margin: 0;">Expert Trainers</p>
            </div>
            <div class="col-md-4 mb-3">
                <h3 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">95%</h3>
                <p style="font-family: 'Inter', sans-serif; opacity: 0.9; margin: 0;">Job Placement Rate</p>
            </div>
        </div>
    </div>
</div>

<!-- Mission & Excellence Section -->
<section class="py-5" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1.5rem;">
                    Our Mission & Vision
                </h2>
                <div class="mb-4">
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #006F3F; margin-bottom: 1rem;">
                        <i class="fas fa-bullseye me-2"></i>Our Mission
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; margin-bottom: 2rem;">
                        To provide world-class education and training that transforms lives and empowers individuals to reach their full potential through innovative learning experiences and industry-relevant skills development.
                    </p>
                </div>
                <div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #2563eb; margin-bottom: 1rem;">
                        <i class="fas fa-eye me-2"></i>Our Vision
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7;">
                        To be the leading institution in professional education, recognized globally for excellence in training, innovation, and creating pathways to success for our students and partners.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background: linear-gradient(135deg, #f0f8ff 0%, #e6f7ff 100%); border-radius: 2rem; padding: 3rem; border: 1px solid rgba(0,111,63,0.1);">
                    <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 2rem; text-align: center;">
                        Why Choose CTIBD?
                    </h3>
                    <div class="mb-3">
                        <div class="d-flex align-items-start mb-3">
                            <div style="width: 40px; height: 40px; background: #006F3F; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; margin-right: 1rem; flex-shrink: 0;">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 600; margin-bottom: 0.5rem;">Nationally Recognised Training</h5>
                                <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem; margin: 0;">Industry-standard qualifications that employers trust</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <div style="width: 40px; height: 40px; background: #2563eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; margin-right: 1rem; flex-shrink: 0;">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div>
                                <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 600; margin-bottom: 0.5rem;">Expert Industry Trainers</h5>
                                <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem; margin: 0;">Learn from professionals with real-world experience</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div style="width: 40px; height: 40px; background: #7c3aed; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; margin-right: 1rem; flex-shrink: 0;">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div>
                                <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 600; margin-bottom: 0.5rem;">Job-Ready Graduates</h5>
                                <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem; margin: 0;">95% job placement rate with career support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%); border-radius: 2rem; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">
            Ready to Transform Your Career?
        </h2>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.1rem; opacity: 0.9; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Join thousands of successful graduates who have advanced their careers with CTIBD
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="/courses" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-graduation-cap me-2"></i>
                Browse Courses
            </a>
            <a href="/contact" class="btn btn-outline-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-phone me-2"></i>
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection