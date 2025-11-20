@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: linear-gradient(135deg, #006F3F 0%, #007B4F 100%); padding: 4rem 0; margin-bottom: 3rem;">
    <div class="container text-center text-white">
        <h1 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">
            Our Gallery
        </h1>
        <p style="font-family: 'Inter', sans-serif; font-size: 1.1rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">
            Explore our vibrant learning environment, successful events, and memorable moments at CTIBD
        </p>
    </div>
</div>

<!-- Gallery Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Image 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200&h=800&fit=crop', 'Team Collaboration')">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&h=400&fit=crop" 
                         alt="Team Collaboration" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Team Collaboration</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Business%20presentation%20with%20audience%2C%20professional%20speaker%2C%20modern%20conference%20room%2C%20engaged%20participants&image_size=portrait_16_9', 'Business Seminar')">
                    <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Business%20presentation%20with%20audience%2C%20professional%20speaker%2C%20modern%20conference%20room%2C%20engaged%20participants&image_size=square" 
                         alt="Business Presentation" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Business Seminar</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1200&h=800&fit=crop', 'Tech Workshop')">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=400&h=400&fit=crop" 
                         alt="Technology Workshop" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Tech Workshop</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Modern%20classroom%20with%20interactive%20whiteboard%2C%20students%20taking%20notes%2C%20professional%20instructor%2C%20bright%20learning%20environment&image_size=portrait_16_9', 'Interactive Learning')">
                    <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Modern%20classroom%20with%20interactive%20whiteboard%2C%20students%20taking%20notes%2C%20professional%20instructor%2C%20bright%20learning%20environment&image_size=square" 
                         alt="Interactive Classroom" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Interactive Learning</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1556761175-4b46a572b786?w=1200&h=800&fit=crop', 'Certificate Awards')">
                    <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?w=400&h=400&fit=crop" 
                         alt="Certificate Ceremony" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Certificate Awards</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Digital%20marketing%20workshop%2C%20students%20with%20laptops%2C%20social%20media%20presentation%2C%20modern%20training%20room&image_size=portrait_16_9', 'Digital Marketing')">
                    <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Digital%20marketing%20workshop%2C%20students%20with%20laptops%2C%20social%20media%20presentation%2C%20modern%20training%20room&image_size=square" 
                         alt="Digital Marketing Workshop" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Digital Marketing</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=1200&h=800&fit=crop', 'Training Session')">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=400&fit=crop" 
                         alt="Professional Training" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Training Session</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1577896851231-70ef18881754?w=1200&h=800&fit=crop', 'Graduation Ceremony')">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=400&h=400&fit=crop" 
                         alt="Graduation Celebration" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Graduation Ceremony</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 9 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1556761175-b413da4baf72?w=1200&h=800&fit=crop', 'Team Building')">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=400&h=400&fit=crop" 
                         alt="Team Building" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Team Building</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 10 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Leadership%20training%20session%2C%20professional%20speakers%2C%20motivational%20seminar%2C%20business%20coaching%2C%20modern%20training%20facility&image_size=portrait_16_9', 'Leadership Training')">
                    <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Leadership%20training%20session%2C%20professional%20speakers%2C%20motivational%20seminar%2C%20business%20coaching%2C%20modern%20training%20facility&image_size=square" 
                         alt="Leadership Training" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Leadership Training</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 11 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1584697964358-3b40460a04d4?w=1200&h=800&fit=crop', 'Professional Development')">
                    <img src="https://images.unsplash.com/photo-1584697964358-3b40460a04d4?w=400&h=400&fit=crop" 
                         alt="Professional Development" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Professional Development</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 12 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?w=1200&h=800&fit=crop', 'IT Training')">
                    <img src="https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?w=400&h=400&fit=crop" 
                         alt="IT Training" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">IT Training</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 13 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1551836022-deb4988cc6c0?w=1200&h=800&fit=crop', 'Communication Skills')">
                    <img src="https://images.unsplash.com/photo-1551836022-deb4988cc6c0?w=400&h=400&fit=crop" 
                         alt="Communication Skills" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Communication Skills</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 14 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Project%20management%20training%2C%20agile%20methodology%20workshop%2C%20scrum%20training%2C%20professional%20certification%20class&image_size=portrait_16_9', 'Project Management')">
                    <img src="https://trae-api-sg.mchost.guru/api/ide/v1/text_to_image?prompt=Project%20management%20training%2C%20agile%20methodology%20workshop%2C%20scrum%20training%2C%20professional%20certification%20class&image_size=square" 
                         alt="Project Management" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Project Management</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 15 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1586953208448-b95a79798f07?w=1200&h=800&fit=crop', 'Creative Thinking')">
                    <img src="https://images.unsplash.com/photo-1586953208448-b95a79798f07?w=400&h=400&fit=crop" 
                         alt="Creative Workshop" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Creative Thinking</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 16 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1200&h=800&fit=crop', 'Financial Planning')">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=400&h=400&fit=crop" 
                         alt="Financial Planning" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Financial Planning</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 17 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=1200&h=800&fit=crop', 'Health & Safety')">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=400&h=400&fit=crop" 
                         alt="Health & Safety" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Health & Safety</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 18 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1556909114-f6e7ad7d3137?w=1200&h=800&fit=crop', 'Customer Service')">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3137?w=400&h=400&fit=crop" 
                         alt="Customer Service" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Customer Service</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 19 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1200&h=800&fit=crop', 'Data Analysis')">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=400&fit=crop" 
                         alt="Data Analysis" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Data Analysis</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image 20 - Additional -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm" style="border-radius: 1rem; height: 280px; cursor: pointer;" 
                     onclick="openImageModal('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1200&h=800&fit=crop', 'Sales Training')">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&h=400&fit=crop" 
                         alt="Sales Training" class="img-fluid w-100 h-100" style="object-fit: cover; transition: transform 0.4s ease;">
                    <div class="gallery-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="gallery-title-box bg-dark text-white px-4 py-2 rounded-pill shadow-lg">
                                <h6 class="mb-0 fw-bold">Sales Training</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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