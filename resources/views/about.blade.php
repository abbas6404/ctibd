@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: clamp(2rem, 5vw, 3rem) 0; margin-bottom: clamp(2rem, 5vw, 3rem);">
    <div class="container text-center text-white px-3">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 700; margin-bottom: 1rem;">
            About Confidence Training Institute
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: clamp(1rem, 2.5vw, 1.25rem); opacity: 0.9; max-width: 700px; margin: 0 auto 2rem;">
            Building Your Skills, Building Your Future
        </p>
        <div class="row justify-content-center text-center g-3" style="margin-top: 2rem;">
            <div class="col-6 col-md-4">
                <h3 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 0.5rem;">2021</h3>
                <p style="font-family: 'Inter', sans-serif; opacity: 0.9; margin: 0; font-size: clamp(0.875rem, 2vw, 1rem);">Established</p>
            </div>
            <div class="col-6 col-md-4">
                <h3 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 0.5rem;">8</h3>
                <p style="font-family: 'Inter', sans-serif; opacity: 0.9; margin: 0; font-size: clamp(0.875rem, 2vw, 1rem);">Training Programs</p>
            </div>
            <div class="col-6 col-md-4">
                <h3 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.75rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 0.5rem;">100%</h3>
                <p style="font-family: 'Inter', sans-serif; opacity: 0.9; margin: 0; font-size: clamp(0.875rem, 2vw, 1rem);">Practical Training</p>
            </div>
        </div>
    </div>
</div>

<!-- Mission & Excellence Section -->
<section class="py-4" style="margin-bottom: clamp(2rem, 5vw, 3rem);">
    <div class="container px-3 px-md-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                    Our Vision & Mission
                </h2>
                <div class="mb-4">
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #006F3F; margin-bottom: 1rem;">
                        <i class="bi bi-eye me-2"></i>Our Vision
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; margin-bottom: 1rem;">
                        We envision a future where individuals ignite their potential through our industry-leading practical skills training. Graduates, brimming with confidence and expertise, are highly sought-after by top companies. We stand as a community pillar, partnering with industry to drive growth and adapt to future needs. Continuous innovation fuels our programs, ensuring relevancy for generations to come.
                    </p>
                    <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; margin-bottom: 2rem;">
                        <strong>Confidence Training Institute: Building skilled futures, one individual at a time.</strong>
                    </p>
                </div>
                <div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #2563eb; margin-bottom: 1rem;">
                        <i class="bi bi-bullseye me-2"></i>Our Mission
                    </h4>
                    <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7;">
                        We are architects of skilled futures. Empowering individuals through transformative training, igniting confidence, and forging pathways to fulfilling careers. Our hands-on programs unlock potential, connecting graduates with industry and building skilled communities. Innovation fuels our journey, shaping brighter tomorrows, one individual at a time.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background: #C3ECFB; border-radius: clamp(1rem, 3vw, 2rem); padding: clamp(1.5rem, 4vw, 3rem); border: 1px solid rgba(0,111,63,0.1);">
                    <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 2rem; text-align: center;">
                        About Us
                    </h3>
                    <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; margin-bottom: 2rem;">
                        At <strong>Confidence Training Institute</strong>, established in 2021, we unlock potential and empower individuals through practical skill training. We offer a diverse range of programs in high-demand trades like welding, electrical, steel fitting, pipe fitting, scaffolding, mechanical fitting, machinist, and blaster painter.
                    </p>
                    <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; margin-bottom: 2rem;">
                        Founded on the belief that confidence breeds success, we combine hands-on experience with industry-relevant knowledge. Our expert instructors guide you through practical exercises, ensuring you master the skills needed to thrive in your chosen field.
                    </p>
                    <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; margin-bottom: 0;">
                        More than just training, we provide <strong>career guidance, industry partnerships, and personalized support</strong>. Gain valuable practical skills you can use immediately. Boost your confidence and career prospects. Take control of your future and achieve your desired career path.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Message from Chairman Section -->
