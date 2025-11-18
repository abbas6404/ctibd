<!-- Top Navigation Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom sticky-top" style="top: 0; z-index: 40;">
    <div class="container-fluid px-4">
        <ul class="navbar-nav d-flex flex-row gap-3">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active fw-bold' : '' }}" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-house-door me-1"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.employees.*') ? 'active fw-bold' : '' }}" href="{{ route('admin.employees.index') }}">
                    <i class="bi bi-people me-1"></i> Employees
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.short-courses.*') ? 'active fw-bold' : '' }}" href="{{ route('admin.short-courses.index') }}">
                    <i class="bi bi-book me-1"></i> Short Courses
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.notifications.*') ? 'active fw-bold' : '' }}" href="{{ route('admin.notifications.index') }}">
                    <i class="bi bi-bell me-1"></i> Notifications
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.gallery.*') ? 'active fw-bold' : '' }}" href="{{ route('admin.gallery.index') }}">
                    <i class="bi bi-images me-1"></i> Gallery
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.certificates.*') ? 'active fw-bold' : '' }}" href="{{ route('admin.certificates.index') }}">
                    <i class="bi bi-award me-1"></i> Certificates
                </a>
            </li>
        </ul>
        <div class="d-flex align-items-center gap-3 ms-auto">
            <a href="{{ route('home') }}" target="_blank" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-box-arrow-up-right me-1"></i> View Site
            </a>
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle me-1"></i> {{ Auth::guard('admin')->user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.profile') }}">
                            <i class="bi bi-person me-2"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.settings') }}">
                            <i class="bi bi-gear me-2"></i> Settings
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('admin.logout') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Header Section -->
<header class="sticky-top" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); top: 56px; z-index: 30; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <div class="container-fluid px-4 py-3">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2 class="h3 mb-0 fw-bold text-white">
                    <i class="bi bi-speedometer2 me-2"></i>
                    @yield('page-title', 'Dashboard')
                </h2>
                <p class="text-white-50 small mb-0 mt-1">
                    <i class="bi bi-info-circle me-1"></i>
                    @yield('page-description', 'Manage your content')
                </p>
            </div>
            <div>
                @yield('header-actions')
            </div>
        </div>
    </div>
</header>

