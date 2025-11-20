{{-- resources/views/home.blade.php or welcome.blade.php --}}
@extends('layouts.app')

@section('title', 'Home - Confidence Training Institute (RTO)')

@section('content')
{{-- Hero Section with Stunning Background Image --}}
<section class="position-relative d-flex align-items-center justify-content-center text-center"
    style="min-height:100vh; background-attachment:fixed; background-position:center; background-size:cover; background-image: url('https://www.ruhatrade.com/wp-content/uploads/2023/09/blog-3.fw-min.png');">

    <div class="position-relative container px-4" style="z-index:10;">
        <div style="background: rgb(0 255 255 / 17%); backdrop-filter: blur(6px); padding: 3rem 2rem; border-radius: 2rem; box-shadow: 0 20px 40px rgba(0,0,0,0.8); max-width: 800px; margin: 0 auto;">
            <h1 class="text-white" style="font-weight:800; font-size:3rem; line-height:1.1; margin-bottom:1.5rem; text-shadow: 0 3px 10px rgba(0,0,0,0.9);">
                Welcome to <span style="color:#006F3F;">Confidence</span><br>
                Training Institute
            </h1>
            <p style="font-size:1.25rem; color:#f3f4f6; font-weight:300; margin-bottom:2.5rem; max-width:48rem; margin-left:auto; margin-right:auto; line-height:1.75; text-shadow: 0 2px 8px rgba(0,0,0,0.95);">
                Nationally Recognised Training • Industry Expert Trainers • Real Career Outcomes
            </p>

            <div class="d-flex flex-column flex-sm-row justify-content-center" style="gap:1.5rem; margin-top:2.5rem;">
                <a href="#courses" class="btn text-white rounded-pill fw-semibold" style="background:#006F3F; padding:.75rem 2.5rem; box-shadow:0 8px 20px rgba(0,0,0,0.25);">
                    Explore Courses
                </a>
                <a href="#contact" class="btn text-white rounded-pill fw-semibold" style="background:rgba(255,255,255,0.2); backdrop-filter:blur(6px); border:1px solid rgba(255,255,255,0.4); padding:.75rem 2.5rem; box-shadow:0 8px 20px rgba(0,0,0,0.25);">
                    Get in Touch
                </a>
            </div>
        </div>

        <div style="margin-top:4rem; animation:bounce 2s infinite;">
            <i class="fas fa-chevron-down" style="font-size: 2.25rem; color: rgba(255,255,255,0.7);"></i>
        </div>
    </div>
