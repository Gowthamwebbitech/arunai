<style>
    .video-grid {
        display: flex;
        /* grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); */
        gap: 1.5rem;
    }

    .video-card {
        background: var(--dark-2);
        border-radius: 18px;
        overflow: hidden;
        transition: var(--transition);
        width: 300px;
    }

    .video-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--shadow);
    }

    .video-thumb {
        aspect-ratio: 16/9;
        background: linear-gradient(135deg, #0a1f0e, #1a5c2a);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 3rem;
        color: rgba(255, 255, 255, 0.2);
    }

    .play-btn {
        position: absolute;
        width: 54px;
        height: 54px;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--green-dark);
        font-size: 1.1rem;
        transition: var(--transition);
        padding-left: 4px;
    }

    .video-thumb:hover .play-btn {
        transform: scale(1.1);
        background: var(--green-light);
        color: var(--white);
    }

    .video-info {
        padding: 1.2rem;
    }

    .video-info h3 {
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--white);
        margin-bottom: 0.3rem;
    }

    .video-info span {
        font-size: 0.78rem;
        color: rgba(255, 255, 255, 0.4);
    }
</style>

<div class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">Videos</div>
            <h2 class="section-title">Watch Our <span class="accent">Stories</span></h2>
            <p class="section-subtitle">From student success stories to campus events – relive the best
                moments of
                Arunai Academy.</p>
        </div>
        <div class="video-grid">
            @foreach ($videos as $video)
                @if ($video->embed_url)
                    <div class="video-card ">
                        <div class="video-thumb" style="overflow: unset">
                            <iframe width="100%" height="280" src="{{ $video->embed_url }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div style="text-align:center; margin-top:2.5rem;">
            <a href="{{ route('gallery.video') }}" class="btn-primary">View All →</a>
        </div>
    </div>
</div>
