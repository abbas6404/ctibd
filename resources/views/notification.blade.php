@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 5rem 0; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: 3rem; font-weight: 700; margin-bottom: 1.5rem;">
            Notifications & Announcements
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.25rem; opacity: 0.9; max-width: 700px; margin: 0 auto 2rem;">
            Stay updated with the latest announcements, circulars, and important notices from CTIBD
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#latest" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-bell me-2"></i>
                Latest Updates
            </a>
            <a href="#categories" class="btn btn-outline-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-tags me-2"></i>
                Categories
            </a>
        </div>
    </div>
</div>

<!-- Latest Notifications -->
<section id="latest" class="py-5" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                Latest Notifications
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto;">
                Recent announcements and important updates
            </p>
        </div>
        
        <!-- Featured Notification -->
        <div class="mb-5 p-4 rounded-3" style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); border-radius: 2rem; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
            <div class="d-flex align-items-start">
                <div style="background: white; color: #006F3F; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem; flex-shrink: 0;">
                    <i class="fas fa-star" style="font-size: 1.5rem;"></i>
                </div>
                <div class="text-white flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; margin: 0;">
                            New Semester Registration Open
                        </h4>
                        <span style="background: rgba(255,255,255,0.2); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">
                            Featured
                        </span>
                    </div>
                    <p style="font-family: 'Inter', sans-serif; opacity: 0.9; margin-bottom: 1rem;">
                        Registration for the Spring 2025 semester is now open. All current and new students are required to complete their registration by March 15, 2025.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span style="font-size: 0.9rem; opacity: 0.8;">
                            <i class="fas fa-calendar me-1"></i>
                            March 1, 2025
                        </span>
                        <a href="#" class="btn btn-light btn-sm" style="border-radius: 1rem; font-weight: 600;">
                            <i class="fas fa-arrow-right me-1"></i>
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Regular Notifications -->
        <div class="row g-4">
            <!-- Notification 1 -->
            <div class="col-lg-6">
                <div class="p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; border-left: 4px solid #2563eb;">
                    <div class="d-flex align-items-start mb-3">
                        <div style="background: #2563eb; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin: 0 0 0.5rem 0;">
                                Important Dates Reminder
                            </h5>
                            <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem; margin-bottom: 1rem;">
                                Don't forget! Assignment submission deadline for all courses is March 10, 2025.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.8rem;">
                                    <i class="fas fa-clock me-1"></i>
                                    2 days ago
                                </span>
                                <span style="background: #e0e7ff; color: #2563eb; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">
                                    Academic
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Notification 2 -->
            <div class="col-lg-6">
                <div class="p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; border-left: 4px solid #7c3aed;">
                    <div class="d-flex align-items-start mb-3">
                        <div style="background: #7c3aed; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin: 0 0 0.5rem 0;">
                                Student Orientation Session
                            </h5>
                            <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem; margin-bottom: 1rem;">
                                New student orientation scheduled for March 20, 2025. All new students must attend.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.8rem;">
                                    <i class="fas fa-clock me-1"></i>
                                    3 days ago
                                </span>
                                <span style="background: #f3e8ff; color: #7c3aed; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">
                                    Student Affairs
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Notification 3 -->
            <div class="col-lg-6">
                <div class="p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; border-left: 4px solid #dc2626;">
                    <div class="d-flex align-items-start mb-3">
                        <div style="background: #dc2626; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin: 0 0 0.5rem 0;">
                                Campus Maintenance Notice
                            </h5>
                            <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem; margin-bottom: 1rem;">
                                Campus will be closed for maintenance on March 8-9, 2025. Online classes will continue as scheduled.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.8rem;">
                                    <i class="fas fa-clock me-1"></i>
                                    4 days ago
                                </span>
                                <span style="background: #fee2e2; color: #dc2626; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">
                                    Important
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Notification 4 -->
            <div class="col-lg-6">
                <div class="p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; border-left: 4px solid #f59e0b;">
                    <div class="d-flex align-items-start mb-3">
                        <div style="background: #f59e0b; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin: 0 0 0.5rem 0;">
                                Scholarship Opportunities
                            </h5>
                            <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem; margin-bottom: 1rem;">
                                Applications for merit-based scholarships are now open. Deadline: March 20, 2025.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.8rem;">
                                    <i class="fas fa-clock me-1"></i>
                                    5 days ago
                                </span>
                                <span style="background: #fef3c7; color: #f59e0b; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">
                                    Opportunity
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section id="categories" class="py-5" style="background: #f8f9fa; margin-bottom: 4rem;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                Browse by Category
            </h2>
            <p style="font-family: 'Inter', sans-serif; color: #718096; max-width: 600px; margin: 0 auto;">
                Filter notifications by category to find what you're looking for
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="background: #2563eb; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-calendar-check" style="font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Academic
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem;">
                        Exam schedules, assignment deadlines, and academic updates
                    </p>
                    <span style="background: #e0e7ff; color: #2563eb; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">
                        12 Notifications
                    </span>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="background: #7c3aed; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-users" style="font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Student Affairs
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem;">
                        Orientation, events, and student support services
                    </p>
                    <span style="background: #f3e8ff; color: #7c3aed; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">
                        8 Notifications
                    </span>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="background: #dc2626; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-exclamation-triangle" style="font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Important
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem;">
                        Critical updates, policy changes, and urgent notices
                    </p>
                    <span style="background: #fee2e2; color: #dc2626; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">
                        5 Notifications
                    </span>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded-3 h-100" style="background: white; box-shadow: 0 8px 25px rgba(0,0,0,0.08); border-radius: 2rem; cursor: pointer; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="background: #f59e0b; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-award" style="font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">
                        Opportunities
                    </h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.9rem;">
                        Scholarships, internships, and career opportunities
                    </p>
                    <span style="background: #fef3c7; color: #f59e0b; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">
                        3 Notifications
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%); border-radius: 2rem; margin-bottom: 4rem;">
    <div class="container text-center text-white">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">
            Stay Connected
        </h2>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.1rem; opacity: 0.9; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Never miss an important update. Subscribe to our notification service and follow us on social media.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#" class="btn btn-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-bell me-2"></i>
                Subscribe to Updates
            </a>
            <a href="/contact" class="btn btn-outline-light btn-lg px-4 py-3" style="font-family: 'Inter', sans-serif; font-weight: 600;">
                <i class="fas fa-question me-2"></i>
                Contact Support
            </a>
        </div>
    </div>
</section>
@endsection