<section class="py-4" style="background: #C3ECFB; margin-bottom: clamp(2rem, 5vw, 3rem);">
    <div class="container px-3 px-md-4">
        <div class="row align-items-center">
            <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                <div style="background: white; border-radius: clamp(1rem, 3vw, 1.5rem); padding: clamp(1.5rem, 3vw, 2rem); box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <img src="{{ asset('img/chairman.jpeg') }}" alt="Iqbal Karim - Chairman" style="width: clamp(150px, 30vw, 200px); height: clamp(150px, 30vw, 200px); border-radius: 50%; object-fit: cover; margin-bottom: 1.5rem; border: clamp(3px, 1vw, 5px) solid #006F3F; max-width: 100%;">
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 0.5rem;">Iqbal Karim</h4>
                    <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600; margin: 0;">Chairman</p>
                </div>
            </div>
            <div class="col-lg-8">
                <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; color: #2d3748; margin-bottom: 1.5rem;">
                    Message from Chairman
                </h2>
                <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.8; font-size: clamp(1rem, 2vw, 1.125rem); margin-bottom: 1.5rem;">
                    Young minds, welcome! I, <strong>Iqbal Karim</strong>, Chairman of Confidence Training Institute, see in you a spark – the potential for incredible futures.
                </p>
                <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.8; font-size: clamp(1rem, 2vw, 1.125rem); margin-bottom: 1.5rem;">
                    Unemployed, uncategorized, unsure? Don't fret! You're not alone. We, at CTI, focus on empowering YOU.
                </p>
                <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.8; font-size: clamp(1rem, 2vw, 1.125rem); margin-bottom: 1.5rem;">
                    Welding, electrics, fitting... These aren't just trades, they're keys to opportunity. High-demand, stable careers await. We'll equip you with the skills and confidence to conquer them.
                </p>
                <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.8; font-size: clamp(1rem, 2vw, 1.125rem); margin-bottom: 1.5rem;">
                    But skills aren't everything. We ignite your belief, your inner fire. You'll find support, guidance, and a community on this journey.
                </p>
                <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.8; font-size: clamp(1rem, 2vw, 1.125rem); margin-bottom: 0;">
                    Remember, success takes dedication. But you're not alone! Embrace this chance, invest in yourself, and launch your future with Confidence Training Institute. Dream big, work hard, and achieve anything you set your mind to.
                </p>
                <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600; margin-top: 2rem; margin-bottom: 0;">
                    Thank you,<br>
                    <strong>IQBAL KARIM</strong><br>
                    Chairman
                </p>
            </div>
        </div>
    </div>
</section>

