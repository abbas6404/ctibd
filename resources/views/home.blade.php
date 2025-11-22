{{-- resources/views/home.blade.php or welcome.blade.php --}}
@extends('layouts.app')

@section('title', 'Home - Confidence Training Institute')

@section('content')
{{-- Hero Section with Stunning Background Image --}}
<section class="position-relative d-flex align-items-center justify-content-center text-center"
    style="min-height:100vh; background-attachment:scroll; background-position:center; background-size:cover; background-image: url('https://www.ruhatrade.com/wp-content/uploads/2023/09/blog-3.fw-min.png');">

    <div class="position-relative container px-3 px-md-4" style="z-index:10;">
        <div style="background: rgb(0 255 255 / 17%); backdrop-filter: blur(6px); padding: 2rem 1.5rem; border-radius: 1.5rem; box-shadow: 0 20px 40px rgba(0,0,0,0.8); max-width: 800px; margin: 0 auto;">
            <h1 class="text-white" style="font-weight:800; font-size:clamp(1.75rem, 5vw, 3rem); line-height:1.1; margin-bottom:1rem; text-shadow: 0 3px 10px rgba(0,0,0,0.9);">
                Welcome to <span style="color:#006F3F;">Confidence</span><br class="d-none d-sm-block">
                Training Institute
            </h1>
            <p style="font-size:clamp(1rem, 2.5vw, 1.25rem); color:#f3f4f6; font-weight:300; margin-bottom:2rem; max-width:48rem; margin-left:auto; margin-right:auto; line-height:1.75; text-shadow: 0 2px 8px rgba(0,0,0,0.95);">
                Building Your Skills, Building Your Future • Practical Hands-on Training • Industry-Ready Graduates
            </p>

            <div class="d-flex flex-column flex-sm-row justify-content-center" style="gap:1rem; margin-top:2rem;">
                <a href="#courses" class="btn text-white rounded-pill fw-semibold" style="background:#006F3F; padding:.75rem 1.5rem; box-shadow:0 8px 20px rgba(0,0,0,0.25); font-size:clamp(0.875rem, 2vw, 1rem);">
                    Explore Courses
                </a>
                <a href="#contact" class="btn text-white rounded-pill fw-semibold" style="background:rgba(255,255,255,0.2); backdrop-filter:blur(6px); border:1px solid rgba(255,255,255,0.4); padding:.75rem 1.5rem; box-shadow:0 8px 20px rgba(0,0,0,0.25); font-size:clamp(0.875rem, 2vw, 1rem);">
                    Get in Touch
                </a>
            </div>
        </div>

        <div style="margin-top:2rem; animation:bounce 2s infinite;" class="d-none d-md-block">
            <i class="bi bi-chevron-down" style="font-size: 2.25rem; color: rgba(255,255,255,0.7);"></i>
        </div>
    </div>
