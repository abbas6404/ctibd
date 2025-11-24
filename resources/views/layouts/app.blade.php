<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @php
        $siteName = \App\Models\Setting::get('site_name', 'Confidence Training Institute');
        $defaultMetaTitle = \App\Models\Setting::get('seo_meta_title', 'Confidence Training Institute (CTI) - BTEB Approved Vocational Training Center in Dhaka | Welding, Pipe Fitter, Steel Fitter Courses');
        $defaultMetaDescription = \App\Models\Setting::get('seo_meta_description', 'Confidence Training Institute (CTI) - BTEB approved technical training center in Dhaka, Bangladesh. Offering practical hands-on training in welding, electrical, steel fitting, pipe fitting, scaffolding, mechanical fitting, machinist, and blaster painter. Licensed by Dhaka North City Corporation. Established 2021. Contact: +88 01716 986 585');
        $defaultMetaKeywords = \App\Models\Setting::get('seo_meta_keywords', 'Confidence Training Institute, CTI, BTEB approved training center, vocational training Dhaka, welding training Bangladesh, pipe fitter course, steel fitter training, scaffolding training, mechanical fitter course, machinist training, blaster painter course, technical training center, practical training institute, Dhaka North City Corporation licensed, Uttarkhan training center, Kuripara training institute, Iqbal Karim, TRAD/DNCC/048187/2022, 2021 established training center');
        $ogImage = \App\Models\Setting::get('seo_og_image', asset('img/logo.png'));
        $currentUrl = url()->current();
        
        // Allow pages to override SEO meta tags
        $pageTitle = $defaultMetaTitle;
        if (isset($title) && !empty($title)) {
            $pageTitle = $title . ' - ' . $siteName;
        }
        $metaTitle = $pageTitle;
        $metaDescription = $defaultMetaDescription;
        $metaKeywords = $defaultMetaKeywords;
        $pageOgImage = $ogImage;
    @endphp
    
    <!-- Primary Meta Tags -->
    <title>@yield('meta_title', $metaTitle)</title>
    <meta name="title" content="@yield('meta_title', $metaTitle)">
    <meta name="description" content="@yield('meta_description', $metaDescription)">
    <meta name="keywords" content="@yield('meta_keywords', $metaKeywords)">
    <meta name="author" content="{{ $siteName }}">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $currentUrl }}">
    <meta property="og:title" content="@yield('meta_title', $metaTitle)">
    <meta property="og:description" content="@yield('meta_description', $metaDescription)">
    <meta property="og:image" content="@yield('og_image', $pageOgImage)">
    <meta property="og:site_name" content="{{ $siteName }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $currentUrl }}">
    <meta property="twitter:title" content="@yield('meta_title', $metaTitle)">
    <meta property="twitter:description" content="@yield('meta_description', $metaDescription)">
    <meta property="twitter:image" content="@yield('og_image', $pageOgImage)">
    
    <!-- Google Site Verification -->
    @if(\App\Models\Setting::get('seo_google_site_verification'))
        <meta name="google-site-verification" content="{{ \App\Models\Setting::get('seo_google_site_verification') }}">
    @endif
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ $currentUrl }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/favicon.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        
        .font-heading {
            font-family: 'Montserrat', sans-serif;
        }
        
        /* Responsive image handling */
        img {
            max-width: 100%;
            height: auto;
        }
        
        /* Prevent horizontal scroll */
        * {
            box-sizing: border-box;
        }
        
        /* Mobile-friendly container padding */
        @media (max-width: 576px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
        
        /* Touch-friendly buttons on mobile */
        @media (max-width: 768px) {
            .btn, a.btn, button {
                min-height: 44px;
                min-width: 44px;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Popup Notification Modal Styles */
        #popupNotificationModal .modal-content {
            animation: modalFadeIn 0.5s ease-out;
        }
        
        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        
        #popupNotificationModal .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(4px);
        }
        
        #popupNotificationModal .btn-close {
            font-size: 1.5rem;
            padding: 0.5rem;
            z-index: 10;
        }
        
        @media (max-width: 768px) {
            #popupNotificationModal .modal-dialog {
                margin: 1rem;
            }
            
            #popupNotificationModal .modal-body img {
                max-height: 60vh !important;
            }
        }
    </style>
    @stack('styles')
    
    <!-- Google Analytics -->
    @if(\App\Models\Setting::get('seo_google_analytics'))
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ \App\Models\Setting::get('seo_google_analytics') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ \App\Models\Setting::get('seo_google_analytics') }}');
        </script>
    @endif
    
    <!-- Facebook Pixel -->
    @if(\App\Models\Setting::get('seo_facebook_pixel'))
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ \App\Models\Setting::get('seo_facebook_pixel') }}');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ \App\Models\Setting::get('seo_facebook_pixel') }}&ev=PageView&noscript=1"/>
        </noscript>
    @endif
    
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "{{ $siteName }}",
        "alternateName": "CTI",
        "description": "{{ $metaDescription }}",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('img/logo.png') }}",
        "foundingDate": "2021",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "House # 114, Kuripara, Uttarkhan",
            "addressLocality": "Dhaka",
            "postalCode": "1230",
            "addressRegion": "Dhaka",
            "addressCountry": "BD"
        },
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "{{ \App\Models\Setting::get('site_phone', '+88 01716 986 585') }}",
                "contactType": "customer service",
                "email": "{{ \App\Models\Setting::get('site_email', 'ikarimptc@gmail.com') }}",
                "availableLanguage": ["English", "Bengali"]
            }
        ],
        "hasCredential": {
            "@type": "EducationalOccupationalCredential",
            "credentialCategory": "BTEB Approved",
            "recognizedBy": {
                "@type": "Organization",
                "name": "Bangladesh Technical Education Board"
            }
        },
        "offers": {
            "@type": "Offer",
            "itemOffered": {
                "@type": "Course",
                "name": "Vocational Training Programs",
                "description": "Practical hands-on training in welding, electrical, steel fitting, pipe fitting, scaffolding, mechanical fitting, machinist, and blaster painter"
            }
        },
        "sameAs": [
            @php
                $socialLinks = [];
                if(\App\Models\Setting::get('facebook_url')) $socialLinks[] = \App\Models\Setting::get('facebook_url');
                if(\App\Models\Setting::get('twitter_url')) $socialLinks[] = \App\Models\Setting::get('twitter_url');
                if(\App\Models\Setting::get('instagram_url')) $socialLinks[] = \App\Models\Setting::get('instagram_url');
                if(\App\Models\Setting::get('linkedin_url')) $socialLinks[] = \App\Models\Setting::get('linkedin_url');
                if(\App\Models\Setting::get('youtube_url')) $socialLinks[] = \App\Models\Setting::get('youtube_url');
            @endphp
            @foreach($socialLinks as $index => $link)
                "{{ $link }}"@if($index < count($socialLinks) - 1),@endif
            @endforeach
        ]
    }
    </script>
