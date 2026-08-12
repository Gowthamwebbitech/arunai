@extends('frontend.layouts.app')

@section('content')
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Our Star Achievers</h1>
            <p>Celebrating the brilliance of students who made us proud</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span><span>Achievers</span>
            </div>
        </div>
    </section>

    <div class="section-header pt-20">
        <div class="section-tag">Our Pride</div>
        <h2 class="section-title">Excellence <span class="accent">Personified</span></h2>
    </div>

    <div
        style="background:var(--white);padding:1.5rem 2rem;box-shadow:0 2px 20px rgba(0,0,0,0.05);position:sticky;top:80px;z-index:100;">
        <div style="max-width:1400px;margin:0 auto;display:flex;gap:0.5rem;flex-wrap:wrap;justify-content:center;">
            <button class="filter-btn active" data-filter="all" onclick="filterAchievers('all',this)">All Years</button>
            @foreach ($years as $year)
                <button class="filter-btn" data-filter="{{ $year }}"
                    onclick="filterAchievers('{{ $year }}',this)">{{ $year }}</button>
            @endforeach

        </div>
    </div>

    <div class="section pt-0 achivers-section pt-4">
        <div class="container">
            <div class="achievers-grid" id="achievers-grid">
                {{-- 2022 --}}
                @foreach ($achievers as $achiever)
                    <div class="card achiever-card" data-year="{{ $achiever->year }}">
                        <div class="image-area">
                            <img src="{{ asset('uploads/achievers/' . $achiever->image) }}" alt="{{ $achiever->name }}">
                            <div class="mark-wing green">MARK : {{ $achiever->mark }}</div>
                        </div>
                        <div class="details">
                            <h3>{{ $achiever->name }}</h3>
                            <h5 style="font-size: 14px">{{ $achiever->category }}</h5>
                            <p>{{ $achiever->place }}</p>
                            <div class="accent-border"></div>
                        </div>
                        @if(!empty($achiever->rank))
                            <div class="rank-badge">
                                <i class="fa fa-star"></i>State Rank :
                                <div class="rank-text">
                                    <span style="font-weight: 800; color: #000">{{ $achiever->rank }}</span>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Duplicate cards as needed -->
@endsection

<script>

    function filterAchievers(year, btn) {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        document.querySelectorAll('#achievers-grid .achiever-card').forEach(card => {
            card.style.display = (year === 'all' || card.dataset.year === year) ? '' : 'none';
        });
    }

    function filterAchievers(year, btn) {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        document.querySelectorAll('.achiever-card').forEach(card => {
            if (year === 'all' || card.getAttribute('data-year') === year) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
