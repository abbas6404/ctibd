@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 5rem 0; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: 3rem; font-weight: 700; margin-bottom: 1.5rem;">
            Contact Us
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.25rem; opacity: 0.9; max-width: 700px; margin: 0 auto 2rem;">
            Get in touch with us for any inquiries, admissions, or partnership opportunities
        </p>
    </div>
</div>

<!-- Contact Information Section -->
<section class="py-5" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                Get In Touch
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto;">
                We are here to help you with any questions or concerns you may have
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Address -->
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div style="background: #006F3F; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-map-marker-alt" style="font-size: 2rem;"></i>
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                        Visit Us
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin-bottom: 0;">
                        123 Business Avenue<br>
                        Corporate District<br>
                        Dhaka 1200, Bangladesh
                    </p>
                </div>
            </div>
            
            <!-- Phone -->
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div style="background: #2563eb; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-phone" style="font-size: 2rem;"></i>
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                        Call Us
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin-bottom: 0;">
                        +880 1234-567890<br>
                        +880 9876-543210<br>
                        Mon-Fri: 9AM-6PM
                    </p>
                </div>
            </div>
            
            <!-- Email -->
            <div class="col-lg-4 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-radius: 2rem;">
                    <div style="background: #7c3aed; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-envelope" style="font-size: 2rem;"></i>
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                        Email Us
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin-bottom: 0;">
                        info@ctibd.edu.bd<br>
                        admission@ctibd.edu.bd<br>
                        support@ctibd.edu.bd
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5" style="background: #f8f9fa; margin-bottom: 4rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="p-5 rounded-3" style="background: white; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-radius: 2rem;">
                    <h3 style="font-family: 'Montserrat', sans-serif; font-size: 2rem; font-weight: 700; color: #2d3748; margin-bottom: 2rem; text-align: center;">
                        Send Us a Message
                    </h3>
                    
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label" style="font-family: 'Inter', sans-serif; font-weight: 600; color: #374151;">First Name</label>
                                <input type="text" class="form-control" id="firstName" style="border: 2px solid #e5e7eb; border-radius: 0.75rem; padding: 0.75rem 1rem; font-family: 'Inter', sans-serif;">
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label" style="font-family: 'Inter', sans-serif; font-weight: 600; color: #374151;">Last Name</label>
                                <input type="text" class="form-control" id="lastName" style="border: 2px solid #e5e7eb; border-radius: 0.75rem; padding: 0.75rem 1rem; font-family: 'Inter', sans-serif;">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label" style="font-family: 'Inter', sans-serif; font-weight: 600; color: #374151;">Email Address</label>
                                <input type="email" class="form-control" id="email" style="border: 2px solid #e5e7eb; border-radius: 0.75rem; padding: 0.75rem 1rem; font-family: 'Inter', sans-serif;">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label" style="font-family: 'Inter', sans-serif; font-weight: 600; color: #374151;">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" style="border: 2px solid #e5e7eb; border-radius: 0.75rem; padding: 0.75rem 1rem; font-family: 'Inter', sans-serif;">
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label" style="font-family: 'Inter', sans-serif; font-weight: 600; color: #374151;">Subject</label>
                                <input type="text" class="form-control" id="subject" style="border: 2px solid #e5e7eb; border-radius: 0.75rem; padding: 0.75rem 1rem; font-family: 'Inter', sans-serif;">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label" style="font-family: 'Inter', sans-serif; font-weight: 600; color: #374151;">Message</label>
                                <textarea class="form-control" id="message" rows="5" style="border: 2px solid #e5e7eb; border-radius: 0.75rem; padding: 0.75rem 1rem; font-family: 'Inter', sans-serif; resize: vertical;"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-lg px-5 py-3" style="background: #006F3F; color: white; border-radius: 1rem; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 1.1rem;">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                Find Us
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto;">
                Visit our campus for a tour or consultation
            </p>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="rounded-3 overflow-hidden" style="box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-radius: 2rem;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8978893087!2d90.42337131498253!3d23.750881394599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b5b4b5b5b5b5%3A0x1234567890abcdef!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1234567890123" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="py-5" style="background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%); border-radius: 2rem; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">
            Connect With Us
        </h2>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.1rem; opacity: 0.9; margin-bottom: 2rem;">
            Follow us on social media for updates and news
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fab fa-facebook-f me-2"></i>
                Facebook
            </a>
            <a href="#" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fab fa-linkedin-in me-2"></i>
                LinkedIn
            </a>
            <a href="#" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fab fa-twitter me-2"></i>
                Twitter
            </a>
            <a href="#" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fab fa-instagram me-2"></i>
                Instagram
            </a>
        </div>
    </div>
</section>
@endsection