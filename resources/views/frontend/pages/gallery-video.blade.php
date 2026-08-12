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
                <p class="section-subtitle">From student success stories to campus events – relive the best moments of Arunai Academy.</p>
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
        </div>
    </div>

@endsection
