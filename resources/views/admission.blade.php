@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 5rem 0; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: 3rem; font-weight: 700; margin-bottom: 1.5rem;">
            Admission Process
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.25rem; opacity: 0.9; max-width: 700px; margin: 0 auto 2rem;">
            Start your journey with Id Confident Training Institute Bangladesh
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#requirements" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-list me-2"></i>
                Requirements
            </a>
            <a href="#process" class="btn btn-outline-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-arrow-right me-2"></i>
                How to Apply
            </a>
        </div>
    </div>
</div>

<!-- Admission Requirements -->
<section id="requirements" class="py-5" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                General Requirements
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto;">
                Essential criteria for admission to Id Confident Training Institute Bangladesh programs
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Academic Requirements -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; border-left: 4px solid #006F3F;">
                    <div class="d-flex align-items-center mb-3">
                        <div style="background: #006F3F; color: white; width: 60px; height: 60px; border-radius: 1rem; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <i class="fas fa-graduation-cap" style="font-size: 1.5rem;"></i>
                        </div>
                        <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin: 0;">
                            Age & Education
                        </h4>
                    </div>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin-bottom: 1rem;">
                        Basic eligibility criteria for all programs.
                    </p>
                    <ul style="font-family: 'Inter', sans-serif; color: #4a5568; font-size: 0.9rem; padding-left: 1.5rem;">
                        <li>Minimum age: 16 years</li>
                        <li>High School Diploma or equivalent</li>
                        <li>Basic computer literacy</li>
                        <li>Commitment to professional development</li>
                    </ul>
                </div>
            </div>
            
            <!-- Documentation -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; border-left: 4px solid #2563eb;">
                    <div class="d-flex align-items-center mb-3">
                        <div style="background: #2563eb; color: white; width: 60px; height: 60px; border-radius: 1rem; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <i class="fas fa-file-alt" style="font-size: 1.5rem;"></i>
                        </div>
                        <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin: 0;">
                            Language Proficiency
                        </h4>
                    </div>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin-bottom: 1rem;">
                        Communication requirements for effective learning.
                    </p>
                    <ul style="font-family: 'Inter', sans-serif; color: #4a5568; font-size: 0.9rem; padding-left: 1.5rem;">
                        <li>English language proficiency</li>
                        <li>Basic Bengali communication (preferred)</li>
                        <li>Reading comprehension skills</li>
                        <li>Written communication ability</li>
                    </ul>
                </div>
            </div>
            
            <!-- Additional Requirements -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; border-left: 4px solid #7c3aed;">
                    <div class="d-flex align-items-center mb-3">
                        <div style="background: #7c3aed; color: white; width: 60px; height: 60px; border-radius: 1rem; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <i class="fas fa-plus" style="font-size: 1.5rem;"></i>
                        </div>
                        <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin: 0;">
                            Technical Requirements
                        </h4>
                    </div>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin-bottom: 1rem;">
                        Basic tools and equipment needed for training programs.
                    </p>
                    <ul style="font-family: 'Inter', sans-serif; color: #4a5568; font-size: 0.9rem; padding-left: 1.5rem;">
                        <li>Personal computer or laptop</li>
                        <li>Stable internet connection</li>
                        <li>Basic software tools (program-specific)</li>
                        <li>Notebook and writing materials</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Admission Process Steps -->
<section id="process" class="py-5" style="background: #f8f9fa; margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                How to Apply
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto;">
                Simple 4-step process to join CTIBD
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div class="mb-4">
                        <div style="background: #006F3F; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                            <span style="font-family: 'Montserrat', sans-serif; font-size: 2rem; font-weight: 700;">1</span>
                        </div>
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                        Inquire
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem;">
                        Contact our admissions team to discuss your training needs and program options.
                    </p>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div class="mb-4">
                        <div style="background: #2563eb; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                            <span style="font-family: 'Montserrat', sans-serif; font-size: 2rem; font-weight: 700;">2</span>
                        </div>
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                        Apply
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem;">
                        Submit your application with required documents and complete the assessment process.
                    </p>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div class="mb-4">
                        <div style="background: #7c3aed; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                            <span style="font-family: 'Montserrat', sans-serif; font-size: 2rem; font-weight: 700;">3</span>
                        </div>
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                        Review & Offer
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem;">
                        Our team reviews your application and extends an offer for program enrollment.
                    </p>
                </div>
            </div>
            
            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div class="mb-4">
                        <div style="background: #10b981; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                            <span style="font-family: 'Montserrat', sans-serif; font-size: 2rem; font-weight: 700;">4</span>
                        </div>
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                        Pay Fees & Enroll
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem;">
                        Complete your enrollment by paying program fees and confirming your seat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact for Admission -->
<section class="py-5" style="margin-bottom: 4rem;">
    <div class="container text-center">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1.5rem;">
            Need Help with Admission?
        </h2>
        <p style="font-family: 'Inter', sans-serif; color: #718096; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Our admissions team at Id Confident Training Institute Bangladesh is here to guide you through every step of the process.
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="p-4 rounded-3" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div style="background: #006F3F; color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Call Us
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin: 0;">
                        +880 1711-234567
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="p-4 rounded-3" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div style="background: #2563eb; color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Email Us
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin: 0;">
                        admissions@idconfidentbd.com
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="p-4 rounded-3" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div style="background: #7c3aed; color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Office Hours
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin: 0;">
                        Sat-Thu: 9:00 AM - 6:00 PM
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection