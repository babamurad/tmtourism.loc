<div>

    <div id="mainCarousel" class="carousel slide hero-carousel" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            @foreach($slides as $index => $slide)
            <li data-target="#mainCarousel" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($slides as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset('uploads/' . $slide['image']) }}" class="d-block w-100" alt="{{ $slide['alt'] }}" loading="lazy" style="background-repeat: no-repeat; background-size: cover;">
                    <div class="carousel-caption">
                        <h3>{{ $slide['title'] }}</h3>
                        <p>{!! $slide['description'] !!}</p>
                        <a href="{{ $slide['button_link'] }}" class="btn btn-primary btn-lg">{{ $slide['button_text'] }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Предыдущий</span>
        </a>
        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Следующий</span>
        </a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Инициализация карусели
            $('#mainCarousel').carousel({
                interval: 5000,
                wrap: true,
                keyboard: true
            });

            // Плавная прокрутка при клике на кнопки
            $('#mainCarousel .carousel-caption a').on('click', function(e) {
                const target = $(this).attr('href');
                if (target && target.startsWith('#')) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: $(target).offset().top - 70
                    }, 800);
                }
            });

            // Пауза карусели при наведении
            $('#mainCarousel').on('mouseenter', function() {
                $(this).carousel('pause');
            }).on('mouseleave', function() {
                $(this).carousel('cycle');
            });
        });
    </script>

    
</div>

