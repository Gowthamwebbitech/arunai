<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

@if(request()->is('pgtrb'))
    <title>PGTRB Botany Coaching Centre</title>
    <meta name="description"
        content="PGTRB Botany Coaching Dharmapuri, Tamil Nadu, with expert mentoring, syllabus coverage, mock tests and focused revision at Arunai Academy. Join Now.">
    <meta name="keywords"
        content="PGTRB Botany Coaching Dharmapuri, PGTRB Botany Coaching Centre Tamil Nadu, PGTRB Botany Online Coaching, PGTRB Botany Exam Coaching, PGTRB Botany Preparation">

@elseif(request()->is('contact'))
    <title>Arunai Academy Contact Details</title>
    <meta name="description"
        content="PGTRB and UGTRB Botany coaching at Arunai Academy, Dharmapuri, Tamil Nadu. Get course details, admission guidance and expert support. Enquire Today">
    <meta name="keywords"
        content="PGTRB Botany Coaching Dharmapuri, UGTRB Botany Coaching Dharmapuri, Botany Coaching Centre Dharmapuri, Botany Coaching Admission Dharmapuri, Arunai Academy Contact">

@elseif(request()->is('about'))
    <title>About Arunai Academy</title>
    <meta name="description"
        content="Arunai Academy Dharmapuri, Tamil Nadu offers PGTRB and UGTRB Botany coaching with expert guidance, mock tests and focused preparation. Join Now">
    <meta name="keywords"
        content="PGTRB Botany Coaching Dharmapuri, UGTRB Botany Coaching Dharmapuri, Botany Coaching Centre Tamil Nadu, PGTRB Botany Coaching Tamil Nadu">


@elseif(request()->is('ugtrb'))
    <title>UGTRB Botany Coaching Institute</title>
    <meta name="description"
        content="UGTRB Botany Coaching Dharmapuri, Tamil Nadu, with expert guidance, structured learning, practice tests and focused preparation at Arunai Academy. Join Today">
    <meta name="keywords"
        content="UGTRB Botany Coaching Dharmapuri, UGTRB Botany Coaching Centre Tamil Nadu, UGTRB Botany Online Coaching, UGTRB Botany Tamil Online Classes, UGTRB Botany Exam Coaching">

@elseif(request()->is('achievers-page'))
    <title>PGTRB & UGTRB Botany Achievers</title>
    <meta name="description"
        content="PGTRB and UGTRB Botany achievers from Arunai Academy, Dharmapuri, Tamil Nadu, showcasing success through focused preparation and expert guidance. Explore Now!">
    <meta name="keywords"
        content="PGTRB Botany Achievers, UGTRB Botany Achievers, PGTRB Botany Rank Holders, UGTRB Botany Rank Holders, Botany Exam Rank Holders Tamil Nadu">

@elseif(request()->is('study-material'))
    <title>PGTRB and UGTRB Botany Study Material</title>
    <meta name="description"
        content="PGTRB and UGTRB Botany study material from Arunai Academy with subject notes, exam resources, practice materials and focused preparation support">
    <meta name="keywords"
        content="PGTRB Botany Study Material, UGTRB Botany Study Material, PGTRB Botany Notes, UGTRB Botany Notes">

@elseif(request()->is('testimonial'))
    <title>PGTRB & UGTRB Botany Success Stories</title>
    <meta name="description"
        content="PGTRB and UGTRB Botany success stories from students who achieved their goals with expert guidance at Arunai Academy, Dharmapuri. Read Today!">
    <meta name="keywords"
        content="PGTRB Botany Testimonials, UGTRB Botany Testimonials, Botany Coaching Success Stories, Arunai Academy Student Reviews, Botany Coaching Student Success">

@elseif(request()->is('gallery-image'))
    <title>Image Gallery</title>
    <meta name="description"
        content="PGTRB and UGTRB Botany coaching gallery of Arunai Academy, Dharmapuri, Tamil Nadu, featuring classes, activities and exam preparation. View Gallery">
    <meta name="keywords"
        content="Arunai Academy Botany Gallery, PGTRB Botany Coaching Gallery, UGTRB Botany Coaching Gallery, Botany Coaching Classroom Photos, Botany Coaching Centre Dharmapuri Gallery">

@elseif(request()->is('gallery-video'))
    <title>Video Gallery</title>
    <meta name="description"
        content="Arunai Academy Video Gallery features PGTRB and UGTRB Botany classes, expert teaching, student activities and exam preparation videos. Watch Now">
    <meta name="keywords"
        content="Arunai Academy Video Gallery, PGTRB Botany Coaching Videos, UGTRB Botany Coaching Videos, Botany Coaching Videos Dharmapuri">

@else
    <title>Tamil Nadu’s Top PGTRB Botany Coaching Centre – Dharmapuri</title>
    <meta name="description"
        content="Tamil Nadu No. 1 PGTRB & UGTRB Botany Coaching in Dharmapuri. 15+ Yrs Excellence, #1 State Rank Achievers, Test Series & Study Material. Call Now!">
    <meta name="keywords"
        content="PGTRB Botany Coaching, UGTRB Botany Coaching, TRB Botany Coaching Tamil Nadu, Botany Coaching Dharmapuri, Best Botany Coaching Institute, TRB Exam Preparation Botany, Government Teacher Exam Coaching">

@endif

<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="bingbot" content="index, follow">
<meta property="og:type" content="website">
<meta property="og:title" content="PGTRB Botany Coaching Dharmapuri | Arunai Academy">
<meta property="og:description"
    content="Tamil Nadu's No.1 PGTRB Botany Coaching Institute - Arunai Academy, Dharmapuri, 14+ years of excellence & expert mentorship. Enroll today!">
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

<link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />
<link rel="canonical" href="{{ request()->url() }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}"/>
