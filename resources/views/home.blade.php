{{-- resources/views/home.blade.php or welcome.blade.php --}}
@extends('layouts.app')

@section('title', 'Home - Confidence Training Institute (RTO)')

@section('content')
{{-- Hero Section with Stunning Background Image --}}
<section class="relative min-h-screen flex items-center justify-center text-center bg-fixed bg-center bg-cover"
    style="background-image: linear-gradient(rgba(123, 199, 226, 0.34),rgba(140, 207, 231, 0.44)),
           url('img/WhatsApp Image 2025-11-18 at 10.05.41 AM.jpeg');">
    
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-black/70"></div>

    <div class="relative z-10 container mx-auto px-6 max-w-5xl">
        <h1 class="font-extrabold text-5xl md:text-7xl text-white leading-tight mb-6 drop-shadow-2xl">
            Welcome to <span class="text-blue-400">Confidence</span><br>
            Training Institute
        </h1>
        <p class="text-xl md:text-2xl text-gray-100 font-light mb-10 max-w-3xl mx-auto leading-relaxed">
            Nationally Recognised Training • Industry Expert Trainers • Real Career Outcomes
        </p>

        <div class="flex flex-col sm:flex-row gap-6 justify-center mt-10">
            <a href="#courses" 
               class="bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-full text-lg font-semibold shadow-2xl transform hover:scale-105 transition duration-300">
                Explore Courses
            </a>
            <a href="#contact" 
               class="bg-white/20 hover:bg-white/30 backdrop-blur-md border border-white/40 text-white px-10 py-4 rounded-full text-lg font-semibold shadow-xl transform hover:scale-105 transition duration-300">
                Get in Touch
            </a>
        </div>

        <div class="mt-16 animate-bounce">
            <i class="fas fa-chevron-down text-4xl text-white/70"></i>
        </div>
    </div>
</section>

{{-- Why Choose Us – 2025 Modern Version with Online Images --}}
<section style="background:rgb(215, 241, 250);" class="py-24 bg-gray-50 relative overflow-hidden">
    <!-- Subtle wave background (online SVG) -->
    <div class="absolute inset-0 opacity-30">
        <img src="https://res.cloudinary.com/dz209s6jk/image/upload/f_auto,q_auto/v1687481234/wave_haftone_bg_yw0wkb.png" 
             alt="" class="w-full h-full object-cover">
    </div>

    <div class="container mx-auto px-6 max-w-7xl relative z-10">
        <!-- Header -->
        <div class="text-center mb-20">
            <span class="inline-block px-6 py-3 bg-blue-100 text-blue-700 rounded-full text-sm font-bold tracking-wider mb-6">
                Trusted by Over 5,000 Students Nationwide
            </span>
            <h2 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight">
                Why Thousands Choose <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-700">Confidence</span>
            </h2>
            <p class="mt-6 text-xl text-gray-600 max-w-3xl mx-auto">
                Real skills. Real trainers. Real jobs. Here’s what sets us apart.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Card 1: Expert Trainers -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                <div class="relative h-64 overflow-hidden">
                    <img src="img/WhatsApp Image 2025-11-18 at 10.05.45 AM (1).jpeg" 
                         alt="Industry Expert Trainer" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <div class="text-3xl font-black">Expert</div>
                        <div class="text-sm opacity-90">Trainers</div>
                    </div>
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Learn from Active Professionals</h3>
                    <p class="text-gray-600">
                        Our trainers are currently working in top companies — bringing fresh, real-world knowledge every day.
                    </p>
                </div>
            </div>

            <!-- Card 2: Nationally Recognised -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 
                        ring-4 ring-purple-500 ring-opacity-20 relative">
                <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-purple-600 to-pink-600"></div>
                <div class="p-10 text-center">
                    <img src="img/WhatsApp Image 2025-11-18 at 10.05.45 AM (2).jpeg?w=800&q=80" 
                         alt="Certificate" class="w-28 h-28 mx-auto mb-6 rounded-2xl shadow-xl object-cover">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Nationally Recognised Qualifications</h3>
                    <p class="text-gray-600 mb-6">
                        RTO 45678 • Fully accredited • Accepted by every employer across Australia.
                    </p>
                    <div class="flex justify-center gap-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/8/88/ASQA_Logo.png" 
                             alt="ASQA Accredited" class="h-12 opacity-80">
                        <img src="https://www.nationallyrecognisedtraining.gov.au/wp-content/uploads/2021/06/nrt-logo.png" 
                             alt="NRT Logo" class="h-12">
                    </div>
                </div>
            </div>

            <!-- Card 3: Job Ready -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100">
                <div class="relative h-64 overflow-hidden">
                    <img src="img/WhatsApp Image 2025-11-18 at 10.05.42 AM.jpeg?w=800&q=80" 
                         alt="Happy Graduate with Job" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                        95% Employed
                    </div>
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Job-Ready Graduates</h3>
                    <p class="text-gray-600">
                        Resume help • Interview coaching • Direct connections with 50+ hiring partners.
                    </p>
                </div>
            </div>
        </div>

        <!-- Stats Bar -->
        <div style="background:linear-gradient(90deg, #11a9b6 0%, #24748D 100%);" class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8  from-blue-600 to-purple-700 rounded-3xl p-10 text-white text-center shadow-2xl">
            <div>
                <div class="text-5xl font-black">5,000+</div>
                <div class="text-blue-100 mt-2">Successful Graduates</div>
            </div>
            <div>
                <div class="text-5xl font-black">18</div>
                <div class="text-blue-100 mt-2">Years of Excellence</div>
            </div>
            <div>
                <div class="text-5xl font-black">50+</div>
                <div class="text-blue-100 mt-2">Industry Partners</div>
            </div>
            <div>
                <div class="text-5xl font-black">95%</div>
                <div class="text-blue-100 mt-2">Employment Rate</div>
            </div>
        </div>
    </div>
