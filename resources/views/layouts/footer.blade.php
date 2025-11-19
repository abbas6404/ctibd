<footer class="relative bg-gradient-to-b from-gray-900 via-black to-gray-900 text-white overflow-hidden" 
style="background-image: linear-gradient(rgba(0, 0, 0, 0.91),rgba(0, 0, 0, 0.95)),
           url('https://montagebd.com/public/welcome/images/footer-bg-3.png');">
    <!-- Background Decoration -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-600 rounded-full blur-3xl"></div>
    </div>

    <div class="relative container mx-auto px-6 pt-20 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            <!-- Company Info + Logo -->
            <div class="lg:col-span-1">
                <div class="flex items-center mb-8">
                    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white font-bold text-2xl w-16 h-16 rounded-2xl flex items-center justify-center shadow-2xl">
                        CTI
                    </div>
                    <div class="ml-4">
                        <h3 class="text-2xl font-extrabold">Confidence</h3>
                        <p class="text-blue-400 font-semibold -mt-1">Training Institute</p>
                    </div>
                </div>

                <p class="text-gray-400 leading-relaxed mb-8">
                    Nationally Recognised Training (RTO 45678) delivering career-focused qualifications across Australia since 2005.
                </p>

                <!-- Trust Badge -->
                <div class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-xl px-5 py-3 w-fit">
                    <i class="fas fa-shield-alt text-green-400 text-xl"></i>
                    <span class="text-sm font-medium">Registered Training Organisation</span>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-xl font-bold mb-8 text-blue-400">Quick Links</h4>
                <ul class="space-y-4">
                    @php $links = ['Home', 'About Us', 'All Courses', 'Student Portal', 'Gallery', 'News & Events', 'Contact']; @endphp
                    @foreach($links as $link)
                        <li>
                            <a href="#" class="text-gray-400 hover:text-white transition flex items-center group">
                                <span class="w-8 h-px bg-gray-600 group-hover:bg-blue-500 transition"></span>
                                <span class="ml-3">{{ $link }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Popular Courses -->
            <div>
                <h4 class="text-xl font-bold mb-8 text-blue-400">Popular Courses</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Certificate III in Business</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Cert IV in Leadership & Management</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Diploma of Project Management</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Advanced Diploma of IT</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Short Professional Courses</a></li>
                </ul>
            </div>

            <!-- Contact & Social -->
            <div>
                <h4 class="text-xl font-bold mb-8 text-blue-400">Get in Touch</h4>
                <ul class="space-y-5 mb-10">
                    <li class="flex items-start text-gray-400">
                        <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-4 text-lg"></i>
                        <span>123 Education Street<br>Sydney NSW 2000, Australia</span>
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-phone-alt text-blue-400 mr-4 text-lg"></i>
                        <span>+61 400 000 000</span>
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-envelope text-blue-400 mr-4 text-lg"></i>
                        <span>info@confidencetraining<br>.com.au</span>
                    </li>
                </ul>

                <!-- Social Icons -->
                <div class="flex space-x-4">
                    @foreach(['facebook-f', 'instagram', 'linkedin-in', 'twitter'] as $icon)
                        <a href="#" class="w-12 h-12 bg-white/10 hover:bg-blue-600 rounded-full flex items-center justify-center transition transform hover:scale-110 hover:-translate-y-1 backdrop-blur-sm border border-white/20">
                            <i class="fab fa-{{ $icon }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm">
                <p class="text-gray-500 mb-4 md:mb-0">
                    © {{ date('Y') }} <span class="text-blue-400 font-semibold">Confidence Training Institute</span> • RTO 45678 • All Rights Reserved
                </p>
                <div class="flex space-x-8">
                    <a href="#" class="text-gray-500 hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="text-gray-500 hover:text-white transition">Terms & Conditions</a>
                    <a href="#" class="text-gray-500 hover:text-white transition">Student Handbook</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Accent Line -->
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600"></div>
</footer>