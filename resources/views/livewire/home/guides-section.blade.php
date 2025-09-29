<!-- Секция Гиды -->
<section id="guides" class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Наши гиды</h2>
        <div class="row">
            @forelse($guides as $guide)
                <div class="col-md-4 mb-4">
                    <div class="guide-card text-center">
                        @if($guide->image)
                            <img src="{{ $guide->image }}"
                                 srcset="{{ $guide->image }} 320w, {{ $guide->image }} 768w, {{ $guide->image }} 1200w"
                                 sizes="(max-width: 320px) 320px, (max-width: 768px) 768px, 1200px"
                                 class="guide-img" alt="{{ $guide->name }}" loading="lazy">
                        @else
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80" class="guide-img" alt="{{ $guide->name }}" loading="lazy">
                        @endif
                        <h4>{{ $guide->name }}</h4>
                        <p>{{ $guide->description }}</p>
                        @if($guide->specialization)
                            <p class="text-muted"><small>{{ $guide->specialization }}</small></p>
                        @endif
                        <div class="languages">
                            @foreach($guide->languages as $lang)
                                <span class="badge badge-primary">{{ strtoupper($lang) }}</span>
                            @endforeach
                        </div>
                        @if($guide->experience_years > 0)
                            <p class="text-muted"><small>{{ $guide->experience_years }} лет опыта</small></p>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <h4>Информация о гидах скоро появится</h4>
                        <p class="text-muted">Мы работаем над добавлением информации о наших гидах</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
