<header class="position-relative overflow-hidden" x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 100">
    <div style="position:fixed; inset:0; pointer-events:none;">
        <div style="position:absolute; top:2.5rem; left:2.5rem; width:24rem; height:24rem; background:rgba(220,38,38,0.2); border-radius:9999px; filter:blur(48px); animation:pulse 2s infinite;"></div>
        <div style="position:absolute; bottom:5rem; right:5rem; width:24rem; height:24rem; background:rgba(37,99,235,0.2); border-radius:9999px; filter:blur(48px); animation:pulse 2s infinite; animation-delay:1s;"></div>
    </div>

    <div class="position-relative text-white" style="background:linear-gradient(to right, #b91c1c, #dc2626, #be123c);">
        <div style="position:absolute; inset:0; background:linear-gradient(to right, transparent, rgba(255,255,255,0.1), transparent); transform:translateX(-100%); animation:shine 8s infinite;"></div>
        <div class="container px-4 py-2 d-flex align-items-center justify-content-between">
            <div class="ticker-wrap" style="flex:1; margin-right:1rem;">
                <div class="ticker">
                    <span class="ticker-item live-support"><span class="dot"></span>24/7 Live Support</span>
                    <span class="ticker-item">+61 400 000 000</span>
                    <span class="ticker-item">info@confidencetraininginstitute.com.au</span>
                </div>
            </div>
            <div class="d-flex gap-2">
                <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center text-white" style="width:36px; height:36px; background:rgba(255,255,255,0.2); backdrop-filter:blur(6px); transition:all .2s;"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center text-white" style="width:36px; height:36px; background:rgba(255,255,255,0.2); backdrop-filter:blur(6px); transition:all .2s;"><i class="fab fa-instagram"></i></a>
                <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center text-white" style="width:36px; height:36px; background:rgba(255,255,255,0.2); backdrop-filter:blur(6px); transition:all .2s;"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <div class="position-relative" style="background:#c3ecfb;">
        <div class="container px-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <a href="{{ url('/public') }}"><img src="{{ asset('img/logo.png') }}" alt="Confidence Training Institute"></a>
                </div>
                <div class="text-center d-none d-md-block" style="line-height:1.4;">
                    <div class="live-support" style="font-weight:900; font-size:1rem;"><span class="dot"></span>24/7 Live Support</div>
                    <div style="font-weight:700; font-size:1rem;">+61 400 000 000</div>
                    <div style="font-weight:700; font-size:1rem;">info@confidencetraininginstitute.com.au</div>
                </div>
                <a href="{{ route('certificates') }}" class="cta-btn d-none d-md-inline-flex align-items-center" style="text-decoration:none;">
                    <span class="cta-text">Certificates</span>
                    <span class="cta-icon"><i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>

    <div class="sticky-top" style="z-index:1020; background:linear-gradient(90deg, #11a9b6 0%, #24748D 100%); box-shadow:0 4px 6px rgba(0,0,0,.1);" :class="scrolled ? 'py-0' : 'py-0'">
        <div class="container px-4">
            <nav class="d-flex align-items-center justify-content-center py-1" >
                <ul style="margin: 0px;" class="d-none d-lg-flex align-items-center text-white fw-bold text-uppercase list-unstyled" style="letter-spacing:.2rem; gap:.5rem;">
                    <li style="margin:5px;">
                        <a href="{{ route('home') }}" class="nav-link"><span class="nav-text">Home</span></a>
                    </li>
                    <li style="margin:5px;">
                        <a href="{{ route('about') }}" class="nav-link"><span class="nav-text">About</span></a>
                    </li>
                    <li style="margin:5px;">
                        <a href="{{ route('courses') }}" class="nav-link"><span class="nav-text">Courses</span></a>
                    </li>
                    <li style="margin:5px;">
                        <a href="{{ route('gallery') }}" class="nav-link"><span class="nav-text">Gallery</span></a>
                    </li>
                    <li style="margin:5px;">
                        <a href="{{ route('management') }}" class="nav-link"><span class="nav-text">Management</span></a>
                    </li>
                    <li style="margin:5px;">
                        <a href="{{ route('admission') }}" class="nav-link"><span class="nav-text">Admission</span></a>
                    </li>
                    <li style="margin:5px;">
                        <a href="{{ route('notification') }}" class="nav-link"><span class="nav-text">Notifications</span></a>
                    </li>
                    <li style="margin:5px;">
                        <a href="{{ route('contact') }}" class="nav-link"><span class="nav-text">Contact</span></a>
                    </li>
                </ul>
                <button @click="mobileMenu = !mobileMenu" class="d-lg-none text-white p-4" style="background:none; border:none;">
                    <svg style="width:40px; height:40px; display: inline;" :style="mobileMenu ? 'display:none' : 'display:inline'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg style="width:40px; height:40px; display: none;" :style="mobileMenu ? 'display:inline' : 'display:none'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </nav>
        </div>
        <div x-show="mobileMenu" x-transition.opacity style="position:fixed; inset:0; background:rgba(0,0,0,0.95); backdrop-filter:blur(20px); z-index:1050; display:flex; align-items:center; justify-content:center;">
            <ul style="text-align:center; color:white; font-weight:900; font-size:3rem; list-style:none; padding:0; margin:0;">
                <li style="margin-bottom:2rem;"><a href="{{ route('home') }}" style="color:white; text-decoration:none; transition:all .5s;">Home</a></li>
                <li style="margin-bottom:2rem;"><a href="{{ route('about') }}" style="color:white; text-decoration:none; transition:all .5s;">About</a></li>
                <li style="margin-bottom:2rem;"><a href="{{ route('courses') }}" style="color:white; text-decoration:none; transition:all .5s;">Courses</a></li>
                <li style="margin-bottom:2rem;"><a href="{{ route('gallery') }}" style="color:white; text-decoration:none; transition:all .5s;">Gallery</a></li>
                <li style="margin-bottom:2rem;"><a href="{{ route('management') }}" style="color:white; text-decoration:none; transition:all .5s;">Management</a></li>
                <li style="margin-bottom:2rem;"><a href="{{ route('admission') }}" style="color:white; text-decoration:none; transition:all .5s;">Admission</a></li>
                <li style="margin-bottom:2rem;"><a href="{{ route('notification') }}" style="color:white; text-decoration:none; transition:all .5s;">Notifications</a></li>
                <li style="margin-bottom:2rem;"><a href="{{ route('contact') }}" style="color:white; text-decoration:none; transition:all .5s;">Contact</a></li>
                <li style="margin-bottom:2rem;"><a href="#" style="color:white; text-decoration:none; transition:all .5s;">ENROL NOW</a></li>
            </ul>
        </div>
    </div>
