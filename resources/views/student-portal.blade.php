@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); padding: 5rem 0; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: 3rem; font-weight: 700; margin-bottom: 1.5rem;">
            Student Portal
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.25rem; opacity: 0.9; max-width: 700px; margin: 0 auto 2rem;">
            Your gateway to academic success - access resources, manage your profile, and stay connected
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#dashboard" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-tachometer-alt me-2"></i>
                Go to Dashboard
            </a>
            <a href="/admission" class="btn btn-outline-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-user-plus me-2"></i>
                Apply for Admission
            </a>
        </div>
    </div>
</div>

<!-- Dashboard Overview -->
<section id="dashboard" class="py-5" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                Student Dashboard
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto;">
                Access all your academic information and services in one place
            </p>
        </div>
        
        <!-- Quick Stats -->
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3" style="background: white; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-radius: 1rem;">
                    <div style="width: 60px; height: 60px; background: #006F3F; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-book text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">12</h3>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin: 0;">Active Courses</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3" style="background: white; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-radius: 1rem;">
                    <div style="width: 60px; height: 60px; background: #2563eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-calendar-check text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">8</h3>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin: 0;">Upcoming Classes</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3" style="background: white; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-radius: 1rem;">
                    <div style="width: 60px; height: 60px; background: #7c3aed; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-bell text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">5</h3>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin: 0;">New Notices</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3" style="background: white; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-radius: 1rem;">
                    <div style="width: 60px; height: 60px; background: #dc2626; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-clock text-white" style="font-size: 1.5rem;"></i>
                    </div>
                    <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d374