<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Include other head components (SEO tags you provided) --}}
    @include('frontend.layouts.header-link')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="zi-wbkYPOoRX8YS21vsAgTzkdTYZ_MskQ_NMwfIf4dE" />

    <!-- SEO Meta Tags from your previous input -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="PGTRB Botany Coaching Dharmapuri | Arunai Academy">
    <meta property="og:description" content="Tamil Nadu's No.1 PGTRB Botany Coaching Institute - Arunai Academy, Dharmapuri, 14+ years of excellence & expert mentorship. Enroll today!">
    <meta property="og:image" content="https://arunaiacademypgtrbbotany.in/assets/images/logo.webp">
    <meta property="og:url" content="https://arunaiacademypgtrbbotany.in/">
    <meta property="og:site_name" content="Arunai Academy">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PGTRB Botany Coaching Dharmapuri | Arunai Academy">
    <meta name="twitter:description" content="Tamil Nadu's No.1 PGTRB Botany Coaching Institute - Arunai Academy, Dharmapuri, 14+ years of excellence & expert mentorship. Enroll today!">
    <meta name="twitter:image" content="{{ asset('assets/images/logo-black.webp') }}">
    <meta name="twitter:url" content="https://arunaiacademypgtrbbotany.in/">
    <meta name="twitter:site" content="@ArunaiAcademy">
    <meta name="twitter:creator" content="@ArunaiAcademy">

    <!-- Favicon & Canonical -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="canonical" href="{{ request()->url() }}">

    {{-- !!! 1. INLINED PRELOADER CSS (Non-Blocking) !!! --}}
    <style id="preloader-css">
        .preloader-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background-color: #ffffff; display: flex; justify-content: center;
            align-items: center; z-index: 999999;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
            visibility: visible; opacity: 1;
        }
        .preloader-overlay.loaded { opacity: 0; visibility: hidden; }
        .spinner {
            width: 40px; height: 40px; border: 4px solid #f3f3f3;
            border-top: 4px solid #008145; border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>

    <!-- !!! 2. CRITICAL CSS PLACEHOLDER !!! -->
    {{-- Generate your critical CSS for above-the-fold content and paste it here --}}
    <style id="critical-css">
        /* PASTE CRITICAL CSS HERE */
    </style>

    <!-- !!! 3. PRELOAD NON-CRITICAL CSS !!! -->
    <!-- Preconnect & DNS Prefetch -->
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">

    <!-- Preload Bootstrap -->
    <link rel="preload" href="{{ asset('assets/css/bootstrap.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"></noscript>

    <!-- Preload Main Style.css -->
    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"></noscript>

    <!-- Preload Swiper (Your local copy - CDN removed) -->
    <link rel="preload" href="{{ asset('assets/css/swiper-bundle.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"></noscript>

    <!-- Preload Font Awesome (From CDN) -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css"></noscript>

    <!-- !!! 4. GOOGLE FONTS (@font-display: swap) !!! -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- !!! 5. GOOGLE TAG MANAGER (HEAD) !!! -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','YOUR-REAL-GTM-ID-HERE');</script>
    <!-- !!! END GTM HEAD !!! -->

    <title>PGTRB Botany Coaching Dharmapuri | Arunai Academy</title>
</head>

<body>

    <!-- !!! 6. PRELOADER HTML !!! -->
    <div id="preloader-overlay" class="preloader-overlay">
        <div class="spinner"></div>
    </div>

    <!-- !!! 7. GOOGLE TAG MANAGER (NOSCRIPT) !!! -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=YOUR-REAL-GTM-ID-HERE"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- !!! END GTM NOSCRIPT !!! -->

    {{-- Include header --}}
    @include('frontend.layouts.header')

    <main class="container-wrapper">
        @yield('content')
    </main>

    {{-- Include footer --}}
    @include('frontend.layouts.footer')

    {{-- !!! 8. PRELOADER JS (Must be before </body>) !!! --}}
    <script>
        // Preloader logic to fade it out once the page is fully loaded
        window.addEventListener('load', function () {
            var preloader = document.getElementById('preloader-overlay');

            // Add a class to start the fade-out animation
            preloader.classList.add('loaded');

            // Optional: Remove the element from the DOM completely after the animation finishes
            setTimeout(function () {
                preloader.style.display = 'none';
            }, 500); // Matches the CSS transition time
        });
    </script>

</body>

</html>
