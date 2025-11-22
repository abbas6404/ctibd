@extends('layouts.app')

@section('content')
<style>
    /* Mobile-friendly styles for certificate page */
    @media (max-width: 768px) {
        .certificate-section {
            margin-top: 2rem !important;
            margin-bottom: 2rem !important;
        }
        .certificate-card {
            padding: 1.5rem !important;
            border-radius: 1rem !important;
        }
        .certificate-title {
            font-size: 1.5rem !important;
        }
        .certificate-icon {
            width: 60px !important;
            height: 60px !important;
        }
        .certificate-icon i {
            font-size: 1.5rem !important;
        }
        .certificate-input {
            font-size: 1rem !important;
            padding: 0.75rem 1rem !important;
        }
        .certificate-btn {
            font-size: 1rem !important;
            padding: 0.75rem 1.5rem !important;
            width: 100%;
        }
        .certificate-preview-container {
            min-height: 400px !important;
            padding: 0.5rem !important;
        }
        .certificate-preview-container iframe {
            height: 400px !important;
        }
        .certificate-info-card {
            padding: 1rem !important;
        }
        .certificate-info-card .row {
            margin: 0;
        }
        .certificate-info-card .col-md-6 {
            margin-bottom: 1rem;
        }
    }
    @media (max-width: 576px) {
        .certificate-section {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }
        .certificate-card {
            padding: 1rem !important;
        }
        .certificate-title {
            font-size: 1.25rem !important;
        }
        .certificate-preview-container {
            min-height: 300px !important;
        }
        .certificate-preview-container iframe {
            height: 300px !important;
        }
    }
</style>

<!-- Certificate Display Section -->
<section id="certificateDisplay" class="py-5 certificate-section" style="margin-top: 4rem; margin-bottom: 4rem; {{ $certificate ? 'display: block;' : 'display: none;' }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="p-5 rounded-3 certificate-card" style="background: white; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-radius: 2rem;">
                    <div class="text-center mb-4">
                        <div class="certificate-icon" style="background: #006F3F; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-certificate" style="font-size: 2rem;"></i>
                        </div>
                        <h3 class="certificate-title" style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                            Certificate Found
                        </h3>
                    </div>
                    
                    <div class="mb-4 p-4 certificate-info-card" style="background: #f8f9fa; border-radius: 1rem;">
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-family: 'Inter', sans-serif; color: #374151; margin-bottom: 0.5rem;">
                                    <strong>Registration Number:</strong>
                                </p>
                                <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600;">{{ $certificate->registration_id ?? '' }}</p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-family: 'Inter', sans-serif; color: #374151; margin-bottom: 0.5rem;">
                                    <strong>Issue Date:</strong>
                                </p>
                                <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600;">{{ $certificate ? $certificate->created_at->format('F d, Y') : '-' }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Certificate Preview -->
                    @if($certificate)
                    <div class="mb-4 certificate-preview-container" style="background: #f8f9fa; border-radius: 1rem; padding: 1rem;">
                        <div style="background: white; border-radius: 0.5rem; overflow: hidden; min-height: 600px;">
                            @php
                                $fileExtension = strtolower(pathinfo($certificate->certificate_file, PATHINFO_EXTENSION));
                                $certificateUrl = asset('storage/' . $certificate->certificate_file);
                            @endphp
                            
                            @if($fileExtension === 'pdf')
                                <iframe 
                                    src="{{ $certificateUrl }}"
                                    style="width: 100%; height: 600px; border: none;"
                                    title="Certificate Preview">
                                </iframe>
                            @else
                                <img 
                                    src="{{ $certificateUrl }}"
                                    alt="Certificate Preview"
                                    style="width: 100%; height: auto; border-radius: 0.5rem; max-width: 100%;"
                                >
                            @endif
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <a 
                            href="{{ $certificateUrl }}"
                            download="CTIBD-Certificate-{{ $certificate->registration_id }}.pdf"
                            class="btn btn-lg px-5 py-3 certificate-btn" 
                            style="background: #006F3F; color: white; border-radius: 1rem; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 1.1rem; text-decoration: none; display: inline-block;"
                        >
                            <i class="fas fa-file-pdf me-2"></i>
                            Download PDF
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certificate Download Section -->
<section class="py-5 certificate-section" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="p-5 rounded-3 certificate-card" style="background: white; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-radius: 2rem;">
                    <form method="GET" action="{{ route('certificates') }}">
                        <div class="mb-4">
                            <label for="registration_id" class="form-label" style="font-family: 'Inter', sans-serif; font-weight: 600; color: #374151; font-size: 1.1rem;">
                                Registration Number
                            </label>
                            <input 
                                type="text" 
                                class="form-control certificate-input" 
                                id="registration_id" 
                                name="registration_id"
                                value="{{ old('registration_id', request('registration_id')) }}"
                                placeholder="Enter your registration number"
                                style="border: 2px solid #e5e7eb; border-radius: 1rem; padding: 1rem 1.5rem; font-family: 'Inter', sans-serif; font-size: 1.1rem;"
                                required
                            >
                        </div>
                        
                        <div class="text-center">
                            <button 
                                type="submit" 
                                class="btn btn-lg px-5 py-3 certificate-btn" 
                                style="background: linear-gradient(135deg, #dc2626 0%, #be123c 100%); color: white; border-radius: 1rem; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 1.1rem; box-shadow: 0 8px 25px rgba(220, 38, 38, 0.3);"
                            >
                                <i class="fas fa-download me-2"></i>
                                Download Certificate
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Error Section -->
<section id="errorSection" class="py-5 certificate-section" style="margin-bottom: 4rem; {{ $errorMessage ? 'display: block;' : 'display: none;' }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="p-5 rounded-3 text-center certificate-card" style="background: white; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-radius: 2rem;">
                    <div class="certificate-icon" style="background: #dc2626; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-exclamation-triangle" style="font-size: 2rem;"></i>
                    </div>
                    <h3 class="certificate-title" style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                        Certificate Not Found
                    </h3>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin-bottom: 2rem; font-size: 0.95rem;">
                        {{ $errorMessage ?? 'We couldn\'t find a certificate with that registration number.' }}
                    </p>
                    <a 
                        href="{{ route('certificates') }}"
                        class="btn btn-lg px-5 py-3 certificate-btn" 
                        style="background: #2563eb; color: white; border-radius: 1rem; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 1.1rem; text-decoration: none; display: inline-block;"
                    >
                        <i class="fas fa-redo me-2"></i>
                        Try Again
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll to top of page when certificate or error is shown
    @if($certificate || $errorMessage)
        setTimeout(() => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }, 100);
    @endif
});
</script>
@endsection
