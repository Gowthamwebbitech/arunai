
<!-- ══ NAVBAR ══ -->
<nav id="navbar">
    <div class="nav-inner">
        <a href="{{ route('index') }}" class="nav-logo">
            <img src="{{ asset('assets/images/logo-black.webp') }}" alt="PGTRB Botany Coaching Centre Tamil Nadu" />
            <div class="d-md-none d-block botony-img">
                <img class="mt-3" src="{{ asset('assets/images/botony.png') }}"
                    alt="PGTRB Botany Coaching Institute Tamil Nadu" />
            </div>
        </a>
        <ul class="nav-menu mb-0">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('pgtrb') }}">PGTRB - BOTANY</a></li>
            <li><a href="{{ route('ugtrb') }}">UGTRB - BOTANY</a></li>
            <li><a href="{{ route('achievers_page') }}">Achievers</a></li>
            <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
            <li class="nav-dropdown">
                <a href="#">Gallery ▾</a>
                <ul class="dropdown-menu">
                    {{-- <li><a href="{{ route('gallery.image', ['years' => 'all']) }}">Image Gallery</a></li> --}}
                    <li><a href="{{ route('gallery.image') }}">Image Gallery</a></li>
                    <li><a href="{{ route('gallery.video') }}">Video Gallery</a></li>
                </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li class="highlight-btn"><a href="{{ route('index') }}#study">Study Material</a></li>
        </ul>
        <button class="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<!-- Mobile Nav -->
<div class="mobile-nav">
    <a href="{{ route('index') }}" class="active">Home</a>
    <a href="{{ route('about') }}">About Us</a>
    <a href="{{ route('ugtrb') }}">UG Courses</a>
    <a href="{{ route('pgtrb') }}">PG Courses</a>
    <a href="{{ route('achievers_page') }}">Achievers</a>
    <a href="{{ route('testimonial') }}">Testimonial</a>
    {{-- <a href="{{ route('gallery.image', ['years' => 'all']) }}" class="mobile-sub">🖼 Image Gallery</a> --}}
    <a href="{{ route('gallery.image') }}" class="mobile-sub">🖼 Image Gallery</a>
    <a href="{{ route('gallery.video') }}" class="mobile-sub">▶ Video Gallery</a>
    <a href="{{ route('contact') }}">Contact Us</a>
    <li class="highlight-btn"><a href="{{ route('index') }}#study">Study Material</a></li>
</div>
