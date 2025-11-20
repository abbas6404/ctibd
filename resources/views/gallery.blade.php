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
        @if($galleries->count() > 0)
            <div class="row g-2 g-md-4">
                @foreach($galleries as $gallery)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                             onclick="openImageModal('{{ $gallery->img ? asset('storage/' . $gallery->img) : asset('img/logo.png') }}', '{{ $gallery->title ?? 'Gallery Image' }}')">
                            @if($gallery->img)
                                <img src="{{ asset('storage/' . $gallery->img) }}" 
                                     alt="{{ $gallery->title ?? 'Gallery Image' }}" 
                                     class="img-fluid w-100 h-100" 
                                     style="object-fit: cover; transition: transform 0.4s ease;">
                            @else
                                <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                    <i class="bi bi-image" style="font-size: 3rem; color: rgba(255,255,255,0.5);"></i>
                                </div>
                            @endif
                            <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                        <h6 class="mb-0 fw-bold">{{ $gallery->title ?? 'Gallery Image' }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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

@section('styles')
<style>
.gallery-item {
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
}

.gallery-item:hover {
    transform: scale(1.05);
    box-shadow: 0 20px 40px rgba(0,0,0,0.3) !important;
}

.gallery-item img {
    filter: brightness(0.9);
    transition: filter 0.4s ease, transform 0.4s ease;
}

.gallery-item:hover img {
    filter: brightness(0.6);
    transform: scale(1.1);
}

.gallery-overlay {
    background: rgba(0,0,0,0.3);
    opacity: 0;
    transition: opacity 0.4s ease;
    backdrop-filter: blur(2px);
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-title-box {
    transform: translateY(20px);
    transition: transform 0.4s ease;
    border: 2px solid rgba(255,255,255,0.3);
    backdrop-filter: blur(10px);
    background: rgba(0,0,0,0.7) !important;
}

.gallery-item:hover .gallery-title-box {
    transform: translateY(0);
}

.gallery-title-box h6 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
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
@endsection