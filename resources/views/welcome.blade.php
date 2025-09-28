<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Туроператор по Туркменистану. Организуем туры к древнему Мерву, каньону Янгикала, конюшням Ахал-Теке и другим достопримечательностям.">
    <meta name="keywords" content="туры Туркменистан, Мерв, Дарваза, каньон Янгикала, Ахал-Теке, туркменские ковры, Великий Шелковый путь">
    <title>TmTourism - Туркменистан с лучшим туроператором</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🐪</text></svg>">

    <!-- Bootstrap 4 CSS -->
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- jQuery -->
{{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>

    <!-- Bootstrap 4 JS -->
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>--}}
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>


    <style>
        :root {
            --primary-color: #008C8C;
            --sand-color: #D9B166;
            --text-color: #212529;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            transition: all 0.3s;
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.5rem;
        }

        .nav-link {
            color: var(--text-color) !important;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .hero-content {
            z-index: 1;
            max-width: 800px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: #006b6b;
            border-color: #006b6b;
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .section-title {
            position: relative;
            margin-bottom: 2.5rem;
            padding-bottom: 15px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .section-divider {
            background-color: var(--sand-color);
            height: 8px;
            width: 100%;
        }

        .card {
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
            border: none;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .timeline {
            position: relative;
            padding: 20px 0;
        }

        .timeline:before {
            content: '';
            position: absolute;
            left: 50%;
            width: 2px;
            height: 100%;
            background-color: var(--primary-color);
            transform: translateX(-50%);
        }

        .timeline-item {
            display: flex;
            margin-bottom: 40px;
            position: relative;
            width: 100%;
        }

        .timeline-content {
            position: relative;
            width: 45%;
            padding: 20px;
            border-radius: 8px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .timeline-icon {
            position: absolute;
            top: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: auto;
        }

        .timeline-item:nth-child(odd) .timeline-icon {
            right: -30px;
        }

        .timeline-item:nth-child(even) .timeline-icon {
            left: -30px;
        }

        .guide-card {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .guide-card:hover {
            transform: translateY(-5px);
        }

        .guide-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 15px;
            border: 3px solid var(--primary-color);
        }

        .carousel-item {
            /* padding: 40px 20px; */
            text-align: center;
        }

        .testimonial-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 3px solid var(--primary-color);
        }

        .contact-icon {
            font-size: 24px;
            color: var(--primary-color);
            margin-right: 10px;
        }

        .social-icon {
            font-size: 28px;
            color: var(--primary-color);
            margin-right: 15px;
            transition: color 0.3s;
        }

        .social-icon:hover {
            color: var(--sand-color);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0, 140, 140, 0.25);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }

            .timeline:before {
                left: 30px;
            }

            .timeline-content {
                width: calc(100% - 80px);
                margin-left: 80px !important;
            }

            .timeline-icon {
                left: 0 !important;
                right: auto;
            }
        }
    </style>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="80">
<!-- Навигация -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#" id="logo">TmTourism</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#tours">Туры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#culture">Культура</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#routes">Маршруты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#guides">Гиды</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Отзывы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero-секция с каруселью -->
@livewire('carousel-component')

<div class="section-divider"></div>

@livewire('home.tours-section')

<div class="section-divider"></div>

@livewire('home.culture-section')

<div class="section-divider"></div>

@livewire('home.routes-section')

<div class="section-divider"></div>

@livewire('home.guides-section')

<div class="section-divider"></div>

@livewire('home.testimonials-section')

<div class="section-divider"></div>

@livewire('home.contact-section')

<!-- Футер -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p>&copy; 2023 TurkmenTravel. Все права защищены.</p>
    </div>
</footer>

<script>
    $(document).ready(function() {
        // Плавная прокрутка при навигации
        $('a[href*="#"]').on('click', function(e) {
            e.preventDefault();

            if ($(this).attr('href') === '#') return;

            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 70
            }, 500);
        });

        // Scroll to top по клику на логотип
        $('#logo').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 500);
        });

        // Обработка формы теперь в Livewire компоненте

        // Изменение навбара при скролле
        $(window).scroll(function() {
            if ($(window).scrollTop() > 50) {
                $('.navbar').css('padding', '10px 0');
                $('.navbar').css('box-shadow', '0 2px 10px rgba(0, 0, 0, 0.1)');
            } else {
                $('.navbar').css('padding', '15px 0');
                $('.navbar').css('box-shadow', 'none');
            }
        });
    });
</script>

<!-- Livewire Scripts -->
@livewireScripts
</body>
</html>