</section>

{{-- About Us Section – With Fixed Parallax Background (2025 Premium Style) --}}
<section class="relative py-32 bg-fixed bg-cover bg-center bg-no-repeat text-white overflow-hidden"
    style="background-image: 
           linear-gradient(rgba(0, 0, 0, 0.82), rgba(0, 0, 0, 0.78)), 
           url('https://static.vecteezy.com/system/resources/previews/022/925/493/large_2x/white-abstract-geometric-shapes-background-ideal-for-poster-cover-branding-wallpaper-banner-website-presentation-modern-geometry-in-minimal-concept-classic-and-clean-3d-rendering-free-photo.jpg');">

    <!-- Optional animated glows -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-20 left-10 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-purple-500/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Left: Photo Gallery + Floating Badge -->
            <div class="relative">
                <div class="grid grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800&q=80&crop=entropy" 
                             alt="Students learning" class="rounded-2xl shadow-2xl hover:scale-105 transition duration-500 object-cover w-full h-64">
                        <img src="img/WhatsApp Image 2025-11-18 at 10.05.53 AM.jpeg" 
                             alt="Trainer teaching" class="rounded-2xl shadow-2xl hover:scale-105 transition duration-500 object-cover w-full h-64">
                    </div>
                    <div class="space-y-6 pt-12">
                        <img src="img/WhatsApp Image 2025-11-18 at 10.05.43 AM (1).jpeg" 
                             alt="Graduation day" class="rounded-2xl shadow-2xl hover:scale-105 transition duration-500 object-cover w-full h-64">
                        <img src="img/WhatsApp Image 2025-11-18 at 10.05.44 AM.jpeg" 
                             alt="Happy graduate" class="rounded-2xl shadow-2xl hover:scale-105 transition duration-500 object-cover w-full h-64">
                    </div>
                </div>

                <!-- Floating Stats Badge -->
                <div style="background:linear-gradient(90deg, #11a9b6 0%, #24748D 100%);" class="absolute -bottom-8 -right-8 from-blue-600 to-purple-700 text-white p-8 rounded-3xl shadow-2xl border border-white/10">
                    <div class="text-6xl font-black">5,000+</div>
                    <div class="text-lg font-medium opacity-90">Lives Transformed<br>Since 2005</div>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="max-w-2xl">
                <span class="inline-block px-6 py-3 bg-blue-500/20 backdrop-blur-sm border border-white/30 rounded-full text-sm font-bold tracking-wider mb-8">
                    ABOUT CONFIDENCE TRAINING INSTITUTE
                </span>

                <h2 class="text-5xl md:text-6xl font-extrabold leading-tight mb-8">
                    Building Careers,<br>
                    <span style="color:#0E753D;" class="text-transparent bg-clip-text from-blue-400 to-purple-400">
                        Changing Lives
                    </span>
                </h2>

                <p class="text-xl text-gray-200 leading-relaxed mb-6">
                    Founded in 2005, <strong>Confidence Training Institute (RTO 45678)</strong> has been Sydney’s trusted leader in vocational education for nearly two decades.
                </p>

                <p class="text-lg text-gray-300 leading-relaxed mb-10">
                    We believe education should be <strong>practical, supportive, and life-changing</strong>. Every course is designed with direct input from industry partners — so you graduate not just with a certificate, but with real skills employers demand.
                </p>

                <div class="grid grid-cols-2 gap-6 mb-12">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-500/30 rounded-xl flex items-center justify-center backdrop-blur-sm">
                            <i class="fas fa-award text-blue-400 text-xl"></i>
                        </div>
                        <div>
                            <div class="font-bold">Nationally Recognised</div>
                            <div class="text-sm text-gray-300">RTO 45678 • ASQA Approved</div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-purple-500/30 rounded-xl flex items-center justify-center backdrop-blur-sm">
                            <i class="fas fa-users text-purple-400 text-xl"></i>
                        </div>
                        <div>
                            <div class="font-bold">Small Class Sizes</div>
                            <div class="text-sm text-gray-300">Personalised attention</div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-500/30 rounded-xl flex items-center justify-center backdrop-blur-sm">
                            <i class="fas fa-briefcase text-green-400 text-xl"></i>
                        </div>
                        <div>
                            <div class="font-bold">95% Employed</div>
                            <div class="text-sm text-gray-300">Within 6 months of graduation</div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-pink-500/30 rounded-xl flex items-center justify-center backdrop-blur-sm">
                            <i class="fas fa-heart text-pink-400 text-xl"></i>
                        </div>
                        <div>
                            <div class="font-bold">Student-First Culture</div>
                            <div class="text-sm text-gray-300">You're family here</div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-6">
                    <a style="background:linear-gradient(90deg, #11a9b6 0%, #24748D 100%);" href="#courses" class="from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white px-10 py-5 rounded-full font-bold text-lg shadow-2xl transform hover:scale-105 transition duration-300">
                        Explore Our Courses
                    </a>
                    <a href="#contact" class="bg-white/20 backdrop-blur-md border-2 border-white/40 hover:bg-white/30 text-white px-10 py-5 rounded-full font-bold text-lg transition duration-300">
                        Meet Our Team
                    </a>
                </div>
            </div>
        </div>
    </div>

   