<!-- License & Affiliation Section -->
<section class="py-4" style="margin-bottom: clamp(2rem, 5vw, 3rem);">
    <div class="container px-3 px-md-4">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; color: #2d3748; margin-bottom: 2rem; text-align: center;">
            License & Affiliation
        </h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div style="background: white; border: 2px solid #006F3F; border-radius: clamp(1rem, 3vw, 1.5rem); padding: clamp(1.5rem, 3vw, 2rem); height: 100%;">
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #006F3F; margin-bottom: 1.5rem;">
                        <i class="bi bi-building me-2"></i>Business Information
                    </h4>
                    <div style="margin-bottom: 1rem;">
                        <strong style="color: #2d3748;">Business Name:</strong>
                        <p style="color: #4a5568; margin: 0.5rem 0 0 0;">Confidence Training Institute</p>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <strong style="color: #2d3748;">Business Type:</strong>
                        <p style="color: #4a5568; margin: 0.5rem 0 0 0;">Technical Training Center</p>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <strong style="color: #2d3748;">Business Started:</strong>
                        <p style="color: #4a5568; margin: 0.5rem 0 0 0;">2021</p>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <strong style="color: #2d3748;">License Authority:</strong>
                        <p style="color: #4a5568; margin: 0.5rem 0 0 0;">Dhaka North City Corporation</p>
                    </div>
                    <div>
                        <strong style="color: #2d3748;">Updated:</strong>
                        <p style="color: #4a5568; margin: 0.5rem 0 0 0;">2024-2025</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="background: white; border: 2px solid #2563eb; border-radius: clamp(1rem, 3vw, 1.5rem); padding: clamp(1.5rem, 3vw, 2rem); height: 100%;">
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2563eb; margin-bottom: 1.5rem;">
                        <i class="bi bi-award me-2"></i>Approval Information
                    </h4>
                    <div style="margin-bottom: 1rem;">
                        <strong style="color: #2d3748;">Approved Authority:</strong>
                        <p style="color: #4a5568; margin: 0.5rem 0 0 0;">Bangladesh Technical Education Board (BTEB)</p>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <strong style="color: #2d3748;">Approved Year:</strong>
                        <p style="color: #4a5568; margin: 0.5rem 0 0 0;">2020</p>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <strong style="color: #2d3748;">Trade:</strong>
                        <p style="color: #4a5568; margin: 0.5rem 0 0 0;">Welding</p>
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <strong style="color: #2d3748;">License Number:</strong>
                        <p style="color: #4a5568; margin: 0.5rem 0 0 0;">TRAD/DNCC/048187/2022</p>
                    </div>
                    
                    <!-- Trade License PDF Download -->
                    <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid #e5e7eb;">
                        <a href="{{ asset('docs/trade-license.pdf') }}" 
                           download 
                           class="btn d-inline-flex align-items-center justify-content-center gap-2" 
                           style="
                               background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); 
                               color: white; 
                               border: none; 
                               padding: clamp(0.75rem, 2vw, 1rem) clamp(1.5rem, 3vw, 2rem); 
                               border-radius: clamp(0.5rem, 1.5vw, 0.75rem); 
                               font-weight: 600; 
                               font-size: clamp(0.875rem, 2vw, 1rem);
                               text-decoration: none;
                               transition: all 0.3s ease;
                               box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
                               width: 100%;
                           "
                           onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 16px rgba(37, 99, 235, 0.4)';"
                           onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 12px rgba(37, 99, 235, 0.3)';">
                            <i class="bi bi-file-earmark-pdf" style="font-size: 1.25rem;"></i>
                            <span>Download Trade License PDF</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trade License Section -->
<section class="py-5" style="background: #f8fafc; margin-bottom: clamp(2rem, 5vw, 3rem);">
    <div class="container px-3 px-md-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; color: #2d3748; margin-bottom: 1rem; text-align: center;">
                    <i class="bi bi-file-earmark-pdf me-2"></i>Trade License
                </h2>
                <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; text-align: center; max-width: 800px; margin: 0 auto 2rem; font-size: clamp(1rem, 2vw, 1.125rem);">
                    View our official trade license document issued by Dhaka North City Corporation.
                </p>
                <div style="background: white; border-radius: clamp(0.75rem, 2vw, 1rem); padding: clamp(1rem, 2vw, 1.5rem); box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    <iframe 
                        src="{{ asset('docs/trade-license.pdf') }}" 
                        style="width: 100%; height: 600px; border: none; border-radius: clamp(0.5rem, 1.5vw, 0.75rem);"
                        title="Trade License PDF">
                    </iframe>
                    <div class="text-center mt-3">
                        <a href="{{ asset('docs/trade-license.pdf') }}" 
                           download 
                           class="btn d-inline-flex align-items-center justify-content-center gap-2" 
                           style="
                               background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); 
                               color: white; 
                               border: none; 
                               padding: clamp(0.75rem, 2vw, 1rem) clamp(1.5rem, 3vw, 2rem); 
                               border-radius: clamp(0.5rem, 1.5vw, 0.75rem); 
                               font-weight: 600; 
                               font-size: clamp(0.875rem, 2vw, 1rem);
                               text-decoration: none;
                               transition: all 0.3s ease;
                           "
                           onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 16px rgba(37, 99, 235, 0.4)';"
                           onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 12px rgba(37, 99, 235, 0.3)';">
                            <i class="bi bi-download"></i>
                            <span>Download PDF</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Expertise Section -->
