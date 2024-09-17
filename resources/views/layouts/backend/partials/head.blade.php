<div class="d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assetb/img/logo.png') }}" alt="">
            <span class="d-none d-lg-block">Emut</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
</div><!-- End Logo -->

<div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
                <i class="bi bi-search"></i>
            </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="badge bg-primary badge-number">4</span>
            </a><!-- End Notification Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                    You have 4 new notifications
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <!-- Notifications will be dynamically added here -->

                <li class="dropdown-footer">
                    <a href="#">Show all notifications</a>
                </li>
            </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-chat-left-text"></i>
                <span class="badge bg-success badge-number">3</span>
            </a><!-- End Messages Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                <li class="dropdown-header">
                    You have 3 new messages
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <!-- Messages will be dynamically added here -->

                <li class="dropdown-footer">
                    <a href="#">Show all messages</a>
                </li>
            </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
            </a><!-- End Profile Image Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6>{{ Auth::user()->name }}</h6>
                    <span>{{ Auth::user()->type }}</span>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('api-tokens.index') }}">
                            <i class="bi bi-key"></i>
                            <span>API Tokens</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                @endif

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

    </ul>
</nav><!-- End Icons Navigation -->