</section>
<section style="background:#f0f8ff; padding:3rem 0;" class="position-relative overflow-hidden">
    <div style="position:absolute; top:0; right:0; bottom:0; left:0; opacity:.3;">
        <img src="https://res.cloudinary.com/dz209s6jk/image/upload/f_auto,q_auto/v1687481234/wave_haftone_bg_yw0wkb.png"
             alt="" style="width:100%; height:100%; object-fit:cover;">
    </div>

    <div class="container px-3 px-md-4 position-relative" style="z-index:10;">
        <div class="text-center" style="margin-bottom:3rem;">
            <span class="d-inline-block rounded-pill fw-bold text-uppercase" style="padding:.5rem 1rem; background:linear-gradient(90deg, #2563eb 0%, #7c3aed 100%); color:white; letter-spacing:.08em; margin-bottom:1rem; font-size:clamp(0.75rem, 2vw, 0.875rem);">
                Empowering Individuals Through Practical Skill Training
            </span>
            <h2 style="font-size:clamp(1.75rem, 5vw, 3rem); font-weight:800; color:#111827; line-height:1.1;">
                Why Choose <span style="color:transparent; background:linear-gradient(90deg, #2563eb 0%, #7c3aed 100%); background-clip:text;">Confidence</span> Training Institute
            </h2>
            <p style="margin-top:1rem; font-size:clamp(1rem, 2.5vw, 1.25rem); color:#4b5563; max-width:48rem; margin-left:auto; margin-right:auto; padding:0 1rem;">
                Gain valuable practical skills you can use immediately. Boost your confidence and career prospects. Take control of your future.
            </p>
        </div>

        <div class="row" style="--bs-gutter-x: 1.5rem; --bs-gutter-y: 1.5rem;">
            
            <div class="col-md-4">
                <div class="bg-white overflow-hidden h-100" style="border-radius:1.5rem; transition:box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="position-relative" style="height:14rem; overflow:hidden;">
                        <img src="img/Industry-Expert-Trainers.jpg" 
                             alt="Expert coding on a screen" style="width:100%; height:100%; object-fit:cover; transition:transform .7s; filter:grayscale(20%);">
                        <div style="position:absolute; top:0; right:0; bottom:0; left:0; background:linear-gradient(to top, rgba(0,0,0,.7), transparent);"></div>
                        <div style="position:absolute; bottom:1.5rem; left:1.5rem; color:white;">
                            <div style="font-size:2rem; font-weight:900; line-height:1;">Expert</div>
                            <div style="font-size:0.9rem; opacity:0.9; margin-top:0.25rem;">Trainers</div>
                        </div>
                    </div>
                    <div style="padding:1.5rem;">
                        <h3 style="font-size:1.25rem; font-weight:700; color:#111827; margin-bottom:0.75rem; font-family: 'Inter', sans-serif;">Industry Expert Trainers</h3>
                        <p style="color:#374151; font-size:0.95rem; line-height:1.5; font-family: 'Inter', sans-serif;">
                            Our instructors are highly qualified professionals with extensive industry experience. They are passionate about sharing their knowledge and guiding you towards success in your chosen career path.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-white overflow-hidden h-100" style="border-radius:1.5rem; transition:box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="position-relative" style="height:14rem; overflow:hidden;">
                        <img src="img/welding-technology.jpg" 
                             alt="Classroom with students and teacher" style="width:100%; height:100%; object-fit:cover; transition:transform .7s;">
                        <div style="position:absolute; top:0; right:0; bottom:0; left:0; background:linear-gradient(to top, rgba(0,0,0,.6), transparent);"></div>
                        <div style="position:absolute; top:1rem; right:1rem; background:#006F3F; color:white; padding:0.5rem 1rem; border-radius:9999px; font-size:0.75rem; font-weight:700;">
                            Hands-on
                        </div>
                    </div>
                    <div style="padding:1.5rem;">
                        <h3 style="font-size:1.25rem; font-weight:700; color:#111827; margin-bottom:0.75rem; font-family: 'Inter', sans-serif;">Practical Hands-on Learning</h3>
                        <p style="color:#374151; font-size:0.95rem; line-height:1.5; font-family: 'Inter', sans-serif;">
                            Our programs go beyond theory, emphasizing hands-on experience and real-world application. You'll learn by doing, practicing your skills in state-of-the-art workshops equipped with industry-standard tools and equipment.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-white overflow-hidden h-100" style="border-radius:1.5rem; transition:box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);">
                    <div class="position-relative" style="height:14rem; overflow:hidden;">
                        <img src="img/Career-Support-Services.jpeg" 
                             alt="Career support" style="width:100%; height:100%; object-fit:cover; transition:transform .7s;">
                        <div style="position:absolute; top:0; right:0; bottom:0; left:0; background:linear-gradient(to top, rgba(0,0,0,.6), transparent);"></div>
                        <div style="position:absolute; top:1rem; right:1rem; background:#006F3F; color:white; padding:0.5rem 1rem; border-radius:9999px; font-size:0.75rem; font-weight:700;">
                            Career Support
                        </div>
                    </div>
                    <div style="padding:1.5rem;">
                        <h3 style="font-size:1.25rem; font-weight:700; color:#111827; margin-bottom:0.75rem; font-family: 'Inter', sans-serif;">Career Support Services</h3>
                        <p style="color:#374151; font-size:0.95rem; line-height:1.5; font-family: 'Inter', sans-serif;">
                            We are dedicated to your long-term success. We offer career counseling and job placement assistance to help you connect with ideal career opportunities in your chosen field.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>

        <div style="background:#0d9488; border-radius:1rem; padding:2rem 1rem; margin-top:3rem;">
            <div class="row row-cols-2 row-cols-md-4 g-3 text-center text-white">
                <div class="col">
                    <div style="font-size:clamp(2rem, 5vw, 3rem); font-weight:900; line-height:1;">2021</div>
                    <div style="font-size:clamp(0.875rem, 2vw, 1rem); margin-top:0.5rem; opacity:0.9;">Established</div>
                </div>
                <div class="col">
                    <div style="font-size:clamp(2rem, 5vw, 3rem); font-weight:900; line-height:1;">8</div>
                    <div style="font-size:clamp(0.875rem, 2vw, 1rem); margin-top:0.5rem; opacity:0.9;">Training Programs</div>
                </div>
                <div class="col">
                    <div style="font-size:clamp(2rem, 5vw, 3rem); font-weight:900; line-height:1;">100%</div>
                    <div style="font-size:clamp(0.875rem, 2vw, 1rem); margin-top:0.5rem; opacity:0.9;">Practical Training</div>
                </div>
                <div class="col">
                    <div style="font-size:clamp(2rem, 5vw, 3rem); font-weight:900; line-height:1;">BTEB</div>
                    <div style="font-size:clamp(0.875rem, 2vw, 1rem); margin-top:0.5rem; opacity:0.9;">Approved Institute</div>
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
    <div style="background-attachment:scroll; background-position:center; background-size:cover; padding:4rem 0;">

    <!-- Optional animated glows -->
    <div style="position:absolute; top:0; right:0; bottom:0; left:0; pointer-events:none;">
        <div style="position:absolute; top:5rem; left:2.5rem; width:24rem; height:24rem; background:rgba(59,130,246,0.2); border-radius:9999px; filter:blur(3rem); animation:pulse 2s infinite;"></div>
        <div style="position:absolute; bottom:5rem; right:2.5rem; width:20rem; height:20rem; background:rgba(168,85,247,0.2); border-radius:9999px; filter:blur(3rem); animation:pulse 2s infinite; animation-delay:1s;"></div>
    </div>

    <div class="position-relative container px-3 px-md-4" style="z-index:10;">
        <div class="row g-4 align-items-center">

            <!-- Left: Auto-Changing Image Carousel + Floating Badge -->
            <div class="position-relative col-12 col-lg-6">
                <div style="position: relative; border-radius: 1.5rem; overflow: hidden; box-shadow: 0 25px 50px rgba(0,0,0,.3); height: clamp(300px, 50vw, 500px);">
                    <!-- Image Carousel Container -->
                    <div id="aboutImageCarousel" style="position: relative; width: 100%; height: 100%;">
                        <!-- Images will be dynamically inserted here -->
                        <img src="{{ asset('img/about/Training-session.jpg') }}" 
                             alt="Training session" 
                             class="carousel-image" 
                             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 1.5s ease-in-out;">
                      
                        <img src="{{ asset('img/about/Students-learning.jpg') }}" 
                             alt="Students learning" 
                             class="carousel-image active" 
                             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 1; transition: opacity 1.5s ease-in-out;">
                        <img src="{{ asset('img/about/Trainer-teaching.jpg') }}" 
                             alt="Trainer teaching" 
                             class="carousel-image" 
                             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 1.5s ease-in-out;">
                       <img src="{{ asset('img/about/Welding-training.jpg') }}" 
                             alt="Welding training" 
                             class="carousel-image" 
                             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 1.5s ease-in-out;">
                        <img src="{{ asset('img/about/Pipe-fitting-training.jpg') }}" 
                             alt="Pipe fitting training" 
                             class="carousel-image" 
                             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 1.5s ease-in-out;">
                        <img src="{{ asset('img/about/Steel-fitter-training.jpg') }}" 
                             alt="Steel fitter training" 
                             class="carousel-image" 
                             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 1.5s ease-in-out;">
                        <img src="{{ asset('img/about/Practical-training.jpg') }}" 
                             alt="Practical training" 
                             class="carousel-image" 
                             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 1.5s ease-in-out;">
                        <img src="{{ asset('img/about/Workshop-activity.jpg') }}" 
                             alt="Workshop activity" 
                             class="carousel-image" 
                             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 1.5s ease-in-out;">
                    </div>
                    
                    <!-- Gradient Overlay for better text readability -->
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.3), transparent); pointer-events: none;"></div>
                    
                    <!-- Navigation Arrows -->
                    <button class="carousel-nav carousel-prev" style="position: absolute; top: 50%; left: 1rem; transform: translateY(-50%); background: rgba(255,255,255,0.9); border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; z-index: 15; display: flex; align-items: center; justify-content: center; transition: all 0.3s; opacity: 0.8;" onmouseover="this.style.opacity='1'; this.style.background='rgba(255,255,255,1)';" onmouseout="this.style.opacity='0.8'; this.style.background='rgba(255,255,255,0.9)';">
                        <i class="bi bi-chevron-left" style="font-size: 1.5rem; color: #006F3F;"></i>
                    </button>
                    <button class="carousel-nav carousel-next" style="position: absolute; top: 50%; right: 1rem; transform: translateY(-50%); background: rgba(255,255,255,0.9); border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; z-index: 15; display: flex; align-items: center; justify-content: center; transition: all 0.3s; opacity: 0.8;" onmouseover="this.style.opacity='1'; this.style.background='rgba(255,255,255,1)';" onmouseout="this.style.opacity='0.8'; this.style.background='rgba(255,255,255,0.9)';">
                        <i class="bi bi-chevron-right" style="font-size: 1.5rem; color: #006F3F;"></i>
                    </button>
                    
                    <!-- Carousel Indicators -->
                    <div style="position: absolute; bottom: 1rem; left: 50%; transform: translateX(-50%); display: flex; gap: 0.5rem; z-index: 15; pointer-events: auto;">
                        <span class="carousel-indicator active" data-index="0" style="width: 12px; height: 12px; border-radius: 50%; background: white; cursor: pointer; opacity: 1; transition: all 0.3s; border: 2px solid rgba(255,255,255,0.8);" onmouseover="this.style.transform='scale(1.2)';" onmouseout="this.style.transform='scale(1)';"></span>
                        <span class="carousel-indicator" data-index="1" style="width: 12px; height: 12px; border-radius: 50%; background: white; cursor: pointer; opacity: 0.5; transition: all 0.3s; border: 2px solid rgba(255,255,255,0.8);" onmouseover="this.style.transform='scale(1.2)'; this.style.opacity='0.8';" onmouseout="this.style.transform='scale(1)'; this.style.opacity='0.5';"></span>
                        <span class="carousel-indicator" data-index="2" style="width: 12px; height: 12px; border-radius: 50%; background: white; cursor: pointer; opacity: 0.5; transition: all 0.3s; border: 2px solid rgba(255,255,255,0.8);" onmouseover="this.style.transform='scale(1.2)'; this.style.opacity='0.8';" onmouseout="this.style.transform='scale(1)'; this.style.opacity='0.5';"></span>
                        <span class="carousel-indicator" data-index="3" style="width: 12px; height: 12px; border-radius: 50%; background: white; cursor: pointer; opacity: 0.5; transition: all 0.3s; border: 2px solid rgba(255,255,255,0.8);" onmouseover="this.style.transform='scale(1.2)'; this.style.opacity='0.8';" onmouseout="this.style.transform='scale(1)'; this.style.opacity='0.5';"></span>
                        <span class="carousel-indicator" data-index="4" style="width: 12px; height: 12px; border-radius: 50%; background: white; cursor: pointer; opacity: 0.5; transition: all 0.3s; border: 2px solid rgba(255,255,255,0.8);" onmouseover="this.style.transform='scale(1.2)'; this.style.opacity='0.8';" onmouseout="this.style.transform='scale(1)'; this.style.opacity='0.5';"></span>
                        <span class="carousel-indicator" data-index="5" style="width: 12px; height: 12px; border-radius: 50%; background: white; cursor: pointer; opacity: 0.5; transition: all 0.3s; border: 2px solid rgba(255,255,255,0.8);" onmouseover="this.style.transform='scale(1.2)'; this.style.opacity='0.8';" onmouseout="this.style.transform='scale(1)'; this.style.opacity='0.5';"></span>
                        <span class="carousel-indicator" data-index="6" style="width: 12px; height: 12px; border-radius: 50%; background: white; cursor: pointer; opacity: 0.5; transition: all 0.3s; border: 2px solid rgba(255,255,255,0.8);" onmouseover="this.style.transform='scale(1.2)'; this.style.opacity='0.8';" onmouseout="this.style.transform='scale(1)'; this.style.opacity='0.5';"></span>
                        <span class="carousel-indicator" data-index="7" style="width: 12px; height: 12px; border-radius: 50%; background: white; cursor: pointer; opacity: 0.5; transition: all 0.3s; border: 2px solid rgba(255,255,255,0.8);" onmouseover="this.style.transform='scale(1.2)'; this.style.opacity='0.8';" onmouseout="this.style.transform='scale(1)'; this.style.opacity='0.5';"></span>
                    </div>
                </div>

                <!-- Floating Stats Badge -->
                <div style="background:linear-gradient(90deg, #11a9b6 0%, #24748D 100%); position:absolute; bottom:-1rem; right:-1rem; color:white; padding:1.5rem; border-radius:1.5rem; box-shadow:0 25px 50px rgba(0,0,0,.2); border:1px solid rgba(255,255,255,0.1); z-index: 10;" class="d-none d-md-block">
                    <div style="font-size: clamp(2rem, 4vw, 4rem); font-weight: 900;">2021</div>
                    <div style="font-size: clamp(0.875rem, 2vw, 1.125rem); font-weight: 500; opacity: 0.9;">Established<br>Building Skilled Futures</div>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="col-12 col-lg-6">
                <span class="d-inline-block rounded-pill fw-bold" style="padding:.5rem 1rem; background:rgba(59,130,246,.2); backdrop-filter:blur(4px); border:1px solid rgba(255,255,255,.3); font-size:clamp(0.75rem, 2vw, 0.875rem); letter-spacing:.08em; margin-bottom:1.5rem;">
                    ABOUT CONFIDENCE TRAINING INSTITUTE
                </span>

                <h2 style="font-size:clamp(1.75rem, 5vw, 3rem); font-weight:800; line-height:1.1; margin-bottom:1.5rem;">
                    Building Your Skills,<br>
                    <span style="color:#0E753D;">
                        Building Your Future
                    </span>
                </h2>

                <p style="font-size:clamp(1rem, 2.5vw, 1.25rem); color:#e5e7eb; line-height:1.75; margin-bottom:1rem;">
                    At <strong>Confidence Training Institute</strong>, established in 2021, we unlock potential and empower individuals through practical skill training. We offer a diverse range of programs in high-demand trades like welding, electrical, steel fitting, pipe fitting, scaffolding, mechanical fitting, machinist, and blaster painter.
                </p>

                <p style="font-size:clamp(0.95rem, 2vw, 1.125rem); color:#d1d5db; line-height:1.75; margin-bottom:1rem;">
                    Founded on the belief that confidence breeds success, we combine hands-on experience with industry-relevant knowledge. Our expert instructors guide you through practical exercises, ensuring you master the skills needed to thrive in your chosen field.
                </p>

                <p style="font-size:clamp(0.95rem, 2vw, 1.125rem); color:#d1d5db; line-height:1.75; margin-bottom:2rem;">
                    More than just training, we provide <strong>career guidance, industry partnerships, and personalized support</strong>. Gain valuable practical skills you can use immediately. Boost your confidence and career prospects. Take control of your future and achieve your desired career path.
                </p>

                <div class="row g-3" style="margin-bottom:3rem;">
                    <div class="d-flex align-items-start" style="gap:1rem;">
                        <div class="d-flex align-items-center justify-content-center" style="width:3rem; height:3rem; background:rgba(59,130,246,.3); border-radius:.75rem; backdrop-filter:blur(4px);">
                            <i class="bi bi-award" style="color:#006F3F; font-size:1.25rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold">Licensed & Approved</div>
                            <div style="font-size:.875rem; color:#d1d5db;">Dhaka North City Corporation • BTEB Approved</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start" style="gap:1rem;">
                        <div class="d-flex align-items-center justify-content-center" style="width:3rem; height:3rem; background:rgba(168,85,247,.3); border-radius:.75rem; backdrop-filter:blur(4px);">
                            <i class="bi bi-people" style="color:#a855f7; font-size:1.25rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold">Industry Expert Trainers</div>
                            <div style="font-size:.875rem; color:#d1d5db;">Experienced professionals with real-world knowledge</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start" style="gap:1rem;">
                        <div class="d-flex align-items-center justify-content-center" style="width:3rem; height:3rem; background:rgba(0,111,63,.3); border-radius:.75rem; backdrop-filter:blur(4px);">
                            <i class="bi bi-briefcase" style="color:#006F3F; font-size:1.25rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold">Career Support Services</div>
                            <div style="font-size:.875rem; color:#d1d5db;">Career counseling and job placement assistance</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start" style="gap:1rem;">
                        <div class="d-flex align-items-center justify-content-center" style="width:3rem; height:3rem; background:rgba(236,72,153,.3); border-radius:.75rem; backdrop-filter:blur(4px);">
                            <i class="bi bi-tools" style="color:#f472b6; font-size:1.25rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold">Practical Hands-on Training</div>
                            <div style="font-size:.875rem; color:#d1d5db;">Learn by doing with industry-standard equipment</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row" style="gap:1rem;">
                    <a href="#courses" class="text-white rounded-pill fw-bold d-inline-flex align-items-center justify-content-center" 
                       style="background:linear-gradient(90deg, #11a9b6 0%, #24748D 100%); padding:1rem 1.5rem; box-shadow:0 25px 50px rgba(0,0,0,.2); transition:transform .3s, box-shadow .3s; font-size:clamp(0.875rem, 2vw, 1rem);" 
                       onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,.25)';" 
                       onmouseout="this.style.transform=''; this.style.boxShadow='0 25px 50px rgba(0,0,0,.2)';">
                        Explore Our Courses
                    </a>
                    <a href="#contact" class="text-white rounded-pill fw-bold d-inline-flex align-items-center justify-content-center" 
                       style="background:rgba(255,255,255,0.2); backdrop-filter:blur(8px); border:2px solid rgba(255,255,255,0.4); padding:1rem 1.5rem; transition:transform .3s, background .3s, border-color .3s; font-size:clamp(0.875rem, 2vw, 1rem);" 
                       onmouseover="this.style.transform='translateY(-2px)'; this.style.background='rgba(255,255,255,0.3)'; this.style.borderColor='rgba(255,255,255,0.6)';" 
                       onmouseout="this.style.transform=''; this.style.background='rgba(255,255,255,0.2)'; this.style.borderColor='rgba(255,255,255,0.4)';">
                        Meet Our Team
                    </a>
                </div>
            </div>
        </div>
    </div>

   
