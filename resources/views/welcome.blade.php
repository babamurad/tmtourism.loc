<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Туроператор по Туркменистану. Организуем туры к древнему Мерву, каньону Янгикала, конюшням Ахал-Теке и другим достопримечательностям.">
    <meta name="keywords" content="туры Туркменистан, Мерв, Дарваза, каньон Янгикала, Ахал-Теке, туркменские ковры, Великий Шелковый путь">
    <title>TurkmenTravel - Туркменистан с лучшим туроператором</title>
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
        <a class="navbar-brand" href="#" id="logo">TurkmenTravel</a>
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

<!-- Секция Туры -->
<section id="tours" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Наши туры</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1580502304784-8985b7eb7260?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=338&q=80" class="card-img-top" alt="Древний Мерв" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Древний Мерв</h5>
                        <p class="card-text">Исследуйте руины одного из древнейших городов Центральной Азии, объекта Всемирного наследия ЮНЕСКО.</p>
                        <a href="#" class="btn btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1509316785289-025f5b846b35?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=338&q=80" class="card-img-top" alt="Каньон Янгикала" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Каньон Янгикала</h5>
                        <p class="card-text">Уникальные ландшафты "огненных гор", напоминающие марсианские пейзажи, поражают воображение.</p>
                        <a href="#" class="btn btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1553284965-5dd8352ff8bd?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=338&q=80" class="card-img-top" alt="Конюшни Ахал-Теке" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Конюшни Ахал-Теке</h5>
                        <p class="card-text">Знакомство с легендарными ахалтекинскими скакунами - "небесными конями" древних туркмен.</p>
                        <a href="#" class="btn btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Секция Культура -->
<section id="culture" class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Культура Туркменистана</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="fas fa-mosque"></i>
                    </div>
                    <h4>Исламская архитектура</h4>
                    <p>Величественные мечети и мавзолеи, украшенные изразцами и резьбой, отражают богатое духовное наследие туркменского народа.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="fas fa-carpet"></i>
                    </div>
                    <h4>Ковроткачество</h4>
                    <p>Туркменские ковры известны worldwide своим качеством и уникальными узорами, передающимися из поколения в поколение.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="fas fa-teapot"></i>
                    </div>
                    <h4>Традиционная кухня</h4>
                    <p>От ароматного плова до самсы и знаменитого туркменского чая - гастрономические традиции порадуют любого гурмана.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Секция Маршруты -->
<section id="routes" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Популярные маршруты</h2>
        <div class="accordion" id="routesAccordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            День 1: Прибытие в Ашхабад
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#routesAccordion">
                    <div class="card-body">
                        Встреча в аэропорту, трансфер в отель. Обзорная экскурсия по "городу любви" - Ашхабаду с его беломраморными зданиями и впечатляющими памятниками.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            День 2: Ашхабад - Ниса
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#routesAccordion">
                    <div class="card-body">
                        Посещение древней парфянской крепости Ниса, объекта Всемирного наследия ЮНЕСКО. Знакомство с Национальным музеем ковра.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            День 3: Ашхабад - Дарваза
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#routesAccordion">
                    <div class="card-body">
                        Путешествие к знаменитым газовым кратерам Дарваза, известным как "Врата Ада". Ночлег в юрточном лагере.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            День 4: Дарваза - Куня-Ургенч
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#routesAccordion">
                    <div class="card-body">
                        Переезд в Куня-Ургенч - древнюю столицу Хорезма. Осмотр мавзолеев и минаретов XI-XIV веков.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            День 5: Куня-Ургенч - Дашогуз - Ашхабад
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#routesAccordion">
                    <div class="card-body">
                        Возвращение в Ашхабад с остановкой в Дашогузе. Свободное время для покупки сувениров.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            День 6: Ашхабад - Мерв
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#routesAccordion">
                    <div class="card-body">
                        Экскурсия в древний Мерв - один из старейших городов Центральной Азии, важный пункт Великого Шелкового пути.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            День 7: Вылет из Ашхабада
                        </button>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#routesAccordion">
                    <div class="card-body">
                        Трансфер в аэропорт и вылет домой с незабываемыми впечатлениями о загадочном Туркменистане.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Секция Гиды -->
<section id="guides" class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Наши гиды</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="guide-card text-center">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80" class="guide-img" alt="Айна" loading="lazy">
                    <h4>Айна</h4>
                    <p>Сертифицированный гид с 10-летним опытом</p>
                    <div class="languages">
                        <span class="badge badge-primary">RU</span>
                        <span class="badge badge-secondary">EN</span>
                        <span class="badge badge-info">TM</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="guide-card text-center">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80" class="guide-img" alt="Мерет" loading="lazy">
                    <h4>Мерет</h4>
                    <p>Историк, специалист по Великому Шелковому пути</p>
                    <div class="languages">
                        <span class="badge badge-primary">RU</span>
                        <span class="badge badge-secondary">EN</span>
                        <span class="badge badge-info">TM</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="guide-card text-center">
                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80" class="guide-img" alt="Арслан" loading="lazy">
                    <h4>Арслан</h4>
                    <p>Эксперт по природным достопримечательностям</p>
                    <div class="languages">
                        <span class="badge badge-primary">RU</span>
                        <span class="badge badge-secondary">EN</span>
                        <span class="badge badge-info">TM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Секция Отзывы -->
<section id="testimonials" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Отзывы наших клиентов</h2>
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" class="testimonial-img" alt="Ольга" loading="lazy">
                    <div class="testimonial-content">
                        <h5>Ольга, Москва</h5>
                        <p class="font-italic">"Невероятная поездка! Туркменистан поразил своей самобытностью и гостеприимством. Особенно впечатлили Дарваза и древний Мерв. Гид Айна была очень профессиональна и знающа. Обязательно вернусь!"</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" class="testimonial-img" alt="Дмитрий" loading="lazy">
                    <div class="testimonial-content">
                        <h5>Дмитрий, Санкт-Петербург</h5>
                        <p class="font-italic">"Отличная организация тура. Все было продумано до мелочей. Увидел много уникальных мест, о которых даже не подозревал. Отдельное спасибо гиду Мерету за глубокие знания истории Великого Шелкового пути."</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" class="testimonial-img" alt="Елена" loading="lazy">
                    <div class="testimonial-content">
                        <h5>Елена, Казань</h5>
                        <p class="font-italic">"Потрясающая страна с богатейшей историей! Тур был насыщенным и интересным. Особенно понравились ахалтекинские кони и мастер-класс по ковроткачеству. Обязательно рекомендую TurkmenTravel друзьям!"</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<!-- Секция Контакты -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Свяжитесь с нами</h2>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email адрес</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="tourDate">Предполагаемая дата тура</label>
                        <input type="date" class="form-control" id="tourDate">
                    </div>
                    <div class="form-group">
                        <label for="message">Сообщение</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Отправить</button>
                </form>

                <div class="mt-5 text-center">
                    <h4 class="mb-3">Наши контакты</h4>
                    <p>
                        <i class="fab fa-whatsapp contact-icon"></i> WhatsApp: +993-12-345-678
                    </p>
                    <p>
                        <i class="fab fa-telegram contact-icon"></i> Telegram: +993-12-345-678
                    </p>
                    <p>
                        <i class="fas fa-phone contact-icon"></i> Телефон: +993-12-345-678
                    </p>

                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

        // Обработка формы
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
            this.reset();
        });

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
