<!-- Секция Туры -->
<section id="tours" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Наши туры</h2>
        <div class="row">
            @forelse($tours as $tour)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($tour->media->first())
                            <img src="{{ $tour->media->first()->url }}" class="card-img-top" alt="{{ $tour->title }}" loading="lazy">
                        @else
                            <img src="https://images.unsplash.com/photo-1580502304784-8985b7eb7260?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=338&q=80" class="card-img-top" alt="{{ $tour->title }}" loading="lazy">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $tour->title }}</h5>
                            <p class="card-text">{{ Str::limit($tour->description, 150) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted">{{ $tour->duration_days }} дней</span>
                                <span class="font-weight-bold text-primary">{{ number_format($tour->base_price_cents / 100, 0, ',', ' ') }} ₽</span>
                            </div>
                            <a href="#" class="btn btn-outline-primary mt-2">Подробнее</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <h4>Туры скоро появятся</h4>
                        <p class="text-muted">Мы работаем над добавлением новых туров</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
