@extends('frontend.layouts.app')

@section('meta_title', '  ')

@section('meta_description,  ')

@section('meta_keyworlds', ' ')

@section('content')

    <style>
        .lightbox {
            display: none;
            position: fixed;
            z-index: 9999;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            text-align: center;
        }

        .lightbox-img {
            max-width: 80%;
            max-height: 80%;
            margin-top: 40px;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 40px;
            font-size: 40px;
            color: #fff;
            cursor: pointer;
        }

        .prev-btn,
        .next-btn {
            position: absolute;
            top: 50%;
            font-size: 35px;
            color: #fff;
            cursor: pointer;
            user-select: none;
        }

        .prev-btn {
            left: 40px;
        }

        .next-btn {
            right: 40px;
        }
    </style>

    <div id="carouselExampleIndicators" class="carousel home-banner" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img class="d-block w-100" src="{{ asset('uploads/banners/' . $banner->image) }}"
                        alt="TN TRB Botany Classes Tamil Nadu">
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
    <section>
        <div class="title-card text-center">
            <h1 class="seo-title">Tamil Nadu’s Trusted <br class="d-none d-md-block"><span>PGTRB & UGTRB </span> <br
                    class="d-none d-md-block">Botany Coaching Institute in
                Dharmapuri</h1>
            <div>
                <a href="https://share.google/7IiLoZ8fw4JXujqp1" target="_blank">
                    <div class="google-review-card">
                        <div class="review-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="review-count">
                            5.0 | 510+ Reviews
                        </div>
                        <div class="google-logo">
                            <img src="{{ asset('assets/images/google-logo.png') }}"
                                alt="Botany Exam Coaching Centre Tamil Nadu" />
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </section>
    <section class="achievement-section py-5">
        <div class="section-header mb-4">

            <h2 class="section-title">Our <span class="accent">Botany Coaching</span> Achievements in Tamil Nadu</h2>
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
                        <span class="laurel-branch left"><img src="{{ asset('assets/images/flow-right.png') }}"
                                alt="Assistant Professor Botany Coaching Tamil Nadu" /></span>
                        <div class="selection-count">
                            <span class="number">72</span>
                            <span class="label">CANDIDATES<br>SELECTED</span>
                        </div>
                        <span class="laurel-branch right"><img src="{{ asset('assets/images/flow-right.png') }}"
                                alt="College Lecturer Botany Coaching Tamil Nadu" /></span>
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
                        <span class="laurel-branch left"><img src="{{ asset('assets/images/flow-right.png') }}"
                                alt="Botany Recruitment Coaching Centre Tamil Nadu" /></span>
                        <div class="selection-count">
                            <span class="number">68</span>
                            <span class="label">CANDIDATES<br>SELECTED</span>
                        </div>
                        <span class="laurel-branch right"><img src="{{ asset('assets/images/flow-right.png') }}"
                                alt="TNPSC Botany Coaching Centre Tamil Nadu" /></span>
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
                        <span class="laurel-branch left"><img src="{{ asset('assets/images/flow-right.png') }}"
                                alt="SET Botany Coaching Classes Tamil Nadu " /></span>
                        <div class="selection-count">
                            <span class="number">53</span>
                            <span class="label">CANDIDATES<br>SELECTED</span>
                        </div>
                        <span class="laurel-branch right"><img src="{{ asset('assets/images/flow-right.png') }}"
                                alt="CSIR NET Botany Coaching Centre Tamil Nadu" /></span>
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
                        <span class="laurel-branch left"><img src="{{ asset('assets/images/flow-right.png') }}"
                                alt="UGTRB Botany Coaching Centre Tamil Nadu" /></span>
                        <div class="selection-count">
                            <span class="number">58</span>
                            <span class="label">CANDIDATES<br>SELECTED</span>
                        </div>
                        <span class="laurel-branch right"><img src="{{ asset('assets/images/flow-right.png') }}"
                                alt="UGTRB Botany Coaching Institute Tamil Nadu" /></span>
                    </div>
                </div>
                <div class="card-footer">
                    <span>Produced Multiple</span><br>State Top Rank Holders
                </div>
            </div>
        </div>

    </section>

    <div class="academy-button-wrapper">
        <a href="{{ route('contact') }}" class="academy-btn academy-enroll-btn">
            Join now
        </a>
        <a href="{{ route('achievers_page') }}" class="academy-btn academy-result-btn">
            View Results
        </a>
        <a href="{{ route('study-material') }}" class="academy-btn academy-contact-btn">
            Study Material
        </a>
    </div>

    <!-- ══ ACHIEVERS SECTION ══ -->
    <div class="section our-achivers">
        <div class="container" style="overflow: hidden">
            <div class="section-header">
                <h2 class="section-title text-white">Star <span class="accent text-white">Achievers</span></h2>
                <h5 class="text-white">PGTRB 2025 achievers</h5>
                <p class="section-subtitle text-white">Celebrating the brilliance of our Botany achievers who continue to
                    set benchmarks of excellence in Tamil Nadu.</p>
            </div>
            <div class="swiper achievers-slider">
                <div class="swiper-wrapper">
                    @php
                        $hasRank = false;
                    @endphp

                    @foreach ($achievers as $achiever)

                        @if($achiever->rank)

                            @php
                                $hasRank = true;
                            @endphp

                            <div class="swiper-slide">
                                <div class="achiever-card">
                                    <div class="achiever-img">
                                        <div class="achiever-rank">
                                            State Rank <br>
                                            <span>{{ $achiever->rank }}</span>
                                        </div>
                                        <img src="{{ asset('uploads/achievers/' . $achiever->image) }}" alt="{{ $achiever->name }}">
                                    </div>
                                    <div class="achiever-content">
                                        <h3>{{ $achiever->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @if(!$hasRank)
                        <div class="swiper-slide">
                            <div class="achiever-content text-center">
                                <h3 style="color: #fff ;">No Rank Achievers Found</h3>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>
            <div style="text-align:center;margin-top:3.5rem;" class="d-flex align-items-center justify-content-center">
                <div class="me-2">
                    <a href="{{ route('achievers_page') }}" class="btn-primary">View All Achievers →</a>
                </div>

            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="about-grid">
                <div class="about-img-wrap reveal">
                    <div class="d-md-none d-block about-text text-start">
                        <div class="section-tag text-start">About Us</div>
                        <h2 class="section-title text-start">Building Dreams,<br /><span class="accent">One Student at a
                                Time</span>
                        </h2>
                    </div>
                    <div class="about-img-main">
                        <img src="{{ asset('assets/images/graduation-cap.webp') }}"
                            alt="UGTRB Botany Online Classes Tamil Nadu" />
                    </div>
                    <div class="about-badge-float">
                        <div class="big-num">15+</div>
                        <span>Years of Excellence</span>
                    </div>
                </div>
                <div class="about-text reveal">
                    <div class="d-md-block d-none">
                        <div class="section-tag">About Us</div>
                        <h2 class="section-title">Building Dreams,<br /><span class="accent">One Student at a Time</span>
                        </h2>
                    </div>
                    <p>Arunai Academy is a trusted Botany coaching centre in Dharmapuri, Tamil Nadu, established in 2012
                        with a focused approach to PGTRB and UGTRB Botany preparation.
                    </p>
                    <p>With years of dedicated experience, we have supported aspiring teachers through expert Botany
                        coaching, concept-based learning, structured study plans, regular practice, and examination-focused
                        guidance. Our commitment to quality education and student success has helped us build a strong
                        reputation among Botany aspirants across Tamil Nadu.
                    </p>
                    <p>At Arunai Academy, every student receives focused academic support designed to strengthen subject
                        knowledge, improve exam confidence, and prepare effectively for PGTRB and UGTRB Botany examinations.
                    </p>
                    <a href="{{ route('about') }}" class="btn-primary" style="margin-top:1rem;display:inline-flex;">Read
                        more →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ══ WHY CHOOSE US ══ -->
    <section class="why-arunai py-60">
        <div class="container">
            <div class="why-title">
                <h2 class="section-title">Why Choose <span class="accent">Arunai Academy?</span></h2>
                <p>We don’t follow ordinary coaching — we create rank holders.</p>
            </div>
            <div class="why-cards">
                <div class="why-box">Exclusive focus on Botany only</div>
                <div class="why-box">Deep concept-based teaching</div>
                <div class="why-box">Highly experienced expert faculty</div>
                <div class="why-box">Exam-oriented study materials</div>
                <div class="why-box">Regular test series & performance analysis</div>
                <div class="why-box">Previous year question trend analysis</div>
                <div class="why-box">Structured revision programs</div>
                <div class="why-box">Proven consistent success rate</div>
            </div>
        </div>
    </section>
    <div class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Videos</div>
                <h2 class="section-title">Watch Our <span class="accent">Stories</span></h2>
                <p class="section-subtitle">From student success stories to campus events – relive the best moments of
                    Arunai Academy.</p>
            </div>
            <div class="video-grid">
                @foreach ($videos as $video)
                    @if($video->embed_url)
                        <div class="video-card reveal">
                            <div class="video-thumb">
                                <iframe width="100%" height="280" src="{{ $video->embed_url }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div style="text-align:center; margin-top:1.5rem;">
                <a href="{{ route('gallery.video') }}" class="btn-primary">View All →</a>
            </div>
        </div>
    </div>



    <section id="study" class="study-material">
        <div class="container">
            <div class="why-title">
                <h2 class="section-title">Study Materials</h2>
            </div>
            <div class="card-grid">
                @foreach ($materials as $item)
                    <div class="pdf-card">
                        <img src="{{ asset('assets/images/pdf.png') }}" alt="PGTRB Botany Online Coaching Tamil Nadu ">
                        <h3>{{ $item->title }}</h3>
                        <a href="{{ asset('/uploads/materials/' . $item->pdf_file) }}" target="_blank" class="btn">View
                            PDF</a>
                    </div>
                @endforeach
            </div>
            <div style="text-align:center;margin-top:2.5rem;">
                <a href="{{ route('study-material') }}" class="btn-primary">View All→</a>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Gallery</div>
                <h2 class="section-title">Our <span class="accent">Moments</span></h2>
                <p class="section-subtitle">Explore memorable moments from events, celebrations and everyday campus
                    life.
                </p>
            </div>
            <div class="image-gallery" id="galleryContainer">
                @foreach ($gallery as $item)
                    <div class="gallery-item" data-cat="{{ $item->title }}">
                        <div class="gallery-placeholder">
                            <img src="{{ asset('uploads/gallery/' . $item->image) }}"
                                alt="PGTRB Botany Live Classes Tamil Nadu" />
                        </div>
                        <div class="gallery-overlay"><i class="fa-solid fa-magnifying-glass open-lightbox"></i></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="lightbox" class="lightbox">
        <span class="close-btn">&times;</span>
        <span class="prev-btn">&#10094;</span>
        <img class="lightbox-img" src="">
        <span class="next-btn">&#10095;</span>
    </div>

    <div class="offer py-60">
        <div class="container">
            <div class="admission-banner">
                <div class="banner-bg-icons">
                    <span class="bg-icon" style="top:10%;left:45%">📚</span>
                    <span class="bg-icon" style="top:60%;left:42%">📖</span>
                    <span class="bg-icon" style="top:15%;left:55%">🎓</span>
                    <span class="bg-icon" style="top:65%;left:52%">✏️</span>
                    <span class="bg-icon" style="top:30%;left:60%">📝</span>
                </div>
                <div class="banner-light-arc"></div>
                <div class="banner-content">
                    <span class="banner-script">Academy</span>
                    <div class="banner-admission">ADMISSION <span class="banner-globe">🌍</span></div>
                    <div class="banner-open">OPEN FOR 2026</div>
                    <a href="{{ route('contact') }}" class="banner-btn">ENROL NOW</a>
                </div>

                <div class="banner-student">
                    {{-- Replace with your actual <img> tag --}}
                    <img src="{{ asset('assets/images/offer.png') }}" alt="Botany Online Coaching Centre Tamil Nadu" />
                </div>
            </div>
        </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=919500244679&text=Hello%20Arunai%20Academy" class="whatsapp-float"
        target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg"
            alt="Botany Training Institute Tamil Nadu">
    </a>

    <a href="tel:9500244679" class="call-float" rel="noopener" aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
            <path
                d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
        </svg>
    </a>

    <a href="https://www.youtube.com/@arunaiacademy9219" target="_blank" class="youtube-float" rel="noopener"
        aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
            <path
                d="M581.7 188.1C575.5 164.4 556.9 145.8 533.4 139.5C490.9 128 320.1 128 320.1 128C320.1 128 149.3 128 106.7 139.5C83.2 145.8 64.7 164.4 58.4 188.1C47 231 47 320.4 47 320.4C47 320.4 47 409.8 58.4 452.7C64.7 476.3 83.2 494.2 106.7 500.5C149.3 512 320.1 512 320.1 512C320.1 512 490.9 512 533.5 500.5C557 494.2 575.5 476.3 581.8 452.7C593.2 409.8 593.2 320.4 593.2 320.4C593.2 320.4 593.2 231 581.8 188.1zM264.2 401.6L264.2 239.2L406.9 320.4L264.2 401.6z" />
        </svg>
    </a>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>ipt>

    <script>
        $(document).ready(function () {

            var $carousel = $('#carouselExampleIndicators');

            $carousel.carousel({
                interval: 3000,
                pause: false,
                wrap: true
            });

            // Next button
            $('.carousel-control-next').click(function (e) {
                e.preventDefault();
                $carousel.carousel('next');
            });

            // Prev button
            $('.carousel-control-prev').click(function (e) {
                e.preventDefault();
                $carousel.carousel('prev');
            });

        });
    </script>

    <script>
        var swiper = new Swiper(".achievers-slider", {
            loop: true,
            spaceBetween: 25,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
                dynamicMainBullets: 4,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                576: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 4
                },
                992: {
                    slidesPerView: 4
                }
            }
        });
    </script>


    <script>
        document.querySelectorAll('.year-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.year-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    {{--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const lightbox = document.getElementById("lightbox");
            const lightboxImg = document.querySelector(".lightbox-img");
            const closeBtn = document.querySelector(".close-btn");
            const nextBtn = document.querySelector(".next-btn");
            const prevBtn = document.querySelector(".prev-btn");

            let images = [];
            let currentIndex = 0;

            function updateImages() {
                images = Array.from(document.querySelectorAll(".gallery-item img"));
            }

            updateImages();

            document.body.addEventListener("click", function (e) {
                if (e.target.classList.contains("open-lightbox")) {
                    updateImages();
                    const img = e.target.closest(".gallery-item").querySelector("img");
                    currentIndex = images.indexOf(img);
                    openLightbox(images[currentIndex].src);
                }
            });

            function openLightbox(src) {
                lightbox.style.display = "block";
                lightboxImg.src = src;
            }

            function showNext() {
                currentIndex = (currentIndex + 1) % images.length;
                lightboxImg.src = images[currentIndex].src;
            }

            function showPrev() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                lightboxImg.src = images[currentIndex].src;
            }

            nextBtn.addEventListener("click", showNext);
            prevBtn.addEventListener("click", showPrev);

            closeBtn.addEventListener("click", () => {
                lightbox.style.display = "none";
            });

        });
    </script>



@endsection
