{{-- resources/views/layouts/header.blade.php --}}
<header class="relative overflow-hidden" x-data="{ mobileMenu: false, scrolled: false }"
        @scroll.window="scrolled = window.scrollY > 100">

    {{-- Floating Animated Background Particles (optional magic) --}}
    <div class="fixed inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-96 h-96 bg-red-600/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    {{-- LAYER 1 – Electric Red Top Bar with Animated Shine --}}
    <div class="relative bg-gradient-to-r from-red-700 via-red-600 to-rose-700 text-white">
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent translate-x-[-100%] animate-[shine_8s_infinite]"></div>
        <div class="container mx-auto px-4 py-3 flex flex-wrap items-center justify-between text-sm font-bold">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-3 animate-pulse">
                    <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                    <span>24/7 Live Support</span>
                </div>
                <a href="tel:+61400000000" class="hover:text-yellow-300 transition flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    +61 400 000 000
                </a>
                <a href="mailto:info@confidencetraininginstitute.com.au" class="hover:text-yellow-300 transition">
                    info@confidencetraininginstitute.com.au
                </a>
            </div>
            <div class="flex gap-3">
                <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur hover:bg-yellow-400 hover:text-black transition transform hover:rotate-12 hover:scale-125">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur hover:bg-yellow-400 hover:text-black transition transform hover:rotate-12 hover:scale-125">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur hover:bg-yellow-400 hover:text-black transition transform hover:rotate-12 hover:scale-125">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- LAYER 2 – HERO LOGO ZONE (Absolutely Insane) --}}
    <div class="relative from-white via-gray-50/50 to-white " style="background: #c3ecfb;">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-8">
                   <a href="{{ url('/public') }}"><img src="{{ asset('img/logo.png') }}" alt="Confidence Training Institute"></a>
                </div>

                <!-- Floating CTA Button -->
                <a href="#enrol" class="relative group hidden md:block">
                    <div class="absolute -inset-2 bg-gradient-to-r from-red-600 to-yellow-500 rounded-full blur-lg group-hover:blur-2xl transition"></div>
                    <div class="relative bg-gradient-to-r from-red-600 to-rose-600 text-white px-12 py-1 rounded-full font-black text-2xl shadow-2xl transform group-hover:scale-110 transition-all duration-500 flex items-center gap-4">
                    Certificates
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center animate-bounce">
                            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- LAYER 3 – Futuristic Navigation with Glowing Hover --}}
    <div style="background:linear-gradient(90deg, #11a9b6 0%, #24748D 100%);" class="sticky top-0 from-[#037136] via-emerald-700 to-[#037136] shadow-2xl" :class="scrolled ? 'py-0' : 'py-0'" transition-all>
        <div class="container mx-auto px-4">
            <nav class="flex items-center justify-center">
                <ul class="hidden lg:flex items-center gap-2 text-white font-black text-lg uppercase tracking-widest">
                    @php $links = ['Home', 'About', 'Courses', 'Gallery', 'News', 'Student Portal', 'Contact']; @endphp
                    @foreach($links as $link)
                        <li>
                            <a href="#" class="relative px-8 py-5 block overflow-hidden group">
                                <span class="relative z-10">{{ $link }}</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-red-600 translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                                <div class="absolute inset-0 bg-white/20 backdrop-blur group-hover:backdrop-blur-lg transition"></div>
                            </a>
                        </li>
                    @endforeach
                </ul>

                <!-- Mobile Menu -->
                <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-white p-4">
                    <svg class="w-10 h-10" :class="mobileMenu ? 'hidden' : 'block'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg class="w-10 h-10" :class="mobileMenu ? 'block' : 'hidden'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </nav>
        </div>

        <!-- Full-Screen Mobile Menu (CINEMATIC) -->
        <div x-show="mobileMenu" x-transition.opacity class="fixed inset-0 bg-black/95 backdrop-blur-2xl z-50 flex items-center justify-center">
            <ul class="text-center space-y-8 text-5xl font-black text-white">
                @foreach(['Home', 'About', 'Courses', 'Gallery', 'News', 'Student Portal', 'Contact', 'ENROL NOW'] as $item)
                    <li><a href="#" class="block hover:text-red-500 transition duration-500 transform hover:scale-125">{{ $item }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</header>

{{-- Add these animations to your app.css --}}
<style>
@keyframes shine { 0% { transform: translateX(-100%) } 100% { transform: translateX(100%) } }
@keyframes tilt { 0%, 100% { transform: rotate(-3deg) } 50% { transform: rotate(3deg) } }
@keyframes gradient { 0% { background-position: 0% 50% } 50% { background-position: 100% 50% } 100% { background-position: 0% 50% } }
.animate-gradient { background-size: 200%; animation: gradient 8s ease infinite; }
.animate-tilt { animation: tilt 10s infinite linear; }
</style>