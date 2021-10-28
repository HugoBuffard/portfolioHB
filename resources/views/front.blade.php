<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hugo BUFFARD</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('front/assets/img/logo HB_noir.png') }}" rel="icon">
    <link href="{{ asset('front/assets/img/logo HB_noir.png') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- <h1 class="logo"><a href="index.html">DevFolio</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo"><img src="front/assets/img/logo HB_blanc.png" alt=""
                    class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#accueil">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="#aPropos">A propos</a></li>
                    <li><a class="nav-link scrollto" href="#competences">Compétences</a></li>
                    <li><a class="nav-link scrollto " href="#projets">Projets</a></li>
                    <li><a class="nav-link scrollto " href="#meContacter">Me contacter</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= BIENVENUE ======= -->
    <div id="accueil" class="hero route bg-image" style="background-image: url(front/assets/img/fond9.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <p class="display-6 color-d">Bienvenue !</p>
                    <h1 class="hero-title mb-4">Hugo BUFFARD</h1>
                    <p class="hero-subtitle"><span class="typed"
                            data-typed-items="Développeur Web, Intégrateur"></span></p>
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    <main id="main">

        <!-- ======= A PROPOS ======= -->
        <section id="aPropos" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                                <img src="front/assets/img/Hugo.jpg"
                                                    class="img-fluid rounded b-shadow-a" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <p><span class="title-s">Nom : </span> <span>Hugo BUFFARD</span></p>
                                            <p><span class="title-s">Profil : </span> <span>Développeur Web</span>
                                            </p>
                                            <p><span class="title-s">Email : </span>
                                                <span>hugobuffard@live.fr</span>
                                            </p>
                                            <p><span class="title-s">Téléphone : </span> <span>06 33 74 04
                                                    51</span></p>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <a href="front/assets/pdf/CV-HugoBUFFARD.pdf" target="_blank">
                                            <button class="button button-a button-big button-rouded">Télécharger mon
                                                CV</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                A propos
                                            </h5>
                                        </div>
                                        <p class="lead">
                                            Bonjour, moi c’est Hugo,
                                            je prends mon café sans sucre, car j’aime mettre mon grain dans les projets
                                            bien corsés.
                                        </p>
                                        <p class="lead" style="text-align: justify;">
                                            A la recherche d’un nouveau poste, je suis diplômé d’une <a
                                                href="http://www.pasteurmontroland.com/formation/3/27">Licence ASI
                                                (Administrateur de Système d’Information)</a> que j’ai effectué au
                                            lycée Pasteur Mont Roland à Dole.
                                            Après avoir filtré différentes facettes dans l’informatique, c’est le web
                                            qui a eu une saveur plus particulière pour moi, et c’est donc dans cette
                                            branche que j’ai décidé de performer.
                                            Réalisant différents projets en cours et en entreprise j’ai pu obtenir les
                                            compétences pour réaliser un projet à sa mise en production.
                                        </p>
                                        <p class="lead">
                                            Vous découvrirez dans ce portfolio mes compétences ainsi que les projets que
                                            j’ai pu réaliser.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= COMPÉTENCES ======= -->
        <section id="competences" class="sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Compétences
                            </h3>
                            <p class="subtitle-a">
                                Des compétences à votre service.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-code-slash"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Web</h2>
                                <div class="skill-mf">
                                    <span>HTML / CSS</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%;"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>PHP / LARAVEL</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>JAVASCRIPT / VUE.JS</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 65%"
                                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>WORDPRESS</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Données</h2>
                                <div class="skill-mf">
                                    <span>SQL</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>JSON</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-kanban"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Gestion de projet</h2>
                                <div class="skill-mf">
                                    <span>SCRUM</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>KANBAN</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>GANTT</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%"
                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Section Services End /-->

        <!-- ======= SECTION ======= -->
        <div class="paralax-mf" style="background-image: url(assets/img/counters-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-sm-4 col-lg-4">
                        <div class="counter-box counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="fas fa-passport" style="margin-top:15px;"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="{{ $NbProjets }}"
                                    data-purecounter-duration="1" class="counter purecounter"></p>
                                <span class="counter-text">PROJETS EFFECTUÉS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="fas fa-address-book" style="margin-top:15px;"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                                    class="counter purecounter"></p>
                                <span class="counter-text">ANNÉES D'EXPÉRIENCE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="fas fa-coffee" style="margin-top:15px;"></i></span>
                            </div>
                            <div class="counter-num">
                                <p class="counter">∞</p>
                                <span class="counter-text">NOMBRE DE CAFÉ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Section -->

        <!-- ======= PROJETS ======= -->
        <section id="projets" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Projets
                            </h3>
                            <p class="subtitle-a">
                                Une partie de mes projets que je décide de partager.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($projets as $p)
                        <div class="col-md-4">
                            <div class="work-box">
                                <div class="work-img">
                                    <img src="{{ asset($p->images->first()->nom) }}" alt="" class="img-fluid"
                                        style="width:420px ; height:195px ;">
                                </div>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-9">
                                            <h2 class="w-title">{{ $p->titre }}</h2>
                                            <div class="w-more">
                                                <span class="w-ctegory">{{ $p->annee }}</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="w-like">
                                                <button type="button" class="btn btn-outline-primary"
                                                    data-toggle="modal" data-target="#modalProjet{{ $p->id }}">
                                                    <i class="bi bi-plus-circle"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalProjet{{ $p->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    {{ $p->titre }}</h5>
                                                                <a type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close"
                                                                    style="color:#1e1e1e;">
                                                                    <i aria-hidden="true" class="bi bi-x-lg"></i>
                                                                </a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div id="carouselId{{ $p->id }}"
                                                                    class="carousel slide" data-ride="carousel">
                                                                    <div class="carousel-inner">
                                                                        @foreach ($p->images as $index => $i)
                                                                            @if ($index == 0)
                                                                                <div class="carousel-item active">
                                                                                    <img class="d-block w-100"
                                                                                        style="transform: none !important; width:766px ; height:355px ;"
                                                                                        src="{{ asset($i->nom) }}">
                                                                                </div>
                                                                            @else
                                                                                <div class="carousel-item">
                                                                                    <img class="d-block w-100"
                                                                                        style="transform: none !important; width:766px ; height:355px ;;"
                                                                                        src="{{ asset($i->nom) }}">
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                    <a class="carousel-control-prev"
                                                                        href="#carouselId{{ $p->id }}"
                                                                        role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon"
                                                                            aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next"
                                                                        href="#carouselId{{ $p->id }}"
                                                                        role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon"
                                                                            aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                                <br>
                                                                {!! $p->description !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= ME CONTACTER ======= -->
        <section id="meContacter" class="paralax-mf footer-paralax bg-image sect-mt4 route"
            style="background-image: url(assets/img/overlay-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                Envoyer moi un message
                                            </h5>
                                        </div>
                                        <div>
                                            <form action="{{ route('storeMessage') }}" method="post" role="form"
                                                id="messageForm">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" name="nom" class="form-control"
                                                                id="nomForm" placeholder="Votre Nom" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email"
                                                                id="emailForm" placeholder="Votre Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="sujet"
                                                                id="sujetForm" placeholder="Sujet" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" rows="5"
                                                                placeholder="Message" id="messageForm"
                                                                required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit"
                                                            class="button button-a button-big button-rouded">Envoyer un
                                                            message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                Me contacter
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <p class="lead">
                                                Si vous avez des questions, n’hésitez pas à me contacter.
                                            </p>
                                            <p class="lead">
                                                Promis, je vous répondrai à ma pause café !
                                            </p>
                                            <ul class="list-ico">
                                                <li><span class="bi bi-geo-alt"></span> 21 route de Voiteur, 39210 Le
                                                    Vernois</li>
                                                <li><span class="bi bi-phone"></span> 06 33 74 04 51</li>
                                                <li><span class="bi bi-envelope"></span> hugobuffard@live.fr</li>
                                            </ul>
                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href="https://www.linkedin.com/in/hugo-buffard-39992b187/"
                                                        target="_blank">
                                                        <span class="ico-circle">
                                                            <i class="fab fa-linkedin" style="margin-top:10px;"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright 2021 - <strong>Hugo BUFFARD</strong>. Tous droits
                            réservés.</p>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
              -->
                            Thème par <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                        <a href="{{ route('ml') }}"><strong>| Mentions légales |</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- JQuery -->
    <script src="{{ asset('front/assets/js/jquery-3.6.0.js') }}"></script>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/typed.js/typed.min.js') }}"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b56b56891e.js" crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('front/assets/js/main.js') }}"></script>
    <script src="{{ asset('front/assets/js/ajax.js') }}"></script>

</body>

</html>