</section>
<section style="background:#f0f8ff; padding:6rem 0;" class="position-relative overflow-hidden">
    <div style="position:absolute; top:0; right:0; bottom:0; left:0; opacity:.3;">
        <img src="https://res.cloudinary.com/dz209s6jk/image/upload/f_auto,q_auto/v1687481234/wave_haftone_bg_yw0wkb.png"
             alt="" style="width:100%; height:100%; object-fit:cover;">
    </div>

    <div class="container px-4 position-relative" style="z-index:10;">
        <div class="text-center" style="margin-bottom:5rem;">
            <span class="d-inline-block rounded-pill fw-bold text-uppercase" style="padding:.75rem 1.5rem; background:linear-gradient(90deg, #2563eb 0%, #7c3aed 100%); color:white; letter-spacing:.08em; margin-bottom:1.5rem; font-size:0.875rem;">
                Trusted by Over 5,000 Students Nationwide
            </span>
            <h2 style="font-size:3rem; font-weight:800; color:#111827; line-height:1.1;">
                Why Thousands Choose <span style="color:transparent; background:linear-gradient(90deg, #2563eb 0%, #7c3aed 100%); background-clip:text;">Confidence</span>
            </h2>
            <p style="margin-top:1.5rem; font-size:1.25rem; color:#4b5563; max-width:48rem; margin-left:auto; margin-right:auto;">
                Real skills. Real trainers. Real jobs. Here’s what sets us apart.
            </p>
        </div>

        <div class="row" style="--bs-gutter-x: 1.5rem; --bs-gutter-y: 1.5rem;">
            
            <div class="col-md-4">
                <div class="bg-white overflow-hidden h-100" style="border-radius:1.5rem; transition:box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="position-relative" style="height:14rem; overflow:hidden;">
                        <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?w=800&q=80" 
                             alt="Expert coding on a screen" style="width:100%; height:100%; object-fit:cover; transition:transform .7s; filter:grayscale(20%);">
                        <div style="position:absolute; top:0; right:0; bottom:0; left:0; background:linear-gradient(to top, rgba(0,0,0,.7), transparent);"></div>
                        <div style="position:absolute; bottom:1.5rem; left:1.5rem; color:white;">
                            <div style="font-size:2rem; font-weight:900; line-height:1;">Expert</div>
                            <div style="font-size:0.9rem; opacity:0.9; margin-top:0.25rem;">Trainers</div>
                        </div>
                    </div>
                    <div style="padding:1.5rem;">
                        <h3 style="font-size:1.25rem; font-weight:700; color:#111827; margin-bottom:0.75rem; font-family: 'Inter', sans-serif;">Learn from Active Professionals</h3>
                        <p style="color:#374151; font-size:0.95rem; line-height:1.5; font-family: 'Inter', sans-serif;">
                            Our trainers are currently working in top companies — bringing fresh, real-world knowledge and industry-specific insights every day.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-white overflow-hidden h-100" style="border-radius:1.5rem; transition:box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="position-relative" style="height:14rem; overflow:hidden;">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&q=80" 
                             alt="Classroom with students and teacher" style="width:100%; height:100%; object-fit:cover; transition:transform .7s;">
                        <div style="position:absolute; top:0; right:0; bottom:0; left:0; background:linear-gradient(to top, rgba(0,0,0,.6), transparent);"></div>
                        <div style="position:absolute; top:1rem; right:1rem; background:#006F3F; color:white; padding:0.5rem 1rem; border-radius:9999px; font-size:0.75rem; font-weight:700;">
                            95% Employed
                        </div>
                    </div>
                    <div style="padding:1.5rem;">
                        <h3 style="font-size:1.25rem; font-weight:700; color:#111827; margin-bottom:0.75rem; font-family: 'Inter', sans-serif;">Job-Ready Graduates</h3>
                        <p style="color:#374151; font-size:0.95rem; line-height:1.5; font-family: 'Inter', sans-serif;">
                            We provide comprehensive career support: Resume help, Interview coaching, and direct connections with 50+ hiring partners.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-white overflow-hidden h-100" style="border-radius:1.5rem; transition:box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="position-relative" style="height:14rem; overflow:hidden;">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&q=80" 
                             alt="Classroom with students and teacher" style="width:100%; height:100%; object-fit:cover; transition:transform .7s;">
                        <div style="position:absolute; top:0; right:0; bottom:0; left:0; background:linear-gradient(to top, rgba(0,0,0,.6), transparent);"></div>
                        <div style="position:absolute; top:1rem; right:1rem; background:#006F3F; color:white; padding:0.5rem 1rem; border-radius:9999px; font-size:0.75rem; font-weight:700;">
                            95% Employed
                        </div>
                    </div>
                    <div style="padding:1.5rem;">
                        <h3 style="font-size:1.25rem; font-weight:700; color:#111827; margin-bottom:0.75rem; font-family: 'Inter', sans-serif;">Job-Ready Graduates</h3>
                        <p style="color:#374151; font-size:0.95rem; line-height:1.5; font-family: 'Inter', sans-serif;">
                            We provide comprehensive career support: Resume help, Interview coaching, and direct connections with 50+ hiring partners.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>

        <div style="background:#0d9488; border-radius:1rem; padding:3rem 2rem; margin-top:4rem;">
            <div class="row row-cols-2 row-cols-md-4 g-4 text-center text-white">
                <div class="col">
                    <div style="font-size:3rem; font-weight:900; line-height:1;">5,000+</div>
                    <div style="font-size:1rem; margin-top:0.5rem; opacity:0.9;">Successful Graduates</div>
                </div>
                <div class="col">
                    <div style="font-size:3rem; font-weight:900; line-height:1;">18</div>
                    <div style="font-size:1rem; margin-top:0.5rem; opacity:0.9;">Years of Excellence</div>
                </div>
                <div class="col">
                    <div style="font-size:3rem; font-weight:900; line-height:1;">50+</div>
                    <div style="font-size:1rem; margin-top:0.5rem; opacity:0.9;">Industry Partners</div>
                </div>
                <div class="col">
                    <div style="font-size:3rem; font-weight:900; line-height:1;">95%</div>
                    <div style="font-size:1rem; margin-top:0.5rem; opacity:0.9;">Employment Rate</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About Us Section – With Fixed Parallax Background (2025 Premium Style) --}}