</head>
<body class="min-vh-100 bg-light">
    @include('layouts.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('layouts.footer')
    
    <!-- Popup Notification Modal -->
    @php
        $popupNotification = \App\Models\Notification::where('type', 'popup_notification')
            ->whereNotNull('img')
            ->latest()
            ->first();
    @endphp
    @if($popupNotification)
        <div class="modal fade" id="popupNotificationModal" tabindex="-1" aria-labelledby="popupNotificationModalLabel" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-lg" style="border-radius: 1rem; overflow: hidden;">
                    <div class="modal-header border-0 pb-0" style="background: linear-gradient(135deg, #dc2626, #be123c);">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="opacity: 1; filter: brightness(0) invert(1);"></button>
                    </div>
                    <div class="modal-body p-0 text-center">
                        @if($popupNotification->img)
                            <img src="{{ asset('storage/' . $popupNotification->img) }}" 
                                 alt="Notification" 
                                 class="img-fluid w-100" 
                                 style="max-height: 70vh; object-fit: contain;">
                        @endif
                    </div>
                    <div class="modal-footer border-0 justify-content-center pb-4">
                        <button type="button" class="btn btn-danger px-5 py-2 rounded-pill fw-bold" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-2"></i>Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const popupNotificationId = {{ $popupNotification->id }};
                const modalElement = document.getElementById('popupNotificationModal');
                
                // Check if popup should be shown (48 hours check)
                function shouldShowPopup() {
                    const storedData = localStorage.getItem('popupNotificationClosed');
                    
                    if (!storedData) {
                        return true; // Never shown before
                    }
                    
                    try {
                        const data = JSON.parse(storedData);
                        const now = Date.now();
                        const fortyEightHours = 48 * 60 * 60 * 1000; // 48 hours in milliseconds
                        
                        // Check if it's a different notification or 48 hours have passed
                        if (data.notificationId !== popupNotificationId) {
                            return true; // Different notification, show it
                        }
                        
                        if (now - data.timestamp >= fortyEightHours) {
                            return true; // 48 hours have passed, show it again
                        }
                        
                        return false; // Same notification and less than 48 hours
                    } catch (e) {
                        return true; // Error parsing, show it to be safe
                    }
                }
                
                // Show popup if conditions are met
                if (shouldShowPopup()) {
                    setTimeout(function() {
                        const modal = new bootstrap.Modal(modalElement);
                        modal.show();
                    }, 500);
                }
                
                // Store timestamp when popup is closed
                modalElement.addEventListener('hidden.bs.modal', function() {
                    const closeData = {
                        notificationId: popupNotificationId,
                        timestamp: Date.now()
                    };
                    localStorage.setItem('popupNotificationClosed', JSON.stringify(closeData));
                });
            });
        </script>
    @endif
    
    @stack('scripts')
</body>
</html>