<section class="py-4" style="background: #C3ECFB; margin-bottom: clamp(2rem, 5vw, 3rem);">
    <div class="container px-3 px-md-4">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; color: #2d3748; margin-bottom: 1rem; text-align: center;">
            Our Expertise
        </h2>
        <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; text-align: center; max-width: 800px; margin: 0 auto 3rem; font-size: clamp(1rem, 2vw, 1.125rem);">
            At Confidence Training Institute, we go beyond just providing skills training. We leverage our extensive expertise in personal and professional development to help individuals unlock their full potential and achieve their goals. We understand that confidence is key to success in any field, and we equip our learners with the tools and strategies they need to build their self-belief and thrive in all aspects of their lives.
        </p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div style="background: white; border-radius: clamp(0.75rem, 2vw, 1rem); padding: clamp(1.5rem, 3vw, 2rem); box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 100%;">
                    <div style="width: clamp(50px, 10vw, 60px); height: clamp(50px, 10vw, 60px); background: #006F3F; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="bi bi-lightbulb" style="font-size: clamp(1.25rem, 3vw, 1.5rem); color: white;"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #2d3748; margin-bottom: 1rem;">Identifying Strengths</h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.95rem; margin: 0;">Identifying strengths and areas for improvement</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="background: white; border-radius: 1rem; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 100%;">
                    <div style="width: clamp(50px, 10vw, 60px); height: clamp(50px, 10vw, 60px); background: #2563eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="bi bi-person-check" style="font-size: clamp(1.25rem, 3vw, 1.5rem); color: white;"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #2d3748; margin-bottom: 1rem;">Building Confidence</h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.95rem; margin: 0;">Building self-confidence</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="background: white; border-radius: 1rem; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 100%;">
                    <div style="width: clamp(50px, 10vw, 60px); height: clamp(50px, 10vw, 60px); background: #7c3aed; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="bi bi-chat-dots" style="font-size: clamp(1.25rem, 3vw, 1.5rem); color: white;"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #2d3748; margin-bottom: 1rem;">Communication Skills</h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.95rem; margin: 0;">Developing effective communication skills</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="background: white; border-radius: 1rem; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 100%;">
                    <div style="width: clamp(50px, 10vw, 60px); height: clamp(50px, 10vw, 60px); background: #dc2626; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="bi bi-people" style="font-size: clamp(1.25rem, 3vw, 1.5rem); color: white;"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #2d3748; margin-bottom: 1rem;">Interpersonal Skills</h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.95rem; margin: 0;">Enhancing interpersonal skills</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="background: white; border-radius: 1rem; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 100%;">
                    <div style="width: clamp(50px, 10vw, 60px); height: clamp(50px, 10vw, 60px); background: #059669; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="bi bi-arrow-repeat" style="font-size: clamp(1.25rem, 3vw, 1.5rem); color: white;"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #2d3748; margin-bottom: 1rem;">Adaptability</h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.95rem; margin: 0;">Adaptability and resilience</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="background: white; border-radius: 1rem; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 100%;">
                    <div style="width: clamp(50px, 10vw, 60px); height: clamp(50px, 10vw, 60px); background: #ea580c; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="bi bi-tools" style="font-size: clamp(1.25rem, 3vw, 1.5rem); color: white;"></i>
                    </div>
                    <h5 style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #2d3748; margin-bottom: 1rem;">Practical Training</h5>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; font-size: 0.95rem; margin: 0;">Industry-relevant curriculum with practical application</p>
                </div>
            </div>
        </div>
        <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; text-align: center; max-width: 800px; margin: 2rem auto 0; font-size: clamp(1rem, 2vw, 1.125rem);">
            Our experienced trainers and industry-relevant curriculum ensure that individuals receive practical and effective training that can be immediately applied in the workplace and everyday life. By combining skills development with confidence building, we empower individuals to not only excel in their chosen field, but also thrive personally and professionally.
        </p>
    </div>
</section>

