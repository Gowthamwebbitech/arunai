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
        top: 80px;
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
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

<div class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Gallery</div>
            <h2 class="section-title">Our <span class="accent">Moments</span></h2>
            <p class="section-subtitle">Explore memorable moments from events, celebrations and everyday
                campus
                life.
            </p>
        </div>
        <div class="image-gallery" id="galleryContainer">
            @foreach ($gallery as $item)
                <div class="gallery-item" data-cat="{{ $item->title }}">
                    <div class="gallery-placeholder">
                        <img src="{{ asset('uploads/gallery/' . $item->image) }}" />
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

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const lightbox = document.getElementById("lightbox");
        const lightboxImg = document.querySelector(".lightbox-img");
        const images = [...document.querySelectorAll(".gallery-item img")];

        let current = 0;

        document.addEventListener("click", (e) => {

            if (e.target.classList.contains("open-lightbox")) {
                const img = e.target.closest(".gallery-item").querySelector("img");
                current = images.indexOf(img);
                lightboxImg.src = images[current].src;
                lightbox.style.display = "block";
            }

            if (e.target.classList.contains("next-btn")) {
                current = (current + 1) % images.length;
                lightboxImg.src = images[current].src;
            }

            if (e.target.classList.contains("prev-btn")) {
                current = (current - 1 + images.length) % images.length;
                lightboxImg.src = images[current].src;
            }

            if (
                e.target.classList.contains("close-btn") ||
                e.target.id === "lightbox"
            ) {
                lightbox.style.display = "none";
            }

        });

    });
</script>
