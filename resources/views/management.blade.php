@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 5rem 0; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: 3rem; font-weight: 700; margin-bottom: 1.5rem;">
            Management
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.25rem; opacity: 0.9; max-width: 700px; margin: 0 auto 2rem;">
            Leading excellence in education through strategic management and innovative leadership
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#leadership" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-users me-2"></i>
                Leadership Team
            </a>
        </div>
    </div>
</div>

<!-- Leadership Team Section -->
<section id="leadership" class="py-5" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                Management Team
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto;">
                Meet our experienced leadership team dedicated to providing quality education and student success
            </p>
        </div>
        
        <div class="row g-4">
            <!-- CEO/Director -->
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4 rounded-3" style="background: white; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div class="mb-4">
                        <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Professional%20business%20executive%20portrait%2C%20confident%20smile%2C%20business%20suit%2C%20corporate%20setting%2C%20professional%20lighting&image_size=portrait_4_3" 
                             alt="CEO" style="width: 200px; height: 250px; object-fit: cover; border: 4px solid #006F3F;">
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Dr. Sarah Johnson
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600; margin-bottom: 0;">
                        Chief Executive Officer
                    </p>
                </div>
            </div>
            
            <!-- Academic Director -->
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4 rounded-3" style="background: white; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div class="mb-4">
                        <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Professional%20academic%20leader%20portrait%2C%20confident%20expression%2C%20business%20attire%2C%20university%20setting%2C%20professional%20photography&image_size=portrait_4_3" 
                             alt="Academic Director" style="width: 200px; height: 250px; object-fit: cover; border: 4px solid #2563eb;">
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Prof. Michael Chen
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #2563eb; font-weight: 600; margin-bottom: 0;">
                        Academic Director
                    </p>
                </div>
            </div>
            
            <!-- Operations Manager -->
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4 rounded-3" style="background: white; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div class="mb-4">
                        <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Professional%20operations%20manager%20portrait%2C%20confident%20smile%2C%20business%20professional%2C%20modern%20office%20setting&image_size=portrait_4_3" 
                             alt="Operations Manager" style="width: 200px; height: 250px; object-fit: cover; border: 4px solid #7c3aed;">
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Ms. Emily Rodriguez
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #7c3aed; font-weight: 600; margin-bottom: 0;">
                        Operations Manager
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trainer Team Section -->
<section class="py-5" style="background: #f8f9fa; margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                Trainer Team
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto;">
                Meet our expert trainers who bring real-world experience and industry knowledge to every session
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Trainer 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-3 rounded-3" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 1.5rem;">
                    <div class="mb-3">
                        <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Professional%20business%20trainer%20portrait%2C%20confident%20smile%2C%20business%20casual%20attire%2C%20professional%20lighting%2C%20modern%20corporate%20setting&image_size=portrait_4_3" 
                             alt="Trainer" style="width: 200px; height: 250px; object-fit: cover; border: 3px solid #006F3F;">
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        John Smith
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600; margin-bottom: 0;">
                        Business Strategy Expert
                    </p>
                </div>
            </div>
            
            <!-- Trainer 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-3 rounded-3" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 1.5rem;">
                    <div class="mb-3">
                        <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Professional%20female%20trainer%20portrait%2C%20confident%20expression%2C%20business%20professional%2C%20modern%20office%20setting%2C%20professional%20photography&image_size=portrait_4_3" 
                             alt="Trainer" style="width: 200px; height: 250px; object-fit: cover; border: 3px solid #2563eb;">
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Sarah Wilson
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #2563eb; font-weight: 600; margin-bottom: 0;">
                        Digital Marketing Trainer
                    </p>
                </div>
            </div>
            
            <!-- Trainer 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-3 rounded-3" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 1.5rem;">
                    <div class="mb-3">
                        <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Professional%20technology%20trainer%20portrait%2C%20confident%20smile%2C%20smart%20casual%20attire%2C%20tech%20corporate%20environment%2C%20professional%20lighting&image_size=portrait_4_3" 
                             alt="Trainer" style="width: 200px; height: 250px; object-fit: cover; border: 3px solid #7c3aed;">
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Michael Brown
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #7c3aed; font-weight: 600; margin-bottom: 0;">
                        Technology Specialist
                    </p>
                </div>
            </div>
            
            <!-- Trainer 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-3 rounded-3" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 1.5rem;">
                    <div class="mb-3">
                        <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Professional%20female%20leadership%20trainer%2C%20confident%20expression%2C%20business%20attire%2C%20corporate%20training%20environment%2C%20professional%20portrait&image_size=portrait_4_3" 
                             alt="Trainer" style="width: 200px; height: 250px; object-fit: cover; border: 3px solid #dc2626;">
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Lisa Anderson
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #dc2626; font-weight: 600; margin-bottom: 0;">
                        Leadership Coach
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%); border-radius: 2rem; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">
            Connect with Our Leadership
        </h2>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.1rem; opacity: 0.9; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Have questions about our management or want to discuss partnership opportunities? Reach out to our leadership team.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="/contact" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-envelope me-2"></i>
                Contact Leadership
            </a>
            <a href="/admission" class="btn btn-outline-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-graduation-cap me-2"></i>
                Admission Process
            </a>
        </div>
    </div>
</section>
@endsection