<section class="position-relative text-white overflow-hidden"
    style="background-image: 
           linear-gradient(rgba(0, 0, 0, 0.82), rgba(0, 0, 0, 0.78)), 
           url('https://static.vecteezy.com/system/resources/previews/022/925/493/large_2x/white-abstract-geometric-shapes-background-ideal-for-poster-cover-branding-wallpaper-banner-website-presentation-modern-geometry-in-minimal-concept-classic-and-clean-3d-rendering-free-photo.jpg');">
    <div style="background-attachment:fixed; background-position:center; background-size:cover; padding:8rem 0;">

    <!-- Optional animated glows -->
    <div style="position:absolute; top:0; right:0; bottom:0; left:0; pointer-events:none;">
        <div style="position:absolute; top:5rem; left:2.5rem; width:24rem; height:24rem; background:rgba(59,130,246,0.2); border-radius:9999px; filter:blur(3rem); animation:pulse 2s infinite;"></div>
        <div style="position:absolute; bottom:5rem; right:2.5rem; width:20rem; height:20rem; background:rgba(168,85,247,0.2); border-radius:9999px; filter:blur(3rem); animation:pulse 2s infinite; animation-delay:1s;"></div>
    </div>

    <div class="position-relative container px-4" style="z-index:10;">
        <div class="row g-4 align-items-center">

            <!-- Left: Photo Gallery + Floating Badge -->
            <div class="position-relative col-12 col-lg-6">
                <div class="row g-3">
                    <div class="col-6" style="display:flex; flex-direction:column; gap:1.5rem;">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800&q=80&crop=entropy" 
                             alt="Students learning" style="border-radius:1rem; box-shadow:0 25px 50px rgba(0,0,0,.2); transition:transform .5s; object-fit:cover; width:100%; height:16rem;">
                        <img src="img/WhatsApp Image 2025-11-18 at 10.05.53 AM.jpeg" 
                             alt="Trainer teaching" style="border-radius:1rem; box-shadow:0 25px 50px rgba(0,0,0,.2); transition:transform .5s; object-fit:cover; width:100%; height:16rem;">
                    </div>
                    <div class="col-6" style="display:flex; flex-direction:column; gap:1.5rem; padding-top:3rem;">
                        <img src="img/WhatsApp Image 2025-11-18 at 10.05.43 AM (1).jpeg" 
                             alt="Graduation day" style="border-radius:1rem; box-shadow:0 25px 50px rgba(0,0,0,.2); transition:transform .5s; object-fit:cover; width:100%; height:16rem;">
                        <img src="img/WhatsApp Image 2025-11-18 at 10.05.44 AM.jpeg" 
                             alt="Happy graduate" style="border-radius:1rem; box-shadow:0 25px 50px rgba(0,0,0,.2); transition:transform .5s; object-fit:cover; width:100%; height:16rem;">
                    </div>
                </div>

                <!-- Floating Stats Badge -->
                <div style="background:linear-gradient(90deg, #11a9b6 0%, #24748D 100%); position:absolute; bottom:-2rem; right:-2rem; color:white; padding:2rem; border-radius:1.5rem; box-shadow:0 25px 50px rgba(0,0,0,.2); border:1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 4rem; font-weight: 900;">5,000+</div>
                    <div style="font-size: 1.125rem; font-weight: 500; opacity: 0.9;">Lives Transformed<br>Since 2005</div>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="col-12 col-lg-6">
                <span class="d-inline-block rounded-pill fw-bold" style="padding:.75rem 1.5rem; background:rgba(59,130,246,.2); backdrop-filter:blur(4px); border:1px solid rgba(255,255,255,.3); font-size:.875rem; letter-spacing:.08em; margin-bottom:2rem;">
                    ABOUT CONFIDENCE TRAINING INSTITUTE
                </span>

                <h2 style="font-size:3rem; font-weight:800; line-height:1.1; margin-bottom:2rem;">
                    Building Careers,<br>
                    <span style="color:#0E753D;">
                        Changing Lives
                    </span>
                </h2>

                <p style="font-size:1.25rem; color:#e5e7eb; line-height:1.75; margin-bottom:1.5rem;">
                    Founded in 2005, <strong>Confidence Training Institute (RTO 45678)</strong> has been Sydney’s trusted leader in vocational education for nearly two decades.
                </p>

                <p style="font-size:1.125rem; color:#d1d5db; line-height:1.75; margin-bottom:2.5rem;">
                    We believe education should be <strong>practical, supportive, and life-changing</strong>. Every course is designed with direct input from industry partners — so you graduate not just with a certificate, but with real skills employers demand.
                </p>

                <div class="row g-3" style="margin-bottom:3rem;">
                    <div class="d-flex align-items-start" style="gap:1rem;">
                        <div class="d-flex align-items-center justify-content-center" style="width:3rem; height:3rem; background:rgba(59,130,246,.3); border-radius:.75rem; backdrop-filter:blur(4px);">
                            <i class="fas fa-award" style="color:#006F3F; font-size:1.25rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold">Nationally Recognised</div>
                            <div style="font-size:.875rem; color:#d1d5db;">RTO 45678 • ASQA Approved</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start" style="gap:1rem;">
                        <div class="d-flex align-items-center justify-content-center" style="width:3rem; height:3rem; background:rgba(168,85,247,.3); border-radius:.75rem; backdrop-filter:blur(4px);">
                            <i class="fas fa-users" style="color:#a855f7; font-size:1.25rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold">Small Class Sizes</div>
                            <div style="font-size:.875rem; color:#d1d5db;">Personalised attention</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start" style="gap:1rem;">
                        <div class="d-flex align-items-center justify-content-center" style="width:3rem; height:3rem; background:rgba(0,111,63,.3); border-radius:.75rem; backdrop-filter:blur(4px);">
                            <i class="fas fa-briefcase" style="color:#006F3F; font-size:1.25rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold">95% Employed</div>
                            <div style="font-size:.875rem; color:#d1d5db;">Within 6 months of graduation</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start" style="gap:1rem;">
                        <div class="d-flex align-items-center justify-content-center" style="width:3rem; height:3rem; background:rgba(236,72,153,.3); border-radius:.75rem; backdrop-filter:blur(4px);">
                            <i class="fas fa-heart" style="color:#f472b6; font-size:1.25rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold">Student-First Culture</div>
                            <div style="font-size:.875rem; color:#d1d5db;">You're family here</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row" style="gap:1.5rem;">
                    <a href="#courses" class="text-white rounded-pill fw-bold d-inline-flex align-items-center justify-content-center" 
                       style="background:linear-gradient(90deg, #11a9b6 0%, #24748D 100%); padding:1.25rem 2.5rem; box-shadow:0 25px 50px rgba(0,0,0,.2); transition:transform .3s, box-shadow .3s;" 
                       onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,.25)';" 
                       onmouseout="this.style.transform=''; this.style.boxShadow='0 25px 50px rgba(0,0,0,.2)';">
                        Explore Our Courses
                    </a>
                    <a href="#contact" class="text-white rounded-pill fw-bold d-inline-flex align-items-center justify-content-center" 
                       style="background:rgba(255,255,255,0.2); backdrop-filter:blur(8px); border:2px solid rgba(255,255,255,0.4); padding:1.25rem 2.5rem; transition:transform .3s, background .3s, border-color .3s;" 
                       onmouseover="this.style.transform='translateY(-2px)'; this.style.background='rgba(255,255,255,0.3)'; this.style.borderColor='rgba(255,255,255,0.6)';" 
                       onmouseout="this.style.transform=''; this.style.background='rgba(255,255,255,0.2)'; this.style.borderColor='rgba(255,255,255,0.4)';">
                        Meet Our Team
                    </a>
                </div>
            </div>
        </div>
    </div>

   
