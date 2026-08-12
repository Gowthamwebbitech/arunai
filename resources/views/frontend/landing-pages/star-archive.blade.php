<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<style>
    .swiper-wrapper {
        height: 67%;
    }
</style>
<div class="section our-achivers">
    <div class="container" style="overflow: hidden">
        <div class="section-header">
            <h2 class="section-title text-white">Star <span class="accent text-white">Achievers</span>
            </h2>
            <h5 class="text-white">PGTRB 2025 achievers</h5>
            <p class="section-subtitle text-white">Celebrating the brilliance of our outstanding students
                who set
                benchmarks of excellence.</p>
        </div>
        <div class="swiper achievers-slider">
            <div class="swiper-wrapper">

                @php
                    $hasRank = false;
                @endphp

                @foreach ($achievers as $achiever)
                    @if ($achiever->rank)
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
                                    <img src="{{ asset('uploads/achievers/' . $achiever->image) }}"
                                        alt="{{ $achiever->name }}">
                                </div>
                                <div class="achiever-content">
                                    <h3>{{ $achiever->name }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                @if (!$hasRank)
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
        <div style="text-align:center;margin-top:3.5rem;">
            <a href="{{ route('achievers_page') }}" class="btn-primary">View All Achievers →</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
                slidesPerView: 3
            },
            992: {
                slidesPerView: 4
            }
        }
    });
</script>
