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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    <!-- jQuery -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>

    <!-- Bootstrap 4 JS -->
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>

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
                <li class="nav-item"><a class="nav-link" href="#tours">Туры</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="#about">О нас</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <!-- Hero-секция с каруселью -->
    @livewire('carousel-component')
    {{ $slot }}

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

</body>
</html>
