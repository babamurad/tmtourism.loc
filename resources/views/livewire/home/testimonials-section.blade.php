<!-- Секция Отзывы -->
<section id="testimonials" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Отзывы наших клиентов</h2>
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @forelse($reviews as $index => $review)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                             srcset="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80 320w, https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80 768w, https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80 1200w"
                             sizes="(max-width: 320px) 320px, (max-width: 768px) 768px, 1200px"
                             class="testimonial-img" alt="{{ $review->user->name ?? 'Клиент' }}" loading="lazy">
                        <div class="testimonial-content">
                            <h5>{{ $review->user->name ?? 'Анонимный клиент' }}</h5>
                            <div class="rating mb-2">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-muted' }}"></i>
                                @endfor
                            </div>
                            <p class="font-italic">"{{ $review->comment }}"</p>
                        </div>
                    </div>
                @empty
                    <div class="carousel-item active">
                        <div class="testimonial-content">
                            <h5>Отзывы скоро появятся</h5>
                            <p class="font-italic">Мы работаем над добавлением отзывов наших клиентов</p>
                        </div>
                    </div>
                @endforelse
            </div>
            @if($reviews->count() > 1)
                <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            @endif
        </div>
    </div>
</section>
