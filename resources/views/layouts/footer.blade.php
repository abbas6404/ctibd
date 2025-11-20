<footer class="position-relative text-white overflow-hidden" style="background-image: linear-gradient(rgba(0,0,0,0.91), rgba(0,0,0,0.95)), url('https://montagebd.com/public/welcome/images/footer-bg-3.png');">
    <div style="position:absolute; inset:0; opacity:.1;">
        <div style="position:absolute; top:0; left:0; width:24rem; height:24rem; background:#3b82f6; border-radius:2rem; filter:blur(48px);"></div>
        <div style="position:absolute; bottom:0; right:0; width:24rem; height:24rem; background:#9333ea; border-radius:2rem; filter:blur(48px);"></div>
    </div>
    <div class="position-relative container px-3 pt-5 pb-4">
        <div class="row g-4 mb-4">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="d-flex align-items-center mb-3">
                    <img  src="{{ asset('img/logo.png') }}" alt="Confidence Training Institute" style="height:64px; width:auto; border-radius:.75rem; box-shadow:0 20px 40px rgba(22, 22, 22, 0.4); background:#fff;">
                 
                </div>
                <p style="color:#9ca3af; line-height:1.7; margin-bottom:1rem;">Nationally Recognised Training (RTO 45678) delivering career-focused qualifications across Australia since 2005.</p>
                <div class="d-flex align-items-center" style="gap:.5rem; background:rgba(255,255,255,0.1); backdrop-filter:blur(6px); border-radius:.75rem; padding:.5rem 1rem; width:fit-content;">
                    <i class="fas fa-shield-alt" style="color:#22c55e; font-size:1.25rem;"></i>
                    <span class="small">Registered Training Organisation</span>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h4 class="fw-bold mb-3" style="color:#60a5fa; font-size:1.25rem;">Quick Links</h4>
                <ul class="list-unstyled m-0 p-0">
                    @php $links = ['Home', 'About Us', 'All Courses', 'Student Portal', 'Gallery', 'News & Events', 'Contact']; @endphp
                    @foreach($links as $link)
                        <li class="mb-2">
                            <a href="#" class="d-flex align-items-center" style="color:#9ca3af; text-decoration:none; transition:color .2s;">
                                <span style="display:inline-block; width:32px; height:1px; background:#4b5563; margin-right:.75rem;"></span>
                                <span>{{ $link }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h4 class="fw-bold mb-3" style="color:#60a5fa; font-size:1.25rem;">Popular Courses</h4>
                <ul class="list-unstyled m-0 p-0">
                    <li class="mb-2"><a href="#" style="color:#9ca3af; text-decoration:none;">Certificate III in Business</a></li>
                    <li class="mb-2"><a href="#" style="color:#9ca3af; text-decoration:none;">Cert IV in Leadership & Management</a></li>
                    <li class="mb-2"><a href="#" style="color:#9ca3af; text-decoration:none;">Diploma of Project Management</a></li>
                    <li class="mb-2"><a href="#" style="color:#9ca3af; text-decoration:none;">Advanced Diploma of IT</a></li>
                    <li class="mb-2"><a href="#" style="color:#9ca3af; text-decoration:none;">Short Professional Courses</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h4 class="fw-bold mb-3" style="color:#60a5fa; font-size:1.25rem;">Get in Touch</h4>
                <ul class="list-unstyled m-0 p-0 mb-3">
                    <li class="d-flex align-items-start mb-2" style="color:#9ca3af;">
                        <i class="fas fa-map-marker-alt" style="color:#60a5fa; margin-right:.75rem; font-size:1rem; margin-top:.25rem;"></i>
                        <span>Sydney, NSW, Australia</span>
                    </li>
                    <li class="d-flex align-items-center mb-2" style="color:#9ca3af;">
                        <i class="fas fa-phone-alt" style="color:#60a5fa; margin-right:.75rem; font-size:1rem;"></i>
                        <span>+61 400 000 000</span>
                    </li>
                    <li class="d-flex align-items-center" style="color:#9ca3af;">
                        <i class="fas fa-envelope" style="color:#60a5fa; margin-right:.75rem; font-size:1rem;"></i>
                        <span>info@confidencetraininginstitute.com.au</span>
                    </li>
                </ul>
                <div class="d-flex" style="gap:.75rem;">
                    @foreach(['facebook-f', 'instagram', 'linkedin-in', 'twitter'] as $icon)
                        <a href="#" class="rounded-circle d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px; background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2); backdrop-filter:blur(6px); transition:all .2s;">
                            <i class="fab fa-{{ $icon }}" style="color:white;"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="border-top pt-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small">
                <p class="mb-3 mb-md-0" style="color:#6b7280;">
                    © {{ date('Y') }} <span class="fw-semibold" style="color:#60a5fa;">Confidence Training Institute</span> • RTO 45678 • All Rights Reserved
                </p>
                <div class="d-flex" style="gap:2rem;">
                    <a href="#" style="color:#6b7280; text-decoration:none;">Privacy Policy</a>
                    <a href="#" style="color:#6b7280; text-decoration:none;">Terms & Conditions</a>
                    <a href="#" style="color:#6b7280; text-decoration:none;">Student Handbook</a>
                </div>
            </div>
        </div>
    </div>
    <div style="position:absolute; bottom:0; left:0; right:0; height:4px; background:linear-gradient(to right, #2563eb, #7c3aed, #ec4899);"></div>
</footer>