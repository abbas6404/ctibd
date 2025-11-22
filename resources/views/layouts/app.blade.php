<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Confidence Training Institute') - RTO</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/favicon.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        
        .font-heading {
            font-family: 'Montserrat', sans-serif;
        }
        
        /* Responsive image handling */
        img {
            max-width: 100%;
            height: auto;
        }
        
        /* Prevent horizontal scroll */
        * {
            box-sizing: border-box;
        }
        
        /* Mobile-friendly container padding */
        @media (max-width: 576px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
        
        /* Touch-friendly buttons on mobile */
        @media (max-width: 768px) {
            .btn, a.btn, button {
                min-height: 44px;
                min-width: 44px;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Popup Notification Modal Styles */
        #popupNotificationModal .modal-content {
            animation: modalFadeIn 0.5s ease-out;
        }
        
        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        
        #popupNotificationModal .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(4px);
        }
        
        #popupNotificationModal .btn-close {
            font-size: 1.5rem;
            padding: 0.5rem;
            z-index: 10;
        }
        
        @media (max-width: 768px) {
            #popupNotificationModal .modal-dialog {
                margin: 1rem;
            }
            
            #popupNotificationModal .modal-body img {
                max-height: 60vh !important;
            }
        }
    </style>
    @stack('styles')
</head>
<body class="min-vh-100 bg-light">
    @include('layouts.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('layouts.footer')
    
    <!-- Popup Notification Modal -->
    @php
        $popupNotification = \App\Models\Notification::where('type', 'popup_notification')
            ->whereNotNull('img')
            ->latest()
            ->first();
    @endphp
    @if($popupNotification)
        <div class="modal fade" id="popupNotificationModal" tabindex="-1" aria-labelledby="popupNotificationModalLabel" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-lg" style="border-radius: 1rem; overflow: hidden;">
                    <div class="modal-header border-0 pb-0" style="background: linear-gradient(135deg, #dc2626, #be123c);">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="opacity: 1; filter: brightness(0) invert(1);"></button>
                    </div>
                    <div class="modal-body p-0 text-center">
                        @if($popupNotification->img)
                            <img src="{{ asset('storage/' . $popupNotification->img) }}" 
                                 alt="Notification" 
                                 class="img-fluid w-100" 
                                 style="max-height: 70vh; object-fit: contain;">
                        @endif
                    </div>
                    <div class="modal-footer border-0 justify-content-center pb-4">
                        <button type="button" class="btn btn-danger px-5 py-2 rounded-pill fw-bold" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-2"></i>Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const popupNotificationId = {{ $popupNotification->id }};
                const modalElement = document.getElementById('popupNotificationModal');
                
                // Check if popup should be shown (48 hours check)
                function shouldShowPopup() {
                    const storedData = localStorage.getItem('popupNotificationClosed');
                    
                    if (!storedData) {
                        return true; // Never shown before
                    }
                    
                    try {
                        const data = JSON.parse(storedData);
                        const now = Date.now();
                        const fortyEightHours = 48 * 60 * 60 * 1000; // 48 hours in milliseconds
                        
                        // Check if it's a different notification or 48 hours have passed
                        if (data.notificationId !== popupNotificationId) {
                            return true; // Different notification, show it
                        }
                        
                        if (now - data.timestamp >= fortyEightHours) {
                            return true; // 48 hours have passed, show it again
                        }
                        
                        return false; // Same notification and less than 48 hours
                    } catch (e) {
                        return true; // Error parsing, show it to be safe
                    }
                }
                
                // Show popup if conditions are met
                if (shouldShowPopup()) {
                    setTimeout(function() {
                        const modal = new bootstrap.Modal(modalElement);
                        modal.show();
                    }, 500);
                }
                
                // Store timestamp when popup is closed
                modalElement.addEventListener('hidden.bs.modal', function() {
                    const closeData = {
                        notificationId: popupNotificationId,
                        timestamp: Date.now()
                    };
                    localStorage.setItem('popupNotificationClosed', JSON.stringify(closeData));
                });
            });
        </script>
    @endif
</body>
</html>