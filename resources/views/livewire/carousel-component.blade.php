<div>
    <style>
        .hero-carousel {
            height: 100vh;
            position: relative;
            overflow: hidden;
        }
        
        .hero-carousel .carousel-item {
            height: 100vh;
        }
        
        .hero-carousel .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .hero-carousel .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 10px;
            max-width: 800px;
        }
        
        .hero-carousel .carousel-caption h3 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: white;
        }
        
        .hero-carousel .carousel-caption p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: white;
        }
        
        .hero-carousel .carousel-control-prev,
        .hero-carousel .carousel-control-next {
            width: 5%;
            background: rgba(0, 0, 0, 0.3);
        }
        
        .hero-carousel .carousel-indicators {
            bottom: 20px;
        }
        
        .hero-carousel .carousel-indicators li {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
        }
        
        .hero-carousel .carousel-indicators .active {
            background-color: var(--primary-color, #008C8C);
        }
        
        @media (max-width: 768px) {
            .hero-carousel .carousel-caption h3 {
                font-size: 2rem;
            }
            
            .hero-carousel .carousel-caption p {
                font-size: 1rem;
            }
            
            .hero-carousel .carousel-caption {
                padding: 1rem;
                margin: 0 1rem;
            }
        }
    </style>

    <div id="mainCarousel" class="carousel slide hero-carousel" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            @foreach($slides as $index => $slide)
            <li data-target="#mainCarousel" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($slides as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset('uploads/' . $slide['image']) }}" class="d-block w-100" alt="{{ $slide['alt'] }}" loading="lazy">
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