</section>


<section style="background:rgb(215, 241, 250); padding:3rem 0;">
    <div class="container px-3 px-md-4">
        <div class="text-center" style="margin-bottom:3rem;">
            <p style="color:#db2777; font-weight:600; letter-spacing:.08em; margin-bottom:1rem; font-size:clamp(0.75rem, 2vw, 0.875rem);">
                LET'S KNOW ABOUT
            </p>
            <h2 style="font-size:clamp(1.5rem, 4vw, 2.25rem); font-weight:800; color:#111827;">
                Our <span style="color:transparent; background:linear-gradient(90deg, #2563eb 0%, #7c3aed 100%); background-clip:text;">Training Programs</span>
            </h2>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4" >
            @foreach($courses as $course)
            <div class="col">
                <a href="{{ route('course-detail', ['id' => $course->id]) }}" style="text-decoration: none; color: inherit;">
                    <div class="bg-white overflow-hidden border h-100" style="border-radius:1.5rem; border-color:#f3f4f6; transition:transform .3s, box-shadow .3s; box-shadow:0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 15px 25px rgba(0,0,0,.15)';" onmouseout="this.style.transform=''; this.style.boxShadow='0 10px 15px rgba(0,0,0,.1), 0 4px 6px rgba(0,0,0,.05)';">
                        <div class="d-flex align-items-center" style="gap:1.25rem; padding:1.5rem;">
                            <div style="width:6rem; height:6rem; border-radius:1rem; overflow:hidden; flex-shrink:0; box-shadow:0 4px 6px rgba(0,0,0,.1);">
                                @if($course->img)
                                    <img src="{{ asset('storage/' . $course->img) }}" alt="{{ $course->title }}" style="width:100%; height:100%; object-fit:cover; transition:transform .3s;">
                                @else
                                    <div style="width:100%; height:100%; background:linear-gradient(135deg, #667eea 0%, #764ba2 100%); display:flex; align-items:center; justify-content:center;">
                                        <i class="bi bi-book" style="font-size:2rem; color:rgba(255,255,255,0.5);"></i>
                                    </div>
                                @endif
                            </div>
                            <h3 style="font-size:1.25rem; font-weight:700; color:#1f2937;">{{ strtoupper($course->title) }}</h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="text-center" style="margin-top:3rem;">
            <a href="{{ route('courses') }}" class="text-white" style="display:inline-block; background:#006F3F; padding:1rem 2rem; border-radius:9999px; font-size:clamp(0.875rem, 2vw, 1.125rem); font-weight:700; box-shadow:0 25px 50px rgba(0,0,0,.2); transition:transform .3s, box-shadow .3s;" onmouseover="this.style.boxShadow='0 25px 50px rgba(0,111,63,0.5)'" onmouseout="this.style.boxShadow='0 25px 50px rgba(0,0,0,.2)'">
                View All Courses
            </a>
        </div>
    </div>
