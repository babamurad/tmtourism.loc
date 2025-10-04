<section id="tour" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">{{ $tour->title }}</h2>
        <div class="row">
            <div class="col-md-12 p-2">
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
                        @if(!empty($tour->description) && is_string($tour->description))
                            <div class="card-text">{!! $tour->description !!}</div>
                        @endif
                        
                        @if($tour->map_id)
                            <div class="mt-4 mb-4 px-3" style="width: 100%; height: 45rem;">
                                <iframe 
                                    src="https://www.google.com/maps/d/embed?mid={{ $tour->map_id }}&z=7.2"
                                    width="100%" 
                                    height="100%" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy">
                                </iframe>
                            </div>
                        @endif
                        
                        <div class="d-flex justify-content-between align-items-center p-1 mt-3">
                            <span class="text-muted">{{ $tour->duration_days }} дней</span>
                            <span class="font-weight-bold text-primary" style="font-size: 1.2rem; color: #ff6600;">{{ number_format($tour->base_price_cents / 100, 0, ',', ' ') }} ₽</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
