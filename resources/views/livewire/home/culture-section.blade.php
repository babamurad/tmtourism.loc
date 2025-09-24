<!-- Секция Культура -->
<section id="culture" class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Культура Туркменистана</h2>
        <div class="timeline">
            @forelse($cultureItems as $index => $item)
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            <i class="{{ $item->icon }}"></i>
                        </div>
                        <h4>{{ $item->title }}</h4>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            @empty
                <div class="text-center py-5">
                    <h4>Информация о культуре скоро появится</h4>
                    <p class="text-muted">Мы работаем над добавлением культурных особенностей</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
