@extends('layouts.app')

@section('content')
<!-- Certificate Download Section -->
<section class="py-5" style="margin-top: 4rem; margin-bottom: 4rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="p-5 rounded-3" style="background: white; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-radius: 2rem;">
                    <form id="certificateForm">
                        <div class="mb-4">
                            <label for="regNumber" class="form-label" style="font-family: 'Inter', sans-serif; font-weight: 600; color: #374151; font-size: 1.1rem;">
                                Registration Number
                            </label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="regNumber" 
                                placeholder="Enter your registration number"
                                style="border: 2px solid #e5e7eb; border-radius: 1rem; padding: 1rem 1.5rem; font-family: 'Inter', sans-serif; font-size: 1.1rem;"
                                required
                            >
                        </div>
                        
                        <div class="text-center">
                            <button 
                                type="submit" 
                                class="btn btn-lg px-5 py-3" 
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

<!-- Certificate Display Section (Hidden by default) -->
<section id="certificateDisplay" class="py-5" style="margin-bottom: 4rem; display: none;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="p-5 rounded-3" style="background: white; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-radius: 2rem;">
                    <div class="text-center mb-4">
                        <div style="background: #006F3F; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-certificate" style="font-size: 2rem;"></i>
                        </div>
                        <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                            Certificate Found
                        </h3>
                        <p style="font-family: 'Inter', sans-serif; color: #718096;">
                            Your certificate is ready for download
                        </p>
                    </div>
                    
                    <div class="mb-4 p-4" style="background: #f8f9fa; border-radius: 1rem;">
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-family: 'Inter', sans-serif; color: #374151; margin-bottom: 0.5rem;">
                                    <strong>Registration Number:</strong>
                                </p>
                                <p id="displayRegNumber" style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600;"></p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-family: 'Inter', sans-serif; color: #374151; margin-bottom: 0.5rem;">
                                    <strong>Certificate Type:</strong>
                                </p>
                                <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600;">Course Completion Certificate</p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-family: 'Inter', sans-serif; color: #374151; margin-bottom: 0.5rem;">
                                    <strong>Issue Date:</strong>
                                </p>
                                <p style="font-family: 'Inter', sans-serif; color: #006F3F; font-weight: 600;">November 20, 2024</p>
                            </div>
                            <div class="col-md-6">
                                <p style="font-family: 'Inter', sans-serif; color: #374151; margin-bottom: 0.5rem;">
                                    <strong>Status:</strong>
                                </p>
                                <p style="font-family: 'Inter', sans-serif; color: #22c55e; font-weight: 600;">Valid</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button 
                            id="downloadBtn"
                            class="btn btn-lg px-5 py-3 me-3" 
                            style="background: #006F3F; color: white; border-radius: 1rem; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 1.1rem;"
                        >
                            <i class="fas fa-file-pdf me-2"></i>
                            Download PDF
                        </button>
                        <button 
                            id="verifyBtn"
                            class="btn btn-lg px-5 py-3" 
                            style="background: #2563eb; color: white; border-radius: 1rem; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 1.1rem;"
                        >
                            <i class="fas fa-check-circle me-2"></i>
                            Verify Online
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Error Section (Hidden by default) -->
<section id="errorSection" class="py-5" style="margin-bottom: 4rem; display: none;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="p-5 rounded-3 text-center" style="background: white; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-radius: 2rem;">
                    <div style="background: #dc2626; color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-exclamation-triangle" style="font-size: 2rem;"></i>
                    </div>
                    <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #2d3748; margin-bottom: 1rem;">
                        Certificate Not Found
                    </h3>
                    <p style="font-family: 'Inter', sans-serif; color: #718096; margin-bottom: 2rem;">
                        We couldn't find a certificate with that registration number. Please check the number and try again.
                    </p>
                    <button 
                        id="tryAgainBtn"
                        class="btn btn-lg px-5 py-3" 
                        style="background: #2563eb; color: white; border-radius: 1rem; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 1.1rem;"
                    >
                        <i class="fas fa-redo me-2"></i>
                        Try Again
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
document.getElementById('certificateForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const regNumber = document.getElementById('regNumber').value.trim();
    
    if (!regNumber) {
        alert('Please enter your registration number');
        return;
    }
    
    // Simulate certificate lookup (replace with actual API call)
    // For demo purposes, let's assume "CTIBD-2024-001" is valid
    if (regNumber === "CTIBD-2024-001") {
        // Show certificate display
        document.getElementById('certificateDisplay').style.display = 'block';
        document.getElementById('displayRegNumber').textContent = regNumber;
        document.getElementById('errorSection').style.display = 'none';
        
        // Smooth scroll to certificate display
        document.getElementById('certificateDisplay').scrollIntoView({ behavior: 'smooth' });
    } else {
        // Show error
        document.getElementById('errorSection').style.display = 'block';
        document.getElementById('certificateDisplay').style.display = 'none';
        
        // Smooth scroll to error section
        document.getElementById('errorSection').scrollIntoView({ behavior: 'smooth' });
    }
});

// Try Again button functionality
document.getElementById('tryAgainBtn').addEventListener('click', function() {
    document.getElementById('errorSection').style.display = 'none';
    document.getElementById('regNumber').value = '';
    document.getElementById('regNumber').focus();
    
    // Scroll back to form
    document.querySelector('section').scrollIntoView({ behavior: 'smooth' });
});

// Download button functionality
document.getElementById('downloadBtn').addEventListener('click', function() {
    // Simulate PDF download
    const link = document.createElement('a');
    link.href = '#';
    link.download = 'CTIBD-Certificate-' + document.getElementById('displayRegNumber').textContent + '.pdf';
    link.click();
    
    alert('Certificate download started!');
});

// Verify Online button functionality
document.getElementById('verifyBtn').addEventListener('click', function() {
    alert('Certificate verified successfully! This certificate is valid and authentic.');
});
</script>
@endsection