</section>


<section style="background:rgb(215, 241, 250); padding:6rem 0;">
    <div class="container px-4">
        <div class="text-center" style="margin-bottom:4rem;">
            <p style="color:#db2777; font-weight:600; letter-spacing:.08em; margin-bottom:1rem;">
                LET'S KNOW ABOUT
            </p>
            <h2 style="font-size:2.25rem; font-weight:800; color:#111827;">
                Our <span style="color:transparent; background:linear-gradient(90deg, #2563eb 0%, #7c3aed 100%); background-clip:text;">Short Courses</span> & Diploma Engineering
            </h2>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4" >

            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1581092160606-7d0d0d6b3c57?w=400&q=80" alt="Masonry" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">MASONRY</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=400&q=80" alt="Electrical" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">ELECTRIC HOUSE WIRING</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1581093458791-5d0d0b6f3c57?w=400&q=80" alt="Painting" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">PAINTING</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1609017909974-9f0b3c1185c9?w=400&q=80" alt="Plumbing" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">PLUMBING & PIPE FITTING</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1600585154340-bebb5f7d5c9a?w=400&q=80" alt="Welding" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">WELDING</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1581092580493-3d98f4f4e6a1?w=400&q=80" alt="AC Repair" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">AIR CONDITION & FRIDGE</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1621905252475-b35492cc74b4?w=400&q=80" alt="Steel Binding" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">STEEL BINDING</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1600565441402-70f0e3a2a6e9?w=400&q=80" alt="Tiles Work" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">TILES & MARBLE WORKS</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1581093450021-4a7360e9a6b5?w=400&q=80" alt="Sewing" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">SEWING MACHINE OPERATION</h3>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=400&q=80" alt="Baking" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">BAKING</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                        <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                            <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=400&q=80" alt="Scaffolding" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                        </div>
                        <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">SCAFFOLDING</h3>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="text-center" style="margin-top:4rem;">
            <a href="#all-courses" class="text-white" style="display:inline-block; background:#006F3F; padding:1.25rem 2.5rem; border-radius:9999px; font-size:1.125rem; font-weight:700; box-shadow:0 25px 50px rgba(0,0,0,.2); transition:transform .3s, box-shadow .3s;" onmouseover="this.style.boxShadow='0 25px 50px rgba(0,111,63,0.5)'" onmouseout="this.style.boxShadow='0 25px 50px rgba(0,0,0,.2)'">
                View All Courses
            </a>
        </div>
    </div>
</section>

{{-- Optional: Add Font Awesome in your layout head if not already included --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> --}}

@endsection
