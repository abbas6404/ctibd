@extends('layouts.app')

@section('title', 'Home - Training Institute')

@section('content')
    <!-- Hero Section with Advanced Animations and Background Image -->
    <section class="relative bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-800 text-white overflow-hidden min-h-[90vh] flex items-center animate-gradient">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 parallax" data-speed="0.3" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/90 via-indigo-700/85 to-purple-800/90"></div>
        <div class="absolute inset-0 bg-black opacity-30"></div>
        
        <!-- Pattern Overlay -->
        <div class="absolute inset-0 parallax" data-speed="0.2" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.08\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-400/20 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-indigo-400/20 rounded-full blur-3xl animate-pulse-slow"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 z-10">
            <div class="text-center">
                <div class="inline-block mb-6 animate-scale-in">
                    <span class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium border border-white/30 magnetic glow-blue">
                        Excellence in Technical Education
                    </span>
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6 bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent leading-tight animate-fade-in-up">
                    Welcome to Our<br>Training Institute
                </h1>
                <p class="text-xl md:text-2xl mb-10 text-blue-100 max-w-3xl mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                    Empowering individuals through quality technical education and professional development. Building careers, shaping futures.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up" style="animation-delay: 0.4s;">
                    <a href="{{ route('short-courses') }}" class="group px-8 py-4 bg-white text-blue-600 rounded-xl font-bold hover:bg-blue-50 transition-all transform hover:scale-110 shadow-2xl hover:shadow-blue-500/50 flex items-center justify-center gap-2 magnetic glow-blue">
                        <span>Explore Courses</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="px-8 py-4 bg-blue-800/90 backdrop-blur-sm text-white rounded-xl font-bold hover:bg-blue-700 transition-all transform hover:scale-110 border-2 border-white/50 shadow-xl magnetic">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 parallax" data-speed="0.5">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-24">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="rgb(249, 250, 251)"/>
            </svg>
        </div>
    </section>

    <!-- Features Section with Advanced 3D Cards and Background -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 opacity-5" style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;"></div>
        <div class="relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-animate">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose Us</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Excellence in every aspect of technical education</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-container">
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform-3d perspective-3d border border-gray-100 stagger-item overflow-hidden">
                    <!-- Background Image -->
                    <div class="absolute inset-0 opacity-10 group-hover:opacity-20 transition-opacity duration-500" style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;"></div>
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-transparent rounded-bl-full animate-rotate-slow"></div>
                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-lg glow-blue">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-gray-900 group-hover:text-blue-600 transition-colors">Large Campus</h3>
                        <p class="text-gray-600 leading-relaxed">Spacious campus with modern facilities and high security infrastructure</p>
                    </div>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform-3d perspective-3d border border-gray-100 stagger-item overflow-hidden">
                    <!-- Background Image -->
                    <div class="absolute inset-0 opacity-10 group-hover:opacity-20 transition-opacity duration-500" style="background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;"></div>
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-500/10 to-transparent rounded-bl-full animate-rotate-slow" style="animation-delay: 1s;"></div>
                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-lg glow-blue">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-gray-900 group-hover:text-green-600 transition-colors">Experienced Trainers</h3>
                        <p class="text-gray-600 leading-relaxed">Well-educated and experienced trainers dedicated to your success</p>
                    </div>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform-3d perspective-3d border border-gray-100 stagger-item overflow-hidden">
                    <!-- Background Image -->
                    <div class="absolute inset-0 opacity-10 group-hover:opacity-20 transition-opacity duration-500" style="background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;"></div>
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-500/10 to-transparent rounded-bl-full animate-rotate-slow" style="animation-delay: 2s;"></div>
                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-lg glow-blue">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-gray-900 group-hover:text-purple-600 transition-colors">Specialized Training</h3>
                        <p class="text-gray-600 leading-relaxed">Maintaining national & international standard training programs</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Short Courses Section with Scroll Animations and Background -->
    @if($shortCourses->count() > 0)
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 opacity-5" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;"></div>
        <div class="relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-animate">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Short Courses</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Explore our comprehensive range of technical training programs</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-container">
                @foreach($shortCourses as $index => $course)
                <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform-3d perspective-3d border border-gray-100 stagger-item scroll-animate-scale">
                    @if($course->img)
                    <div class="h-56 bg-gradient-to-br from-blue-400 to-indigo-600 overflow-hidden relative">
                        <img src="{{ asset('storage/' . $course->img) }}" alt="{{ $course->description }}" class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 shimmer"></div>
                    </div>
                    @else
                    <div class="h-56 bg-gradient-to-br from-blue-400 via-indigo-500 to-purple-600 flex items-center justify-center relative overflow-hidden animate-gradient" style="background-image: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/80 via-indigo-600/80 to-purple-600/80"></div>
                        <svg class="w-20 h-20 text-white/80 relative z-10 animate-float" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    @endif
                    <div class="p-6">
                        @if($course->description)
                        <p class="text-gray-700 leading-relaxed line-clamp-3">{{ Str::limit($course->description, 120) }}</p>
                        @else
                        <p class="text-gray-500 italic">Course details coming soon...</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-12 scroll-animate">
                <a href="{{ route('short-courses') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-bold hover:from-blue-700 hover:to-indigo-700 transition-all transform hover:scale-110 shadow-lg magnetic glow-blue">
                    <span>View All Courses</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
        </div>
    </section>
    @endif

    <!-- Management Section with Advanced Animations and Background -->
    @if($management->count() > 0)
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 opacity-5" style="background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;"></div>
        <div class="relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-animate">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Management Team</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Meet our experienced leadership team</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 stagger-container">
                @foreach($management as $member)
                <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform-3d perspective-3d text-center border border-gray-100 stagger-item scroll-animate-scale">
                    <div class="h-72 bg-gradient-to-br from-gray-200 to-gray-300 overflow-hidden relative" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'); background-size: cover; background-position: center;">
                        @if($member->pic)
                        <img src="{{ asset('storage/' . $member->pic) }}" alt="{{ $member->name }}" class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                        @else
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-100/90 to-indigo-100/90 backdrop-blur-sm">
                            <svg class="w-32 h-32 text-gray-400 animate-pulse-slow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 shimmer"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">{{ $member->name }}</h3>
                        <p class="text-blue-600 font-semibold">{{ $member->designation }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-12 scroll-animate">
                <a href="{{ route('management') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-bold hover:from-blue-700 hover:to-indigo-700 transition-all transform hover:scale-110 shadow-lg magnetic glow-blue">
                    <span>View All Management</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
        </div>
    </section>
    @endif

    <!-- Notifications Section with Scroll Animations and Background -->
    @if($notifications->count() > 0)
    <section class="py-20 bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 relative overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;"></div>
        <div class="relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-animate">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Latest Notices</h2>
                <p class="text-xl text-gray-600">Stay updated with our latest announcements</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-container">
                @foreach($notifications as $notification)
                <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform-3d perspective-3d border border-gray-100 stagger-item scroll-animate-scale">
                    @if($notification->img)
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('storage/' . $notification->img) }}" alt="{{ $notification->title }}" class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 shimmer"></div>
                    </div>
                    @endif
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">{{ $notification->title }}</h3>
                        @if($notification->description)
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4">{{ Str::limit($notification->description, 120) }}</p>
                        @endif
                        <div class="flex items-center gap-2 text-xs text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>{{ $notification->created_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-12 scroll-animate">
                <a href="{{ route('notifications') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-bold hover:from-blue-700 hover:to-indigo-700 transition-all transform hover:scale-110 shadow-lg magnetic glow-blue">
                    <span>View All Notices</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
        </div>
    </section>
    @endif

    <!-- CTA Section with Advanced Animations and Background Image -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white relative overflow-hidden animate-gradient">
        <!-- Background Image -->
        <div class="absolute inset-0 parallax" data-speed="0.2" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center;"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/90 via-indigo-600/85 to-purple-600/90"></div>
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="absolute inset-0 parallax" data-speed="0.1" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-10 right-10 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 scroll-animate">Ready to Start Your Journey?</h2>
            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed scroll-animate" style="animation-delay: 0.2s;">
                Join us today and take the next step towards a brighter future with quality technical education
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center scroll-animate" style="animation-delay: 0.4s;">
                <a href="{{ route('contact') }}" class="group px-8 py-4 bg-white text-blue-600 rounded-xl font-bold hover:bg-blue-50 transition-all transform hover:scale-110 shadow-2xl hover:shadow-blue-500/50 flex items-center justify-center gap-2 magnetic glow-blue">
                    <span>Get Started</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="{{ route('about') }}" class="px-8 py-4 bg-blue-800/90 backdrop-blur-sm text-white rounded-xl font-bold hover:bg-blue-700 transition-all transform hover:scale-110 border-2 border-white/50 shadow-xl magnetic">
                    Learn More
                </a>
            </div>
        </div>
    </section>
@endsection
