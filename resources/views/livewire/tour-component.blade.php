<section id="tour" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">{{ $tour->title }}</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div id="tourCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @forelse($tour->media as $index => $mediaItem)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img src="{{ $mediaItem->url }}" class="d-block w-100" alt="{{ $tour->title }}" loading="lazy">
                                </div>
                            @empty
                                <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1580502304784-8985b7eb7260?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=338&q=80" class="d-block w-100" alt="{{ $tour->title }}" loading="lazy">
                                </div>
                            @endforelse
                        </div>
                        @if($tour->media->count() > 1)
                            <a class="carousel-control-prev" href="#tourCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#tourCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        @endif
                    </div>
                    <div class="card-body">
                        @if(!empty($tour->description))
                            <div class="card-text">{!! is_array($tour->description) ? implode('', $tour->description) : $tour->description !!}</div>
                        @endif
                        
                        @if($tour->map_id)
                            <div class="mt-4 mb-4" style="width: 100%; height: 45rem;">
                                <iframe 
                                    src="https://www.google.com/maps/d/embed?mid={{ $tour->map_id }}&z=7.2&ehbc=008c8c"
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
