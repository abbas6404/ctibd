@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 3rem 0; margin-bottom: 2rem;">
    <div class="container text-center text-white px-3">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.5rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1rem;">
            Our Gallery
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: clamp(0.95rem, 2vw, 1.1rem); opacity: 0.9; max-width: 600px; margin: 0 auto;">
            Explore our vibrant learning environment, successful events, and memorable moments at CTIBD
        </p>
    </div>
</div>

<!-- Gallery Section -->
<section class="py-4">
    <div class="container px-3 px-md-4">
        @php
            $hasAnyImages = false;
            if ($categories->count() > 0) {
                foreach ($categories as $category) {
                    if ($category->galleries->count() > 0) {
                        $hasAnyImages = true;
                        break;
                    }
                }
            }
            if ($uncategorizedGalleries->count() > 0) {
                $hasAnyImages = true;
            }
        @endphp
        
        @if($hasAnyImages)
            <!-- Categories with their galleries -->
            @foreach($categories as $category)
                @if($category->galleries->count() > 0)
                    <div class="mb-5">
                        <!-- Category Title -->
                        <div class="mb-4" style="position: relative; margin: clamp(2rem, 5vw, 3rem) 0; text-align: center;">
                            <!-- Horizontal Line -->
                            <div style="
                                position: absolute;
                                top: 50%;
                                left: 0;
                                right: 0;
                                height: 1px;
                                background: #e2e8f0;
                                z-index: 1;
                            "></div>
                            
                            <!-- Category Name Box -->
                            <div style="
                                position: relative;
                                display: inline-block;
                                background: white;
                                border: 1px solid #e2e8f0;
                                padding: clamp(0.75rem, 2vw, 1rem) clamp(2rem, 5vw, 3rem);
                                z-index: 2;
                            ">
                                <h2 style="
                                    font-family: 'Montserrat', sans-serif; 
                                    font-size: clamp(1.25rem, 3.5vw, 1.75rem); 
                                    font-weight: 600; 
                                    color: #006F3F; 
                                    margin: 0;
                                    letter-spacing: 1px;
                                    text-transform: uppercase;
                                ">
                                    {{ $category->name }}
                                </h2>
                            </div>
                        </div>
                        
                        <!-- Category Gallery Images -->
                        <div class="row g-2 g-md-4">
                            @foreach($category->galleries as $gallery)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                                         onclick="openImageModal('{{ $gallery->img ? asset($gallery->img) : asset('img/logo.png') }}', '{{ $gallery->title ?? 'Gallery Image' }}')">
                                        @if($gallery->img)
                                            <img src="{{ asset($gallery->img) }}" 
                                                 alt="{{ $gallery->title ?? 'Gallery Image' }}" 
                                                 class="gallery-image img-fluid w-100 h-100" 
                                                 style="object-fit: cover; display: block;">
                                        @else
                                            <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                                <i class="bi bi-image" style="font-size: 3rem; color: rgba(255,255,255,0.5);"></i>
                                            </div>
                                        @endif
                                        <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                                            <div class="text-center">
                                                <div class="gallery-title-box text-white px-4 py-2 rounded-pill">
                                                    <h6 class="mb-0 fw-bold">{{ $gallery->title ?? 'Gallery Image' }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
            
            <!-- Un categorized Galleries -->
            @if($uncategorizedGalleries->count() > 0)
                <div class="mb-5">
                    <!-- Category Title -->
                    <div class="mb-4" style="position: relative; margin: clamp(2rem, 5vw, 3rem) 0; text-align: center;">
                        <!-- Horizontal Line -->
                        <div style="
                            position: absolute;
                            top: 50%;
                            left: 0;
                            right: 0;
                            height: 1px;
                            background: #e2e8f0;
                            z-index: 1;
                        "></div>
                        
                        <!-- Category Name Box -->
                        <div style="
                            position: relative;
                            display: inline-block;
                            background: white;
                            border: 1px solid #e2e8f0;
                            padding: clamp(0.75rem, 2vw, 1rem) clamp(2rem, 5vw, 3rem);
                            z-index: 2;
                        ">
                            <h2 style="
                                font-family: 'Montserrat', sans-serif; 
                                font-size: clamp(1.25rem, 3.5vw, 1.75rem); 
                                font-weight: 600; 
                                color: #006F3F; 
                                margin: 0;
                                letter-spacing: 1px;
                                text-transform: uppercase;
                            ">
                                Other Images
                            </h2>
                        </div>
                    </div>
                    
                    <!-- Un categorized Gallery Images -->
                    <div class="row g-2 g-md-4">
                        @foreach($uncategorizedGalleries as $gallery)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                                     onclick="openImageModal('{{ $gallery->img ? asset($gallery->img) : asset('img/logo.png') }}', '{{ $gallery->title ?? 'Gallery Image' }}')">
                                    @if($gallery->img)
                                        <img src="{{ asset($gallery->img) }}" 
                                             alt="{{ $gallery->title ?? 'Gallery Image' }}" 
                                             class="gallery-image img-fluid w-100 h-100" 
                                             style="object-fit: cover; display: block;">
                                    @else
                                        <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                            <i class="bi bi-image" style="font-size: 3rem; color: rgba(255,255,255,0.5);"></i>
                                        </div>
                                    @endif
                                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <div class="gallery-title-box text-white px-4 py-2 rounded-pill">
                                                <h6 class="mb-0 fw-bold">{{ $gallery->title ?? 'Gallery Image' }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @else
            <div class="text-center py-5">
                <i class="bi bi-images" style="font-size: 4rem; color: #cbd5e0; margin-bottom: 1rem;"></i>
                <h3 style="font-family: 'Montserrat', sans-serif; color: #4a5568; margin-bottom: 0.5rem;">No Gallery Images</h3>
                <p style="font-family: 'Inter', sans-serif; color: #718096;">Check back soon for gallery updates.</p>
            </div>
        @endif
    </div>
</section>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-0">
                <img id="modalImage" src="" alt="" class="img-fluid rounded-3" style="max-height: 80vh; width: auto;">
                <div id="modalTitle" class="text-white mt-3">
                    <h4 class="fw-bold"></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function openImageModal(imageSrc, title) {
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('modalImage').alt = title;
    document.querySelector('#modalTitle h4').textContent = title;
    
    const modal = new bootstrap.Modal(document.getElementById('imageModal'));
    modal.show();
}

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const modal = bootstrap.Modal.getInstance(document.getElementById('imageModal'));
        if (modal) {
            modal.hide();
        }
    }
});