</section>


{{-- Our Short Courses & Diplomas Section – Modern 2025 Style --}}
<section style="background:rgb(215, 241, 250);" class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-pink-600 font-semibold tracking-wider mb-4">
                LET'S KNOW ABOUT
            </p>
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-700">Short Courses</span> & Diploma Engineering
            </h2>
        </div>

        <!-- Courses Grid – Responsive (3 per row on desktop, 1 on mobile) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Masonry -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1581092160606-7d0d0d6b3c57?w=400&q=80" alt="Masonry" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">MASONRY</h3>
                </div>
            </div>

            <!-- Electric House Wiring -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=400&q=80" alt="Electrical" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">ELECTRIC HOUSE WIRING</h3>
                </div>
            </div>

            <!-- Painting -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1581093458791-5d0d0b6f3c57?w=400&q=80" alt="Painting" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">PAINTING</h3>
                </div>
            </div>

            <!-- Plumbing & Pipe Fitting -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1609017909974-9f0b3c1185c9?w=400&q=80" alt="Plumbing" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">PLUMBING & PIPE FITTING</h3>
                </div>
            </div>

            <!-- Welding -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1600585154340-bebb5f7d5c9a?w=400&q=80" alt="Welding" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">WELDING</h3>
                </div>
            </div>

            <!-- Air Condition & Fridge -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1581092580493-3d98f4f4e6a1?w=400&q=80" alt="AC Repair" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">AIR CONDITION & FRIDGE</h3>
                </div>
            </div>

            <!-- Steel Binding -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1621905252475-b35492cc74b4?w=400&q=80" alt="Steel Binding" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">STEEL BINDING</h3>
                </div>
            </div>

            <!-- Tiles & Marble Works -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1600565441402-70f0e3a2a6e9?w=400&q=80" alt="Tiles Work" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">TILES & MARBLE WORKS</h3>
                </div>
            </div>

            <!-- Sewing Machine Operation -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1581093450021-4a7360e9a6b5?w=400&q=80" alt="Sewing" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">SEWING MACHINE OPERATION</h3>
                </div>
            </div>

            <!-- Baking -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=400&q=80" alt="Baking" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">BAKING</h3>
                </div>
            </div>

            <!-- Scaffolding -->
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-3 border border-gray-100">
                <div class="flex items-center gap-5 p-6">
                    <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 shadow-md">
                        <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=400&q=80" alt="Scaffolding" class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">SCAFFOLDING</h3>
                </div>
            </div>

        </div>

        <!-- Optional CTA Button -->
        <div class="text-center mt-16">
            <a href="#all-courses" class="inline-block bg-gradient-to-r from-blue-600 to-purple-700 text-white px-10 py-5 rounded-full text-lg font-bold shadow-2xl hover:shadow-purple-500/50 transform hover:scale-105 transition duration-300">
                View All Courses
            </a>
        </div>
    </div>
</section>

{{-- Optional: Add Font Awesome in your layout head if not already included --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> --}}

@endsection