</header>
<style>
@keyframes shine { 0% { transform: translateX(-100%) } 100% { transform: translateX(100%) } }
@keyframes pulse { 0%, 100% { opacity: .9 } 50% { opacity: .6 } }
@keyframes bounce { 0%, 100% { transform: translateY(0) } 50% { transform: translateY(-6px) } }
.nav-anim:hover > div:first-of-type { transform: translateY(0); }
.nav-link { position:relative; display:block; padding:.6rem 1.5rem; color:#fff; text-decoration:none; border-radius:.75rem; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.25); backdrop-filter:blur(6px); transition:transform .25s, box-shadow .25s, background .25s; }
.nav-link:hover { transform:translateY(-1px); background:rgba(255,255,255,0.18); box-shadow:0 8px 18px rgba(0,0,0,.15); }
.nav-link::after { content:""; position:absolute; left:0; right:0; bottom:-8px; height:3px; background:linear-gradient(90deg, #f59e0b, #dc2626); transform:scaleX(0); transform-origin:center; transition:transform .3s; border-radius:6px; }
.nav-link:hover::after, .nav-link.active::after { transform:scaleX(1); }
.nav-text { position:relative; z-index:1; letter-spacing:.08em; font-weight:700; font-size:.95rem; }
.ticker-wrap { overflow: hidden; position: relative; height: 24px; }
.ticker { display: inline-block; white-space: nowrap; animation: ticker 20s linear infinite; }
.ticker-item { display: inline-block; margin-right: 2rem; color: #fff; opacity: .9; }
@keyframes ticker { 0% { transform: translateX(100%) } 100% { transform: translateX(-100%) } }
.live-support { animation: glow 3s ease-in-out infinite; }
.live-support .dot { width:10px; height:10px; background:#22c55e; border-radius:9999px; display:inline-block; margin-right:.5rem; animation:pulse 1.6s infinite; }
@keyframes glow { 0% { text-shadow: 0 0 0 rgba(34,197,94,0) } 50% { text-shadow: 0 0 12px rgba(34,197,94,.7) } 100% { text-shadow: 0 0 0 rgba(34,197,94,0) } }
/* Eye-catching animated gradient across full text */
.live-support { 
    background: linear-gradient(90deg, #13A4B2, #007235, #13A4B2);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    background-size: 200% 100%;
    animation: glow 3s ease-in-out infinite, gradientShift 4s linear infinite;
}
@keyframes gradientShift { 0% { background-position: 0% 50% } 100% { background-position: 100% 50% } }
.cta-btn { position:relative; padding:.6rem 2.75rem; border-radius:9999px; background:linear-gradient(90deg, #dc2626, #be123c); color:#fff; font-weight:800; font-size:1.25rem; box-shadow:0 12px 30px rgba(220,38,38,.35); transition:transform .25s, box-shadow .25s, background-position .25s; background-size:200% 100%; animation:waterFlow 8s linear infinite; }
.cta-btn::before { content:""; position:absolute; inset:-10px; border-radius:9999px; background:radial-gradient(closest-side, rgba(245,158,11,.35), transparent); filter:blur(10px); opacity:.7; transition:opacity .25s; }
.cta-btn:hover { transform:translateY(-2px); box-shadow:0 20px 40px rgba(220,38,38,.45); background-position:100% 50%; }
.cta-btn:hover::before { opacity:1; }
.cta-text { letter-spacing:.02em; }
.cta-icon { display:inline-flex; align-items:center; justify-content:center; width:42px; height:42px; border-radius:9999px; background:linear-gradient(135deg, #f59e0b, #fbbf24); color:#111827; margin-left:1rem; box-shadow:0 8px 18px rgba(245,158,11,.35); transition:transform .25s; animation:iconWave 3s ease-in-out infinite; }
.cta-icon i { font-size:1.1rem; }
.cta-btn:hover .cta-icon { transform:translateX(6px) rotate(8deg); }
.cta-btn::after { content:""; position:absolute; top:0; left:-40%; width:40%; height:100%; border-radius:9999px; background:linear-gradient(90deg, rgba(255,255,255,0), rgba(255,255,255,.25), rgba(255,255,255,0)); transform:skewX(-20deg); animation:ctaShine 3s ease-in-out infinite; }
@keyframes ctaShine { 0% { left:-40% } 50% { left:100% } 100% { left:100% } }
@keyframes waterFlow { 0% { background-position: 0% 50% } 50% { background-position: 100% 50% } 100% { background-position: 0% 50% } }
@keyframes iconWave { 0% { transform: translateX(0) rotate(0) } 50% { transform: translateX(6px) rotate(6deg) } 100% { transform: translateX(0) rotate(0) } }
.cta-ripple { position:absolute; border-radius:50%; transform:scale(0); opacity:.5; background:radial-gradient(closest-side, rgba(255,255,255,.6), rgba(255,255,255,0)); animation:ripple .6s ease-out forwards; pointer-events:none; }
@keyframes ripple { to { transform:scale(2.5); opacity:0 } }
</style>
<script>
document.addEventListener('DOMContentLoaded',function(){document.querySelectorAll('.cta-btn').forEach(function(b){b.addEventListener('click',function(e){var r=b.getBoundingClientRect();var s=Math.max(r.width,r.height);var d=document.createElement('span');d.className='cta-ripple';d.style.width=s+'px';d.style.height=s+'px';d.style.left=e.clientX-r.left-s/2+'px';d.style.top=e.clientY-r.top-s/2+'px';b.appendChild(d);setTimeout(function(){d.remove()},600);});});});
</script></style>