<!-- What We Do Section -->
<section class="py-4" style="margin-bottom: clamp(2rem, 5vw, 3rem);">
    <div class="container px-3 px-md-4">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; color: #2d3748; margin-bottom: 1rem; text-align: center;">
            What We Do?
        </h2>
        <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; text-align: center; max-width: 900px; margin: 0 auto 3rem; font-size: clamp(1rem, 2vw, 1.125rem);">
            At Confidence Training Institute, we equip individuals with the skills and confidence they need to unleash their potential and achieve their aspirations. We go beyond simply teaching skills; we cultivate confident individuals who can thrive in both their personal and professional lives.
        </p>
        <div class="row g-4">
            <div class="col-md-4">
                <div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); border-radius: clamp(1rem, 3vw, 1.5rem); padding: clamp(1.5rem, 4vw, 2.5rem); color: white; height: 100%;">
                    <div style="width: clamp(60px, 12vw, 70px); height: clamp(60px, 12vw, 70px); background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="bi bi-tools" style="font-size: clamp(1.5rem, 4vw, 2rem);"></i>
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; margin-bottom: 1rem;">Skills Training</h4>
                    <p style="font-family: 'Inter', sans-serif; opacity: 0.95; line-height: 1.7; margin: 0;">We provide comprehensive training programs in various in-demand skills, ensuring you gain the technical proficiency needed to excel in your chosen field.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); border-radius: clamp(1rem, 3vw, 1.5rem); padding: clamp(1.5rem, 4vw, 2.5rem); color: white; height: 100%;">
                    <div style="width: clamp(60px, 12vw, 70px); height: clamp(60px, 12vw, 70px); background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="bi bi-person-check" style="font-size: clamp(1.5rem, 4vw, 2rem);"></i>
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; margin-bottom: 1rem;">Confidence Building</h4>
                    <p style="font-family: 'Inter', sans-serif; opacity: 0.95; line-height: 1.7; margin: 0;">We don't just train the mind, we empower the individual. We incorporate proven techniques and strategies to help you build unwavering self-belief and approach any challenge with confidence.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%); border-radius: clamp(1rem, 3vw, 1.5rem); padding: clamp(1.5rem, 4vw, 2.5rem); color: white; height: 100%;">
                    <div style="width: clamp(60px, 12vw, 70px); height: clamp(60px, 12vw, 70px); background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="bi bi-graph-up-arrow" style="font-size: clamp(1.5rem, 4vw, 2rem);"></i>
                    </div>
                    <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 700; margin-bottom: 1rem;">Holistic Development</h4>
                    <p style="font-family: 'Inter', sans-serif; opacity: 0.95; line-height: 1.7; margin: 0;">We understand that success goes beyond technical skills. We cultivate effective communication, strong interpersonal skills, adaptability, and resilience to empower you for complete professional and personal fulfillment.</p>
                </div>
            </div>
        </div>
        <p style="font-family: 'Inter', sans-serif; color: #4a5568; line-height: 1.7; text-align: center; max-width: 800px; margin: 3rem auto 0; font-size: clamp(1rem, 2vw, 1.125rem);">
            With experienced trainers and industry-relevant curriculum, we offer practical and impactful training that can be immediately applied in your daily life.
        </p>
    </div>
</section>

<!-- CTA Section -->
<section class="py-4" style="background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%); border-radius: clamp(1rem, 3vw, 1.5rem); margin-bottom: clamp(2rem, 5vw, 3rem);">
    <div class="container text-center text-white px-3">
        <h2 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1rem;">
            Ready to Transform Your Career?
        </h2>
        <p style="font-family: 'Inter', sans-serif; font-size: clamp(0.95rem, 2vw, 1.1rem); opacity: 0.9; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Invest in yourself, invest in your future. Contact Confidence Training Institute today!
        </p>
        <div class="d-flex justify-content-center gap-2 gap-md-3 flex-wrap">
            <a href="{{ route('courses') }}" class="btn btn-light px-3 px-md-4 py-2 py-md-3" style="font-family: 'Inter', sans-serif; font-weight: 600; font-size: clamp(0.875rem, 2vw, 1rem);">
                <i class="bi bi-mortarboard me-2"></i>
                Browse Courses
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light px-3 px-md-4 py-2 py-md-3" style="font-family: 'Inter', sans-serif; font-weight: 600; font-size: clamp(0.875rem, 2vw, 1rem);">
                <i class="bi bi-telephone me-2"></i>
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection