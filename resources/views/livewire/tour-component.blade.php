<section id="tour" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">{{ $tour->title }}</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    @if($tour->media->first())
                        <img src="{{ $tour->media->first()->url }}"
                             srcset="{{ $tour->media->first()->url }} 320w, {{ $tour->media->first()->url }} 768w, {{ $tour->media->first()->url }} 1200w"
                             sizes="(max-width: 320px) 320px, (max-width: 768px) 768px, 1200px"
                             class="card-img-top" alt="{{ $tour->title }}" loading="lazy">
                    @else
                        <img src="https://images.unsplash.com/photo-1580502304784-8985b7eb7260?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=338&q=80" class="card-img-top" alt="{{ $tour->title }}" loading="lazy">
                    @endif
                    <div class="card-body">
                        <p class="card-text">{{ $tour->description }}</p>
                        <div class="d-flex justify-content-between align-items-center p-1">
                             <span class="text-muted">{{ $tour->duration_days }} дней</span>
                             <span class="font-weight-bold text-primary" style="font-size: 1.2rem; color: #ff6600;">{{ number_format($tour->base_price_cents / 100, 0, ',', ' ') }} ₽</span>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>