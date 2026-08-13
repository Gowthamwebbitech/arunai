@extends('frontend.layouts.app')

@section('content')

    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Video Gallery</h1>
            <p>Inspiring stories, events and learning content from our campus</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span>
                <span>Gallery</span><span class="breadcrumb-sep">›</span>
                <span>Video Gallery</span>
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
                    @php
                        preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([^&\?\/]+)/', $video->embed_url, $matches);
                        $videoId = $matches[1] ?? '';
                    @endphp

                    @if($videoId)
                        <div class="video-card reveal">
                            <a href="https://www.youtube.com/watch?v={{ $videoId }}" target="_blank" rel="noopener noreferrer"
                                class="video-thumb">

                                <img src="https://img.youtube.com/vi/{{ $videoId }}/mqdefault.jpg" srcset="https://img.youtube.com/vi/{{ $videoId }}/mqdefault.jpg 320w,
                                     https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg 480w"
                                    sizes="(max-width: 576px) 100vw, 373px"
                                    alt="YouTube video player: Arunai Academy student achievement" loading="lazy" width="100%"
                                    height="280">

                                <span class="play-icon">
                                    <i class="fa-solid fa-play"></i>
                                </span>

                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
