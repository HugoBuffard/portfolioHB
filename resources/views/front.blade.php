<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hugo BUFFARD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('front/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('front/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">DevFolio</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="front/assets/img/counters-bg.jpg" alt="" class="img-fluid"></a>

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

  <!-- ======= Hero Section ======= -->
  <div id="accueil" class="hero route bg-image" style="background-image: url(front/assets/img/fond11.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <p class="display-6 color-d">Bienvenue !</p>
          <h1 class="hero-title mb-4">Hugo BUFFARD</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Développeur Web, Intégrateur"></span></p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
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
                        <img src="front/assets/img/Hugo.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <p><span class="title-s">Nom: </span> <span>Hugo BUFFARD</span></p>
                      <p><span class="title-s">Profil: </span> <span>Développeur Web</span></p>
                      <p><span class="title-s">Email: </span> <span>hugobuffard@live.fr</span></p>
                      <p><span class="title-s">Téléphone: </span> <span>06 33 74 04 51</span></p>

                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-center">
                    <a href="front/assets/pdf/CV-HugoBUFFARD.pdf" target="_blank">
                      <button class="button button-a button-big button-rouded">Télécharger mon CV</button>
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
                      Bonjour, je m’appelle Hugo BUFFARD.
                    </p>
                    <p class="lead" style="text-align: justify;">
                      A la recherche d’un nouveau poste, je suis diplômé d’une <a href="http://www.pasteurmontroland.com/formation/3/27">Licence ASI (Administrateur de Système d’Information)</a> que j’ai pu effectuer au lycée Pasteur Mont Roland à Dole.
                      Après avoir découvert différentes facettes dans l’informatique, c’est dans le web que j’ai décidé de me diriger.
                      Réalisant différents projets en cours et en entreprise j’ai pu obtenir les compétences pour réaliser un projet à sa mise en production.
                    </p>
                    <p class="lead">
                      Vous découvrirez dans ce portfolio mes compétences ainsi que les projets que j’ai pu réaliser.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <!--/ Section Services Star /-->
    <section id="competences" class="services-mf route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Compétences
              </h3>
              <p class="subtitle-a">
                Des compétences à votre service
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
                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>PHP / LARAVEL</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>JAVASCRIPT / VUE.JS</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>WORDPRESS</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>JSON</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>KANBAN</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>GANTT</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Section Services End /-->


    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-4 col-lg-4">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">PROJETS EFFECTUÉS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">ANNÉES D'EXPÉRIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="far fa-coffee"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">∞</p>
                <span class="counter-text">NOMBRE DE CAFÉ</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Projets Section ======= -->
    <section id="projets" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Projets
              </h3>
              <p class="subtitle-a">
                Une partie de mes projets
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="front/assets/img/work-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="front/assets/img/work-5.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Big Bang</h2>
                    <div class="w-more">
                      <span class="w-ctegory">2010</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="meContacter" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
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
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Envoyer un message</button>
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
                      </p><p class="lead">
                      Je vous répondrai dans les plus brefs délais.
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> 21 route de Voiteur, 39210 Le Vernois</li>
                        <li><span class="bi bi-phone"></span> 06 33 74 04 51</li>
                        <li><span class="bi bi-envelope"></span> hugobuffard@live.fr</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://www.linkedin.com/in/hugo-buffard-39992b187/" target="_blank"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
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
            <p class="copyright">&copy; Copyright 2021 - <strong>Hugo BUFFARD</strong>. Tous droits réservés.</p>
            <a href="{{ route('ml') }}">Mentions légales</a>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
              -->
              Thème par <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('front/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/typed.js/typed.min.js')}}"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/b56b56891e.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('front/assets/js/main.js')}}"></script>

</body>

</html>