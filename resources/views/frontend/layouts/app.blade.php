<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.header-link')
    <meta name="google-site-verification" content="zi-wbkYPOoRX8YS21vsAgTzkdTYZ_MskQ_NMwfIf4dE" />
    <!-- Google tag (gtag.js) -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-MSE89PTT5P"></script> --}}
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-MSE89PTT5P');
    </script>
</head>
<body>

    @include('frontend.layouts.header')

    <main class="container-wrapper">
        @yield('content')
    </main>

    @include('frontend.layouts.footer')
</body>
</html>
