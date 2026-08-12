@extends('frontend.layouts.app')


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

    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Image Gallery</h1>
            <p>Glimpses of life and milestones at Arunai Academy</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span>
                <span>Gallery</span><span class="breadcrumb-sep">›</span>
                <span>Image Gallery</span>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Gallery</div>
                <h2 class="section-title">Our <span class="accent">Moments</span></h2>
                <p class="section-subtitle">Explore memorable moments from events, celebrations and everyday campus life.
                </p>
            </div>

            <div class="gallery-filter">
                <button class="filter-btn active" data-filter="all">All Photos</button>
                 @foreach ($allYears as $year)
                    <button class="filter-btn "
                            data-filter="{{ $year }}">
                        {{ $year }}
                    </button>
                @endforeach
            </div>

            <div class="image-gallery" id="galleryContainer">

            </div>
        </div>
    </div>

    <div id="lightbox" class="lightbox">
        <span class="close-btn">&times;</span>
        <span class="prev-btn">&#10094;</span>
        <img class="lightbox-img" src="">
        <span class="next-btn">&#10095;</span>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let galleryData = [];

        $(document).ready(function() {

            // Load gallery once
            $.ajax({
                url: "{{ route('gallery.data') }}",
                type: "GET",
                success: function(data) {
                    galleryData = data;
                    renderGallery('all');
                }
            });

            // Filter buttons
            $(document).on('click', '.filter-btn', function() {
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');

                let year = $(this).data('filter');
                renderGallery(year);
            });

            function renderGallery(filter) {
                let html = '';

                galleryData.forEach(function(item) {

                    if (filter === 'all' || item.title == filter) {
                        html += `
                    <div class="gallery-item" data-cat="${item.title}">
                        <div class="gallery-placeholder">
                             <img src="{{ asset('uploads/gallery/${item.image}') }}" alt="Government Teacher Botany Coaching Tamil Nadu" />
                        </div>
                        <div class="gallery-overlay open-lightbox"></div>
                    </div>
                `;
                    }

                });

                $('#galleryContainer').html(html);
            }

        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

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

            document.body.addEventListener("click", function(e) {
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
