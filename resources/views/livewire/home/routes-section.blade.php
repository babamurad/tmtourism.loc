<!-- Секция Маршруты -->
<section id="routes" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Популярные маршруты</h2>
        <div class="accordion" id="routesAccordion">
            @forelse($routes as $index => $route)
                <div class="card">
                    <div class="card-header" id="heading{{ $route->id }}">
                        <h5 class="mb-0">
                            <button class="btn btn-link {{ $index === 0 ? '' : 'collapsed' }}" type="button" 
                                    data-toggle="collapse" data-target="#collapse{{ $route->id }}" 
                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                    aria-controls="collapse{{ $route->id }}">
                                {{ $route->title }}
                            </button>
                        </h5>
                    </div>
                    <div id="collapse{{ $route->id }}" 
                         class="collapse {{ $index === 0 ? 'show' : '' }}" 
                         aria-labelledby="heading{{ $route->id }}" 
                         data-parent="#routesAccordion">
                        <div class="card-body">
                            <p><strong>Местоположение:</strong> {{ $route->location }}</p>
                            <p><strong>Активности:</strong> {{ $route->activities }}</p>
                            <p>{{ $route->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-5">
                    <h4>Маршруты скоро появятся</h4>
                    <p class="text-muted">Мы работаем над добавлением новых маршрутов</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
