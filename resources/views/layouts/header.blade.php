<header class="position-relative overflow-hidden">
    <div style="position:fixed; inset:0; pointer-events:none;">
        <div style="position:absolute; top:2.5rem; left:2.5rem; width:24rem; height:24rem; background:rgba(220,38,38,0.2); border-radius:9999px; filter:blur(48px); animation:pulse 2s infinite;"></div>
        <div style="position:absolute; bottom:5rem; right:5rem; width:24rem; height:24rem; background:rgba(37,99,235,0.2); border-radius:9999px; filter:blur(48px); animation:pulse 2s infinite; animation-delay:1s;"></div>
    </div>

    <div class="position-relative text-white" style="background:linear-gradient(to right, #b91c1c, #dc2626, #be123c);">
        <div class="container px-2 px-md-4 py-1 py-md-2">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="ticker-wrap p-0" style="flex:1; min-width:0; margin-right:0.5rem; order:1;">
                    <div class="ticker fs-5 p-0">
                        @php
                            $topNotification = \App\Models\Notification::where('type', 'top_notification')
                                ->latest()
                                ->first();
                        @endphp
                        @if($topNotification)
                               {{ $topNotification->title }}
                        @endif
                      
                    </div>
                </div>
                <div class="d-flex gap-1 gap-md-2 order-2" style="flex-shrink:0;">
                    <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-opacity-25" style="width:32px; height:32px; background:rgba(255,255,255,0.2); backdrop-filter:blur(6px);"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-opacity-25" style="width:32px; height:32px; background:rgba(255,255,255,0.2); backdrop-filter:blur(6px);"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-opacity-25" style="width:32px; height:32px; background:rgba(255,255,255,0.2); backdrop-filter:blur(6px);"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative" style="background:#c3ecfb;">
        <div class="container px-2 px-md-1 py-0 py-md-0">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div class="d-flex align-items-center" style="flex:0 0 auto;">
                    <a href="{{ url('/') }}" class="d-block"><img src="{{ asset('img/logo.png') }}" alt="Confidence Training Institute" class="img-fluid" style="height:clamp(70px, 12vw, 100px); width:auto;"></a>
                </div>
                <div class="text-center d-none d-md-block" style="line-height:1.4; flex:1; min-width:200px;">
                    <div class="live-support" style="font-weight:900; font-size:1rem;"><span class="dot"></span>24/7 Live Support</div>
                    <div style="font-weight:700; font-size:1rem;">+88 01724 361 141</div>
                    <div style="font-weight:700; font-size:1rem; word-break:break-word;">ikarimptc@gmail.com</div>
                </div>
                <a href="{{ route('certificates') }}" class="cta-btn d-none d-md-inline-flex align-items-center text-decoration-none" style="flex:0 0 auto;">
                    <span class="cta-text">Certificates</span>
                    <span class="cta-icon d-none d-md-inline-flex"><i class="bi bi-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>

    <div class="sticky-top shadow-sm" style="z-index:1020; background:linear-gradient(90deg, #11a9b6 0%, #24748D 100%);">
        <div class="container px-2 px-md-4">
            <nav class="navbar navbar-expand-lg navbar-dark py-1">
                <div class="container-fluid p-0 d-flex justify-content-between align-items-center w-100">
                    <!-- Certificates Button - Mobile Only (Left Side) -->
                    <a href="{{ route('certificates') }}" class="cta-btn d-md-none d-inline-flex align-items-center text-decoration-none">
                        <span class="cta-text">Certificates</span>
                    </a>
                    
                    <!-- Desktop Navigation Menu -->
                    <ul class="d-none d-lg-flex navbar-nav align-items-center text-white fw-bold text-uppercase list-unstyled mb-0 mx-auto" style="letter-spacing:.2rem; gap:.5rem;">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') || request()->is('/') ? 'active' : '' }}"><span class="nav-text">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') || request()->is('about') ? 'active' : '' }}"><span class="nav-text">About</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('courses') }}" class="nav-link {{ request()->routeIs('courses') || request()->routeIs('course-detail') || request()->is('courses') || request()->is('course-detail') ? 'active' : '' }}"><span class="nav-text">Courses</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gallery') }}" class="nav-link {{ request()->routeIs('gallery') || request()->is('gallery') ? 'active' : '' }}"><span class="nav-text">Gallery</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('management') }}" class="nav-link {{ request()->routeIs('management') || request()->is('management') ? 'active' : '' }}"><span class="nav-text">Management</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admission') }}" class="nav-link {{ request()->routeIs('admission') || request()->is('admission') ? 'active' : '' }}"><span class="nav-text">Admission</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('notification') }}" class="nav-link {{ request()->routeIs('notification') || request()->is('notification') ? 'active' : '' }}"><span class="nav-text">Notifications</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') || request()->is('contact') ? 'active' : '' }}"><span class="nav-text">Contact</span></a>
                        </li>
                    </ul>
                    
                    <!-- Mobile Toggle Button - Right Side -->
                    <button class="navbar-toggler d-lg-none border-0 p-2 ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </div>
    </div>
    
    <!-- Bootstrap Offcanvas for Mobile Menu -->
    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header border-bottom border-secondary">
            <h5 class="offcanvas-title text-white fw-bold" id="mobileMenuLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled text-center mb-0">
                <li class="mb-3"><a href="{{ route('home') }}" class="text-white text-decoration-none fw-bold mobile-menu-link {{ request()->routeIs('home') || request()->is('/') ? 'active' : '' }}" style="font-size:clamp(1.5rem, 4vw, 2rem); display:block; padding:0.5rem;">Home</a></li>
                <li class="mb-3"><a href="{{ route('about') }}" class="text-white text-decoration-none fw-bold mobile-menu-link {{ request()->routeIs('about') || request()->is('about') ? 'active' : '' }}" style="font-size:clamp(1.5rem, 4vw, 2rem); display:block; padding:0.5rem;">About</a></li>
                <li class="mb-3"><a href="{{ route('courses') }}" class="text-white text-decoration-none fw-bold mobile-menu-link {{ request()->routeIs('courses') || request()->routeIs('course-detail') || request()->is('courses') || request()->is('course-detail') ? 'active' : '' }}" style="font-size:clamp(1.5rem, 4vw, 2rem); display:block; padding:0.5rem;">Courses</a></li>
                <li class="mb-3"><a href="{{ route('gallery') }}" class="text-white text-decoration-none fw-bold mobile-menu-link {{ request()->routeIs('gallery') || request()->is('gallery') ? 'active' : '' }}" style="font-size:clamp(1.5rem, 4vw, 2rem); display:block; padding:0.5rem;">Gallery</a></li>
                <li class="mb-3"><a href="{{ route('management') }}" class="text-white text-decoration-none fw-bold mobile-menu-link {{ request()->routeIs('management') || request()->is('management') ? 'active' : '' }}" style="font-size:clamp(1.5rem, 4vw, 2rem); display:block; padding:0.5rem;">Management</a></li>
                <li class="mb-3"><a href="{{ route('admission') }}" class="text-white text-decoration-none fw-bold mobile-menu-link {{ request()->routeIs('admission') || request()->is('admission') ? 'active' : '' }}" style="font-size:clamp(1.5rem, 4vw, 2rem); display:block; padding:0.5rem;">Admission</a></li>
                <li class="mb-3"><a href="{{ route('notification') }}" class="text-white text-decoration-none fw-bold mobile-menu-link {{ request()->routeIs('notification') || request()->is('notification') ? 'active' : '' }}" style="font-size:clamp(1.5rem, 4vw, 2rem); display:block; padding:0.5rem;">Notifications</a></li>
                <li class="mb-3"><a href="{{ route('contact') }}" class="text-white text-decoration-none fw-bold mobile-menu-link {{ request()->routeIs('contact') || request()->is('contact') ? 'active' : '' }}" style="font-size:clamp(1.5rem, 4vw, 2rem); display:block; padding:0.5rem;">Contact</a></li>
                <li class="mt-4"><a href="{{ route('certificates') }}" class="btn btn-danger rounded-pill px-4 py-2 fw-bold mobile-menu-link {{ request()->routeIs('certificates') || request()->is('certificates') ? 'active' : '' }}" style="font-size:clamp(1rem, 3vw, 1.25rem);">Certificates</a></li>
            </ul>
        </div>
    </div>
