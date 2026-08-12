@extends('frontend.landing-pages.layouts.app')

@section('meta_title', $page->meta_title ?? 'landing page')
@section('meta_description', $page->meta_description ?? '')
@section('meta_keyword', $page->meta_keyword ?? '')


@section('content')

    <style>
        .enquiry-form .subject {
            height: 40px;
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 0px 14px;
            font-size: 14px;
            transition: 0.3s;
        }

        .category-menu li:not(.active) a {
            color: #000000 !important;
            /* background: #e5e5e5; */
        }

        .category-menu li.active a {
            color: #fff !important;
        }

        .category-menu li:hover {
            background: #046980;
            color: #fff !important;
        }

        /* ICON */
        .category-menu li:hover .fa-solid.fa-chevron-right,
        .category-menu li.active a .fa-solid.fa-chevron-right {
            color: #fff !important;
        }

        /* Container Spacing & Item Style */
        .faq-accordion .faq-item {
            border-radius: 8px !important;
            overflow: hidden;
            margin-bottom: 16px !important;
            /* Replaces the space20 div cleanly */
        }

        /* --- COLLAPSED STATE (Light Blue/Grey Bars) --- */
        .faq-accordion .faq-item .accordion-button.collapsed {
            background-color: #f0f3fa;
            /* Light background from screenshot */
            color: #0b4a1a;
            /* Dark green text color */
            font-weight: 600;
            border-radius: 8px;
            border: none;
        }

        /* --- EXPANDED STATE (Active Green Bar) --- */
        .faq-accordion .faq-item .accordion-button:not(.collapsed) {
            background-color: #007a1a;
            /* Rich green background */
            color: #ffffff;
            /* White text */
            font-weight: 600;
            box-shadow: none;
            /* Remove default bootstrap blue glow */
            border-radius: 8px 8px 0 0;
        }

        /* Ensure body matches active green panel */
        .faq-accordion .faq-item .accordion-collapse {
            background-color: #007a1a;
            color: #ffffff;
            border-radius: 0 0 8px 8px;
        }

        .faq-accordion .faq-item .accordion-body {
            padding-top: 0;
            /* Snug fit against the question header */
            padding-bottom: 20px;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* --- CUSTOM ARROW BUTTONS --- */
        /* Base reset for default Bootstrap indicators */
        .faq-accordion .accordion-button::after {
            background-image: none !important;
            /* Hide standard arrow icon */
            font-family: Arial, sans-serif;
            /* Clean system text arrow fallback */
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        /* Collapsed state arrow (Green Circle with white downward arrow) */
        .faq-accordion .accordion-button.collapsed::after {
            content: "∨";
            background-color: #007a1a;
            color: #ffffff;
            transform: rotate(0deg);
        }

        /* Expanded state arrow (White Circle with green upward arrow) */
        .faq-accordion .accordion-button:not(.collapsed):::after {
            content: "∧";
            background-color: #ffffff;
            color: #007a1a;
            transform: rotate(0deg);
            /* Explicitly set alignment */
        }


        /* archivement */
        @keyframes bgZoom {

            0% {
                background-size: 100%;
            }

            100% {
                background-size: 115%;
            }

        }

        @media screen and (max-width:768px) {
            .our-achivers {
                background-size: cover !important;
            }
        }

        .achievers-slider .achiever-card .achiever-rank {
            display: inline-block;
            background: linear-gradient(135deg, var(--green-mid), var(--green-lime));
            color: var(--white);
            font-size: 20px;
            font-weight: 600;
            padding: 0.2rem 0.8rem;
            border-radius: 50px;
            letter-spacing: 0.06em;
            position: absolute;
            top: 5px;
            left: 5px;
            background: transparent;
        }

        .achievers-slider .achiever-card .achiever-content {
            text-align: center;
        }

        .achievers-slider .achiever-card .achiever-content h3 {
            font-size: 20px;
            padding: 10px 0;
        }

        .achievers-slider .swiper-button-next {
            background: rgb(255, 255, 255);
            width: 40px;
            height: 40px;
            display: flex;
            border-radius: 50%;
            align-items: center;
            right: -10px;
        }

        .achievers-slider .swiper-button-next::after {
            font-size: 20px;
            font-weight: 800;
            color: #002b14;
        }

        .achievers-slider .swiper-button-prev {
            background: rgb(255, 255, 255);
            width: 40px;
            height: 40px;
            display: flex;
            border-radius: 50%;
            align-items: center;
            left: -10px;
        }

        .achievers-slider .swiper-button-prev::after {
            font-size: 20px;
            font-weight: 800;
            color: #002b14;
        }

        .achievers-slider .swiper-pagination {
            bottom: -40px !important;
        }

        .our-achivers .swiper {
            overflow: unset !important;
        }

        .achievers-slider .swiper-pagination span {
            background: rgb(255, 255, 255);
        }

        .achiever-card .achiever-rank span {
            font-size: 30px;
            color: #d38400;
        }

        /* --- Header Section --- */
        .achievement-section .header-container {
            margin-bottom: 30px;
        }

        .achievement-section .leaf-icon {
            font-size: 18px;
        }

        /* --- Cards Layout Row --- */
        .achievement-section .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 25px;
        }

        /* --- Theme Configuration Variables --- */
        .achievement-section .card-green {
            --theme-color: #1e7e34;
            --bg-light: #f4faf4;
            --footer-bg: #0f521d;
        }

        .achievement-section .card-blue {
            --theme-color: #1a5296;
            --bg-light: #f3f7fc;
            --footer-bg: #0f396b;
        }

        .achievement-section .card-purple {
            --theme-color: #6f2b8c;
            --bg-light: #faf4fc;
            --footer-bg: #49165e;
        }

        .achievement-section .card-orange {
            --theme-color: #c45500;
            --bg-light: #fff8f2;
            --footer-bg: #a33f00;
        }

        .card-green .trophy-icon i {
            color: #1e7e34;
        }

        .card-blue .trophy-icon i {
            color: #1a5296;
        }

        .card-purple .trophy-icon i {
            color: #6f2b8c;
        }

        .card-orange .trophy-icon i {
            color: #c45500;
        }

        /* --- Card Architecture --- */
        .achievement-section .card {
            background: #ffffff;
            border: 1.5px solid var(--theme-color);
            border-radius: 14px;
            width: 260px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
            transition: transform 0.2s ease;
        }

        .achievement-section .card:hover {
            transform: translateY(-4px);
        }

        .achievement-section .card-body {
            padding: 20px 15px 15px 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* --- Inside Card Top Header --- */
        .achievement-section .card-header-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            margin-bottom: 15px;
        }

        .achievement-section .trophy-icon {
            font-size: 28px;
            filter: drop-shadow(0px 2px 2px rgba(0, 0, 0, 0.1));
        }

        .achievement-section .year {
            font-size: 22px;
            font-weight: 800;
            color: var(--theme-color);
            text-align: left;
            line-height: 1.1;
        }

        .achievement-section .exam-name {
            font-size: 14px;
            font-weight: 700;
            color: #333;
            text-align: left;
            letter-spacing: 0.2px;
        }

        /* --- Laurels & Counters Center Block --- */
        .achievement-section .laurel-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 10px 0;
        }

        .laurel-wrapper span img {
            height: 120px;
        }

        .achievement-section .laurel-branch {
            font-size: 42px;
            opacity: 0.85;
            user-select: none;
        }

        .achievement-section .laurel-branch.left {
            transform: scaleX(-1) rotate(-15deg);
        }

        .achievement-section .laurel-branch.right {
            transform: rotate(-15deg);
        }

        .achievement-section .selection-count {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0 5px;
        }

        .achievement-section .number {
            font-size: 44px;
            font-weight: 800;
            color: var(--theme-color);
            line-height: 1;
        }

        .achievement-section .label {
            font-size: 10px;
            font-weight: 800;
            color: #222;
            letter-spacing: 0.5px;
            line-height: 1.2;
            margin-top: 2px;
            text-align: center;
        }

        /* --- Card Bottom Banner --- */
        .achievement-section .card-footer {
            background-color: var(--footer-bg);
            color: #ffffff;
            font-size: 15px;
            font-weight: 600;
            padding: 12px 10px;
            line-height: 1.4;
            border-radius: 11px !important;
            text-align: center;
        }

        .achievement-section .card-footer span {
            font-size: 22px;
        }

        /* --- Slider Navigation Dots --- */
        .achievement-section .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 15px;
        }

        .achievement-section .dot {
            width: 10px;
            height: 10px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
        }

        .achievement-section .dot.active {
            background-color: #1e7e34;
        }

        @media (max-width: 767px) {
            .nav-des {
                display: none;
            }
            .hero2-section-area {
                padding-top: 50px;
            }
        }

        /* --- Responsive Layout Rules --- */
        @media (max-width: 600px) {
            .achievement-section .cards-container {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 576px) {
            .nav-des {
                display: none;
            }
        }

        .achievement-section {
            background: url('assets/images/achive-bg.jfif');
            background-position: center;
            background-size: cover;
            /* border-top: 1px solid var(--green-mid); */
        }
    </style>
    <div class="body-bg2">
        <div id="carouselExampleIndicators" style="margin-top: 75px;" class="carousel slide carousel-fade home-banner" data-ride="carousel"
            data-interval="3000">
            <div class="carousel-inner">
                @foreach ($banners as $banner)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ asset('uploads/banners/' . $banner->image) }}" alt="First slide">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <i class="fa-solid fa-chevron-left"></i>
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
            </a>
        </div>
        <div class="hero2-section-area"
            style="background-image: url({{ asset('landing/assets/img/all-images/bg/hero-bg3.png') }});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero2-header heading3">
                            <h5 data-aos="fade-left" data-aos-duration="800"><img
                                    src="{{ asset('landing/assets/img/icons/sub-logo2.svg') }}" alt="">Botany Class
                            </h5>
                            <div class="space24"></div>
                            <h1 class="text-anime-style-3"> {!! $page->name ?? '' !!} </h1>
                            <div class="space18"></div>
                            <p data-aos="fade-left" data-aos-duration="900">{!! $page->banner_content ?? '' !!}
                            </p>
                            <div class="space32"></div>
                            <div class="counter-boxarea">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-6" data-aos-duration="800">
                                        <div class="counter-box">
                                            <h2><span class="counter">200</span>K</h2>
                                            <div class="space16"></div>
                                            <p>Happy Customer</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-6" data-aos-duration="900">
                                        <div class="counter-box">
                                            <h2><span class="counter">20</span>+</h2>
                                            <div class="space16"></div>
                                            <p>Years Experience</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4" data-aos-duration="1000">
                                        <div class="space30 d-md-none d-block"></div>
                                        <div class="counter-box box2">
                                            <h2><span class="counter">24</span>/<span class="counter">7</span></h2>
                                            <div class="space16"></div>
                                            <p>Customer Support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="enquiry-card">
                            <h4 class="enquiry-title">Enquiry Form</h4>

                            <form id="contactForm4" method="POST" action="{{ route('enquiry.store') }}"
                                class="enquiry-form">
                                @csrf

                                <input type="hidden" name="type" value="landing">

                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                    <span class="form4-error text-danger"></span>
                                </div>

                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" maxlength="10">
                                    <span class="form4-error text-danger"></span>
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                    <span class="form4-error text-danger"></span>
                                </div>

                                <div class="mb-3">

                                    <label class="mb-2 d-block">
                                        Course Interest
                                    </label>

                                    <select name="subject" class="form-control subject w-100">

                                        <option value="">
                                            Select a course
                                        </option>

                                        <optgroup label="UG Programs">
                                            <option value="Botany UG">
                                                Botany UG
                                            </option>
                                        </optgroup>

                                        <optgroup label="PG Programs">
                                            <option value="Botany PG">
                                                Botany PG
                                            </option>
                                        </optgroup>

                                        <option value="Other / General Enquiry">
                                            Other / General Enquiry
                                        </option>

                                    </select>

                                    <span class="form4-error text-danger"></span>

                                </div>

                                <div class="mb-3">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control" rows="3"></textarea>
                                    <span class="form4-error text-danger"></span>
                                </div>

                                {{-- CAPTCHA --}}
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="number" name="captcha" class="form-control"
                                            placeholder="Enter Answer">
                                        <span class="form4-error text-danger"></span>
                                    </div>

                                    <div class="col-md-6 mb-3 d-flex align-items-center gap-2">
                                        <input type="text" id="math-question" class="form-control" readonly
                                            style="max-width:150px;color:black;">

                                        <button type="button" class="btn btn-danger" onclick="loadCaptcha()">↻</button>
                                    </div>
                                </div>

                                <button type="submit" id="submitBtn" class="enquiry-btn w-100">
                                    <span class="btn-text">Submit Enquiry</span>
                                    <span class="btn-loader d-none">Loading...</span>
                                </button>

                                <p id="successAlert4" class="d-none text-success text-center mt-3">
                                    ✓ Inquiry Received! We will contact you shortly.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
            data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
            <!--===== ABOUT AREA STARTS =======-->
            <div class="about3-section-area sp1 pb-0">

                <div class="container" id="about">
                    <div class="row">

                        {{-- LEFT CONTENT --}}
                        <div class="col-lg-8">
                            <div class="about-header-area heading5">
                                {!! $page->page_content ?? '' !!}
                            </div>
                        </div>

                        {{-- RIGHT SIDEBAR --}}
                        <div class="col-lg-4">

                            <div class="right-sidebar-sticky">

                                {{-- IMAGE --}}
                                <div class="images mb-4">
                                    <img src="{{ asset('landing/assets/img/all-images/about/about-img4.png') }}"
                                        alt="About Image" class="img-fluid sidebar-image">
                                </div>

                                {{-- CATEGORY --}}
                                <div class="category-card mb-5">

                                    <h4 class="category-title">
                                        Category List
                                    </h4>

                                    <ul class="category-menu" style="height: 325px">

                                        @foreach ($services as $service)
                                            <li class="{{ request()->segment(2) == $service->slug ? 'active' : '' }}">

                                                <a
                                                    href="{{ route('service.detail', $service->slug ?? Str::slug($service->name)) }}">

                                                    <span class="arrow">
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </span>

                                                    {{ $service->name }}

                                                </a>

                                            </li>
                                        @endforeach

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <section class="achievement-section py-5">
                    <div class="section-header mb-4">
                        <h2 class="section-title">Our <span class="accent">Achievements</span></h2>
                        <p class="section-subtitle">Our consistent results reflect our commitment to excellence</p>
                    </div>
                    <div class="cards-container">
                        <div class="card card-green">
                            <div class="card-body">
                                <div class="card-header-info">
                                    <span class="trophy-icon"><i class="fa-solid fa-trophy"></i></span>
                                    <div>
                                        <div class="year">2025</div>
                                        <div class="exam-name">PGTRB BOTANY</div>
                                    </div>
                                </div>
                                <div class="laurel-wrapper">
                                    <span class="laurel-branch left"><img
                                            src="{{ asset('assets/images/flow-right.png') }}" /></span>
                                    <div class="selection-count">
                                        <span class="number">72</span>
                                        <span class="label">CANDIDATES<br>SELECTED</span>
                                    </div>
                                    <span class="laurel-branch right"><img
                                            src="{{ asset('assets/images/flow-right.png') }}" /></span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span>Secured State</span><br>1st, 2nd, 3rd & 4th Ranks
                            </div>
                        </div>

                        <div class="card card-blue">
                            <div class="card-body">
                                <div class="card-header-info">
                                    <span class="trophy-icon"><i class="fa-solid fa-trophy"></i></span>
                                    <div>
                                        <div class="year">2024</div>
                                        <div class="exam-name">UGTRB BOTANY</div>
                                    </div>
                                </div>
                                <div class="laurel-wrapper">
                                    <span class="laurel-branch left"><img
                                            src="{{ asset('assets/images/flow-right.png') }}" /></span>
                                    <div class="selection-count">
                                        <span class="number">68</span>
                                        <span class="label">CANDIDATES<br>SELECTED</span>
                                    </div>
                                    <span class="laurel-branch right"><img
                                            src="{{ asset('assets/images/flow-right.png') }}" /></span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span>Secured State</span><br>1st, 2nd & 3rd Ranks
                            </div>
                        </div>

                        <div class="card card-purple">
                            <div class="card-body">
                                <div class="card-header-info">
                                    <span class="trophy-icon"><i class="fa-solid fa-trophy"></i></span>
                                    <div>
                                        <div class="year">2022</div>
                                        <div class="exam-name">PGTRB BOTANY</div>
                                    </div>
                                </div>
                                <div class="laurel-wrapper">
                                    <span class="laurel-branch left"><img
                                            src="{{ asset('assets/images/flow-right.png') }}" /></span>
                                    <div class="selection-count">
                                        <span class="number">53</span>
                                        <span class="label">CANDIDATES<br>SELECTED</span>
                                    </div>
                                    <span class="laurel-branch right"><img
                                            src="{{ asset('assets/images/flow-right.png') }}" /></span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span>Secured State</span><br>2nd, 3rd & 4th Ranks
                            </div>
                        </div>

                        <div class="card card-orange">
                            <div class="card-body">
                                <div class="card-header-info">
                                    <span class="trophy-icon"><i class="fa-solid fa-trophy"></i></span>
                                    <div>
                                        <div class="year">2019 & 2017</div>
                                        <div class="exam-name">PGTRB BOTANY</div>
                                    </div>
                                </div>
                                <div class="laurel-wrapper">
                                    <span class="laurel-branch left"><img
                                            src="{{ asset('assets/images/flow-right.png') }}" /></span>
                                    <div class="selection-count">
                                        <span class="number">58</span>
                                        <span class="label">CANDIDATES<br>SELECTED</span>
                                    </div>
                                    <span class="laurel-branch right"><img
                                            src="{{ asset('assets/images/flow-right.png') }}" /></span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span>Produced Multiple</span><br>State Top Rank Holders
                            </div>
                        </div>
                    </div>

                </section>

                @include('frontend/landing-pages/star-archive')

                @include('frontend/landing-pages/about')

                @include('frontend/landing-pages/yt-video')

                @include('frontend/landing-pages/moment')




                <!--<div id="courses" class="service5-section-area mt-5"-->
                <!--    style="background: #002630; background-repeat: no-repeat; background-position: center; background-size: cover;">-->
                <!--    <div class="container">-->
                <!--        <div class="row">-->
                <!--            <div class="col-lg-6">-->
                <!--                <div class="service-header heading7 space-margin60">-->
                <!--                    <h5 class="bg-transparent"><span><img-->
                <!--                                src="{{ asset('landing/assets/img/icons/sub-logo1.svg') }}"-->
                <!--                                alt=""></span>Our Courses</h5>-->
                <!--                    <div class="space18"></div>-->
                <!--                    <h2 class="text-anime-style-3">Our Best Bespoke Solution</h2>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="row">-->
                <!--            <div class="col-lg-12">-->
                <!--                <div class="service5-slider-box owl-carousel">-->
                <!--                    <div class="service-slider-box">-->
                <!--                        <div class="space24"></div>-->
                <!--                        <div class="content-area">-->
                <!--                            <a href="service-single.html">Custom Edit Tool</a>-->

                <!--                            <p>Design your page in real time and see the results instantly. Create an-->
                <!--                                customize your all landing pages.</p>-->
                <!--                        </div>-->
                <!--                    </div>-->

                <!--                    <div class="service-slider-box">-->
                <!--                        <div class="space24"></div>-->
                <!--                        <div class="content-area">-->
                <!--                            <a href="service-single.html">Easy To Customize</a>-->

                <!--                            <p>We bring your ideas to life with mobile applications designed to deliver-->
                <!--                                results our team of expert.</p>-->
                <!--                        </div>-->
                <!--                    </div>-->

                <!--                    <div class="service-slider-box">-->
                <!--                        <div class="space24"></div>-->
                <!--                        <div class="content-area">-->
                <!--                            <a href="service-single.html">Built In Safety Chat</a>-->

                <!--                            <p>Ensuring your app reaches its full potential on iOS, Android, or both. From-->
                <!--                                the initial concept to post.</p>-->
                <!--                        </div>-->
                <!--                    </div>-->

                <!--                    <div class="service-slider-box">-->
                <!--                        <div class="space24"></div>-->
                <!--                        <div class="content-area">-->
                <!--                            <a href="service-single.html">Custom Edit Tool</a>-->

                <!--                            <p>Design your page in real time and see the results instantly. Create an-->
                <!--                                customize your all landing pages.</p>-->
                <!--                        </div>-->
                <!--                    </div>-->

                <!--                    <div class="service-slider-box">-->
                <!--                        <div class="space24"></div>-->
                <!--                        <div class="content-area">-->
                <!--                            <a href="service-single.html">Easy To Customize</a>-->

                <!--                            <p>We bring your ideas to life with mobile applications designed to deliver-->
                <!--                                results our team of expert.</p>-->
                <!--                        </div>-->
                <!--                    </div>-->

                <!--                    <div class="service-slider-box">-->
                <!--                        <div class="space24"></div>-->
                <!--                        <div class="content-area">-->
                <!--                            <a href="service-single.html">Built In Safety Chat</a>-->

                <!--                            <p>Ensuring your app reaches its full potential on iOS, Android, or both. From-->
                <!--                                the initial concept to post.</p>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="faq-inner-section-area sp1" id="faq">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 m-auto">
                                <div class="heading2 text-center space-margin60">
                                    <h2>Frequently Asked Question</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="faq-widget-area">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab" tabindex="0">

                                            <div class="faq-section-area">
                                                <div class="row">
                                                    <div class="col-lg-10 m-auto">
                                                        <div class="accordian-area">
                                                            <div class="accordion faq-accordion" id="accordionExample">

                                                                @php
                                                                    $faqs = json_decode($page->faqs, true);
                                                                @endphp

                                                                @if (isset($page) && !empty($page->faqs) && !empty($faqs))

                                                                    @foreach ($faqs as $faqIndex => $faq)
                                                                        @php
                                                                            $questions = array_map(
                                                                                'trim',
                                                                                explode('/ ', $faq['question'] ?? ''),
                                                                            );
                                                                            $answers = array_map(
                                                                                'trim',
                                                                                explode('/ ', $faq['answer'] ?? ''),
                                                                            );
                                                                        @endphp

                                                                        @foreach ($questions as $index => $title)
                                                                            @php
                                                                                $collapseId =
                                                                                    'collapse_' .
                                                                                    $faqIndex .
                                                                                    '_' .
                                                                                    $index;
                                                                                $isFirst =
                                                                                    $faqIndex == 0 && $index == 0;
                                                                            @endphp

                                                                            <div
                                                                                class="accordion-item faq-item mb-3 border-0 bg-transparent">

                                                                                <h2 class="accordion-header">
                                                                                    <button
                                                                                        class="accordion-button {{ $isFirst ? '' : 'collapsed' }}"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#{{ $collapseId }}"
                                                                                        aria-expanded="{{ $isFirst ? 'true' : 'false' }}"
                                                                                        aria-controls="{{ $collapseId }}">

                                                                                        {{ strip_tags($title) }}

                                                                                    </button>
                                                                                </h2>

                                                                                <div id="{{ $collapseId }}"
                                                                                    class="accordion-collapse collapse {{ $isFirst ? 'show' : '' }}"
                                                                                    data-bs-parent="#accordionExample">

                                                                                    <div class="accordion-body p-4">
                                                                                        {!! $answers[$index] ?? '' !!}
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endforeach
                                                                @else
                                                                    <p class="text-center">
                                                                        No FAQs available at this time.
                                                                    </p>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function loadCaptcha() {
            $.get("{{ url('/math-captcha') }}", function(data) {
                $('#math-question').val(data.question);
            });
        }

        $(document).ready(function() {

            // Load captcha initially
            loadCaptcha();

            $('#contactForm4').on('submit', function(e) {
                e.preventDefault();

                let form = $(this);
                let btn = $('#submitBtn');

                let errors = {};

                // Reset UI
                $('.form4-error').html('');
                $('.form-control').removeClass('form4-invalid');
                $('#successAlert4').addClass('d-none');

                // Values
                let name = $('[name="name"]').val().trim();
                let phone = $('[name="phone"]').val().trim();
                let email = $('[name="email"]').val().trim();
                let subject = $('[name="subject"]').val().trim();
                let message = $('[name="message"]').val().trim();
                let captcha = $('[name="captcha"]').val();

                // Validation
                if (!name)
                    errors.name = "Name is required";
                else if (!/^[A-Za-z\s]+$/.test(name))
                    errors.name = "Only letters allowed";

                if (!phone)
                    errors.phone = "Phone is required";
                else if (!/^[6-9][0-9]{9}$/.test(phone))
                    errors.phone = "Invalid phone number";

                if (!email)
                    errors.email = "Email is required";
                else if (!/^\S+@\S+\.\S+$/.test(email))
                    errors.email = "Invalid email";

                if (!subject)
                    errors.subject = "Course is required";

                if (!message)
                    errors.message = "Message is required";
                else if (message.length < 5)
                    errors.message = "Message must be at least 5 characters";

                // Captcha Validation
                if (!captcha)
                    errors.captcha = "Captcha required";

                // Show Errors
                if (Object.keys(errors).length > 0) {

                    $.each(errors, function(key, value) {

                        let input = $('[name="' + key + '"]');

                        input.addClass('form4-invalid');

                        input.closest('.mb-3, .col-md-6')
                            .find('.form4-error')
                            .html(value);
                    });

                    return;
                }

                // Button Loading
                btn.prop('disabled', true);

                btn.find('.btn-text').addClass('d-none');
                btn.find('.btn-loader').removeClass('d-none');

                // AJAX Submit
                $.ajax({
                    url: form.attr('action'),
                    type: "POST",
                    data: form.serialize(),

                    success: function(response) {

                        $('#successAlert4').removeClass('d-none');

                        form[0].reset();

                        loadCaptcha();

                        setTimeout(() => {
                            $('#successAlert4').addClass('d-none');
                        }, 4000);
                    },

                    error: function(xhr) {

                        if (xhr.status === 422) {

                            let serverErrors = xhr.responseJSON.errors;

                            $.each(serverErrors, function(key, value) {

                                let input = $('[name="' + key + '"]');

                                input.addClass('form4-invalid');

                                input.closest('.mb-3, .col-md-6')
                                    .find('.form4-error')
                                    .html(value[0]);
                            });
                        }
                    },

                    complete: function() {

                        btn.prop('disabled', false);

                        btn.find('.btn-text').removeClass('d-none');
                        btn.find('.btn-loader').addClass('d-none');
                    }
                });

            });

        });
    </script>
    <script>
        $(document).ready(function() {

            var $carousel = $('#carouselExampleIndicators');

            $carousel.carousel({
                interval: 3000,
                pause: false,
                wrap: true
            });

            // Next button
            $('.carousel-control-next').click(function(e) {
                e.preventDefault();
                $carousel.carousel('next');
            });

            // Prev button
            $('.carousel-control-prev').click(function(e) {
                e.preventDefault();
                $carousel.carousel('prev');
            });

        });
    </script>
@endsection