// Close modal when clicking outside the image
document.getElementById('imageModal').addEventListener('click', function(event) {
    if (event.target === this || event.target.classList.contains('modal-dialog')) {
        const modal = bootstrap.Modal.getInstance(this);
        if (modal) {
            modal.hide();
        }
    }
});
</script>
@endsection

@push('styles')
<style>
.gallery-item {
    cursor: pointer;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.4s ease;
    overflow: hidden;
    position: relative;
    will-change: transform;
}

.gallery-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(195, 236, 251, 0.9);
    opacity: 0;
    transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 1;
    border-radius: 1rem;
    pointer-events: none;
}

.gallery-item:hover {
    transform: scale(1.03);
    box-shadow: 0 20px 40px rgba(195, 236, 251, 0.5) !important;
}

.gallery-item:hover::before {
    opacity: 1;
}

.gallery-image {
    filter: brightness(1);
    transition: filter 0.4s cubic-bezier(0.4, 0, 0.2, 1), transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    position: relative;
    z-index: 0;
}

.gallery-item:hover .gallery-image {
    filter: brightness(0.4);
    transform: scale(1.1);
}

.gallery-overlay {
    background: transparent;
    opacity: 0 !important;
    visibility: hidden !important;
    backdrop-filter: blur(0px);
    z-index: 3;
    transform: scale(0.9);
    pointer-events: none;
    transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important, 
                transform 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important, 
                visibility 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1 !important;
    visibility: visible !important;
    transform: scale(1) !important;
    pointer-events: auto;
}

.gallery-title-box {
    transform: translateY(20px) scale(0.9);
    opacity: 0 !important;
    visibility: hidden !important;
    transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1), 
                opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1),
                visibility 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: 2px solid rgba(255,255,255,0.8);
    backdrop-filter: blur(10px);
    background: rgba(0, 111, 63, 0.9) !important;
    box-shadow: 0 8px 25px rgba(195, 236, 251, 0.6);
    pointer-events: none;
    position: relative;
    z-index: 4;
}

.gallery-item:hover .gallery-title-box {
    transform: translateY(0) scale(1) !important;
    opacity: 1 !important;
    visibility: visible !important;
    pointer-events: auto;
}

.gallery-title-box h6 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.9);
    font-size: clamp(0.875rem, 2vw, 1rem);
    margin: 0;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .gallery-item {
        height: 240px !important;
    }
    .gallery-title-box {
        padding: 0.5rem 1rem !important;
    }
    .gallery-title-box h6 {
        font-size: 0.9rem;
    }
}

@media (max-width: 576px) {
    .gallery-item {
        height: 200px !important;
    }
    .gallery-title-box {
        padding: 0.4rem 0.8rem !important;
    }
    .gallery-title-box h6 {
        font-size: 0.8rem;
    }
}

/* Modal Styling */
.modal {
    backdrop-filter: blur(8px);
    background: rgba(0,0,0,0.8);
}

.modal-content {
    background: transparent !important;
    box-shadow: none !important;
}

.modal-header {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 1060;
    padding: 1rem;
}

.btn-close-white {
    filter: brightness(0) invert(1);
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.btn-close-white:hover {
    opacity: 1;
}

#modalImage {
    box-shadow: 0 20px 60px rgba(0,0,0,0.9);
    border-radius: 1rem;
}

#modalTitle h4 {
    font-family: 'Montserrat', sans-serif;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
    margin-bottom: 0;
}
</style>
@endpush