</header>
<style>
/* Essential animations only */
@keyframes ticker { 0% { transform: translateX(100%) } 100% { transform: translateX(-100%) } }
@keyframes pulse { 0%, 100% { opacity: .9 } 50% { opacity: .6 } }

/* Navigation links - simplified with Bootstrap utilities */
.nav-link { 
    position:relative; 
    padding:.5rem 1rem; 
    color:#fff !important; 
    text-decoration:none; 
    border-radius:.75rem; 
    background:rgba(255,255,255,0.12); 
    border:1px solid rgba(255,255,255,0.25); 
    transition:all .25s; 
}
.nav-link:hover { 
    background:rgba(255,255,255,0.18); 
    transform:translateY(-1px); 
}
.nav-link.active {
    background:rgba(255,255,255,0.35) !important;
    border-color:rgba(255,255,255,0.6) !important;
    box-shadow:0 4px 16px rgba(255,255,255,0.3), inset 0 0 20px rgba(245,158,11,0.2);
    transform:translateY(-1px);
}
.nav-link.active .nav-text {
    color:#fff !important;
    text-shadow:0 0 8px rgba(255,255,255,0.5);
}
.nav-link.active::after {
    content:"";
    position:absolute;
    left:0;
    right:0;
    bottom:-8px;
    height:4px;
    background:linear-gradient(90deg, #f59e0b, #dc2626);
    transform:scaleX(1);
    transform-origin:center;
    border-radius:6px;
    box-shadow:0 2px 8px rgba(245,158,11,0.6);
}
.nav-text { 
    font-size:.85rem; 
    font-weight:700; 
    letter-spacing:.08em; 
}
@media (min-width: 992px) {
    .nav-link { padding:.6rem 1.5rem; }
    .nav-text { font-size:1rem; }
}

/* Ticker animation */
.ticker-wrap { overflow:hidden; height:24px; }
.ticker { display:inline-block; white-space:nowrap; animation:ticker 20s linear infinite; }
.ticker-item { display:inline-block; margin-right:2rem; font-size:.875rem; }
.ticker-item.notification-item {
    animation:pulse 2s infinite;
    font-size:1.2rem;
}
@media (max-width: 576px) {
    .ticker-wrap { height:20px; }
    .ticker-item { font-size:.7rem; margin-right:1.5rem; }
    .ticker-item.notification-item { padding:0.2rem 0.5rem; }
}
@media (min-width: 768px) {
    .ticker-item { font-size:.9rem; }
}

/* Live support dot */
.live-support .dot { 
    width:10px; 
    height:10px; 
    background:#22c55e; 
    border-radius:50%; 
    display:inline-block; 
    margin-right:.5rem; 
    animation:pulse 1.6s infinite; 
}

/* CTA Button - with animations */
.cta-btn { 
    position:relative; 
    padding:.5rem 1.5rem; 
    border-radius:9999px; 
    background:linear-gradient(90deg, #dc2626, #be123c); 
    background-size:200% 100%; 
    color:#fff; 
    font-weight:800; 
    font-size:1rem; 
    box-shadow:0 12px 30px rgba(220,38,38,.35); 
    transition:all .25s; 
    white-space:nowrap;
    animation:waterFlow 8s linear infinite;
    overflow:hidden;
}
@media (min-width: 768px) {
    .cta-btn { padding:.6rem 2.75rem; font-size:1.25rem; }
}
.cta-btn:hover { 
    transform:translateY(-2px); 
    box-shadow:0 20px 40px rgba(220,38,38,.45); 
    background-position:100% 50%;
}
.cta-btn::before {
    content:"";
    position:absolute;
    inset:-10px;
    border-radius:9999px;
    background:radial-gradient(closest-side, rgba(245,158,11,.35), transparent);
    filter:blur(10px);
    opacity:.7;
    transition:opacity .25s;
    z-index:-1;
}
.cta-btn:hover::before {
    opacity:1;
}
.cta-btn::after {
    content:"";
    position:absolute;
    top:0;
    left:-40%;
    width:40%;
    height:100%;
    border-radius:9999px;
    background:linear-gradient(90deg, rgba(255,255,255,0), rgba(255,255,255,.25), rgba(255,255,255,0));
    transform:skewX(-20deg);
    animation:ctaShine 3s ease-in-out infinite;
}
.cta-icon { 
    display:inline-flex; 
    align-items-center; 
    justify-content:center; 
    width:42px; 
    height:42px; 
    border-radius:50%; 
    background:linear-gradient(135deg, #f59e0b, #fbbf24); 
    color:#111827; 
    margin-left:1rem; 
    box-shadow:0 8px 18px rgba(245,158,11,.35); 
    transition:transform .25s;
    animation:iconWave 3s ease-in-out infinite;
    position:relative;
    z-index:1;
}
.cta-btn:hover .cta-icon {
    transform:translateX(6px) rotate(8deg);
}
@keyframes waterFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
@keyframes ctaShine {
    0% { left:-40%; }
    50% { left:100%; }
    100% { left:100%; }
}
@keyframes iconWave {
    0%, 100% { transform: translateX(0) rotate(0); }
    50% { transform: translateX(6px) rotate(6deg); }
}
@media (max-width: 767px) {
    .cta-btn { 
        padding:.5rem 1rem; 
        font-size:.875rem; 
    }
    .cta-icon {
        width:36px;
        height:36px;
        margin-left:.75rem;
    }
}

/* Navbar toggler white icon */
.navbar-toggler-icon { 
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); 
}

/* Mobile menu active state */
.mobile-menu-link.active {
    color:#fbbf24 !important;
    text-shadow:0 0 12px rgba(251,191,36,0.8), 0 0 20px rgba(245,158,11,0.4);
    position:relative;
    background:rgba(251,191,36,0.15) !important;
    border-radius:0.5rem;
}
.mobile-menu-link.active::before {
    content:"";
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    bottom:0;
    width:60%;
    height:4px;
    background:linear-gradient(90deg, #f59e0b, #dc2626);
    border-radius:6px;
    box-shadow:0 2px 8px rgba(245,158,11,0.6);
}
.mobile-menu-link.active.btn {
    background:linear-gradient(90deg, #f59e0b, #dc2626) !important;
    box-shadow:0 8px 24px rgba(245,158,11,0.6), inset 0 0 20px rgba(255,255,255,0.2);
    transform:scale(1.05);
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');
    const mobileMenu = document.getElementById('mobileMenu');
    
    mobileMenuLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            const offcanvas = bootstrap.Offcanvas.getInstance(mobileMenu);
            if (offcanvas) {
                offcanvas.hide();
            }
        });
    });
});
</script>
