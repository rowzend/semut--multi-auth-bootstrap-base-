<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Clarence Taylor</span>
        <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                src="{{ asset('asseta/img/ava.png') }}" alt="..." /></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Layanan</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Data Diri</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Upload FIle</a></li>
            {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li> --}}
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Resume</a></li>
        </ul>
    </div>
    <a class="navbar-brand js-scroll-trigger" href="#logout"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <span class="d-block d-lg-none">Logout</span>
        <span class="d-none d-lg-block text-center">
            <!-- Icon Power -->
            <i class="fas fa-power-off" style="font-size: 24px; color: #ffffff;"></i>
            <!-- Text "Log Out" Below the Icon -->
            <p class="nav-link js-scroll-trigger">Keluar</p>
        </span>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