</section>

{{-- Optional: Add Font Awesome in your layout head if not already included --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> --}}

<script>
// Auto-changing image carousel for About Us section
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('#aboutImageCarousel .carousel-image');
    const indicators = document.querySelectorAll('.carousel-indicator');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
    let currentIndex = 0;
    let carouselInterval;
    const intervalTime = 4000; // Change image every 4 seconds
    
    if (images.length === 0) return;
    
    function showImage(index) {
        // Hide all images
        images.forEach((img, i) => {
            img.style.opacity = '0';
            img.classList.remove('active');
        });
        
        // Show current image
        images[index].style.opacity = '1';
        images[index].classList.add('active');
        
        // Update indicators
        indicators.forEach((indicator, i) => {
            if (i === index) {
                indicator.style.opacity = '1';
                indicator.style.transform = 'scale(1.2)';
                indicator.classList.add('active');
            } else {
                indicator.style.opacity = '0.5';
                indicator.style.transform = 'scale(1)';
                indicator.classList.remove('active');
            }
        });
    }
    
    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }
    
    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    }
    
    function startCarousel() {
        carouselInterval = setInterval(nextImage, intervalTime);
    }
    
    function stopCarousel() {
        clearInterval(carouselInterval);
    }
    
    // Start auto-rotation
    startCarousel();
    
    // Navigation buttons
    if (nextButton) {
        nextButton.addEventListener('click', function(e) {
            e.stopPropagation();
            stopCarousel();
            nextImage();
            startCarousel();
        });
    }
    
    if (prevButton) {
        prevButton.addEventListener('click', function(e) {
            e.stopPropagation();
            stopCarousel();
            prevImage();
            startCarousel();
        });
    }
    
    // Pause on hover
    const carouselContainer = document.getElementById('aboutImageCarousel').parentElement;
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', function() {
            stopCarousel();
        });
        
        carouselContainer.addEventListener('mouseleave', function() {
            startCarousel();
        });
    }
    
    // Click on indicators to jump to specific image
    indicators.forEach((indicator) => {
        indicator.addEventListener('click', function(e) {
            e.stopPropagation();
            const index = parseInt(this.getAttribute('data-index'));
            currentIndex = index;
            showImage(currentIndex);
            // Reset interval
            stopCarousel();
            startCarousel();
        });
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        const carousel = document.getElementById('aboutImageCarousel');
        if (carousel && carousel.offsetParent !== null) {
            if (e.key === 'ArrowLeft') {
                stopCarousel();
                prevImage();
                startCarousel();
            } else if (e.key === 'ArrowRight') {
                stopCarousel();
                nextImage();
                startCarousel();
            }
        }
    });
    
    // Initialize
    showImage(0);
});
</script>

@endsection
