<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MSH - My Sweet Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo2.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS-->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <a href="index.html"><img width="" height="" src="assets/img/logosemfundo.png" alt=""></a>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="#sobre">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#serviços">Serviços</a></li>
          <li><a class="nav-link scrollto " href="#parcerias">Parcerias</a></li>
          <li><a class="nav-link scrollto" href="#time">Conheça Nosso Time</a></li>
          
          <li><a class="nav-link scrollto" href="contato.php">Contato</a></li>
          <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
            
            <ul>
                  <li><a href="#">Agenda</a></li>
                  <li><a href="#">Calculadora</a></li>
                  <li><a href="#">Favoritos</a></li>
                  
            </ul>
          </li>
          <li class="dropdown"><a href="#">Login<i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php
                /*
                  se login == true 
                  <li class="dropdown"><a href="">Ver perfil</a></li>
                  
                  <li class="dropdown"><a href="">Sair</a></li>
                  senao 
                  
                  <li class="dropdown"><a href="login.php">Entrar</a></li>
                  
                  <li class="dropdown"><a href="">Cadastrar</a></li>
                */
              ?>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- final Header -->

  <!-- ======= Hero imagem do fundo ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Bem vindo ao My Sweet Home</h1>
      
    </div>
  </section><!-- Fim do Hero-->

  <main id="main">
    <section id="fundo_compartilhado" >
    <!-- ======= Sobre======= -->
    
    <section id="sobre" class="back-to-white">
      <div class="container" data-aos="fade-up">
        <div class="row sobre-container">

          <div class="col-lg-10 content order-lg-1 order-2">
            <h2 class="title">Um pouco sobre nós</h2>
            <p>
              Trocar pelo texto da documentação

            </p>

          </div>

          <div class="col-lg-2 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/logoMSH.png">
          </div>
        </div>

      </div>
    </section><!-- FIM SOBRE NÓS-->


   
    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      
              <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Vem nas dicas</h3>
          <p class="section-description"> </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <button type="button" class="btn btn-primary"><a href="guias.php?cat=cozinha" >COZINHA</a></button>
              <button type="button" class="btn btn-primary"><a href="guias.php?cat=limpeza" >LIMPEZA</a></button>
              <button type="button" class="btn btn-primary"><a href="guias.php?cat=hacks" >LIFE HACK</a></button>
              <button type="button" class="btn btn-primary"><a href="guias.php?cat=web" >WEB</a></button>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
   
      
    
    </section><!-- fim do portifolio -->
  </section>
    <!-- ======= Time======= -->
    <section id="time">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Time</h3>
        </div>
        <div class="row">
          <div class="col-lg col-md">
            <div class="membro aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/WhatsApp Image 2023-10-02 at 19.14.28.jpeg" alt=""></div>
              <h4>Beatriz Santos</h4>
              <span>Programadora</span>
              <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100028712160068&mibextid=2JQ9oc"target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.linkedin.com/home" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg col-md">
            <div class="membro" data-aos="fade-up" data-aos-delay="200">
              <div class="pic"><img src="assets/img/carol a.jpeg" alt=""></div>
              <h4>Carolina Coelho</h4>
              <span>Programadora</span>
              <div class="social">
                <a href="https://instagram.com/carolgcoelho"target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/carolina-coelho-657798b3" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg col-md">
            <div class="membro" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/carol e.jpeg" alt=""></div>
              <h4>Caroline Laurindo</h4>
              <span>Programadora</span>
              <div class="social">
                <a href="https://instagram.com/ca.laurindo?igshid=NzZlODBkYWE4Ng=="target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/caroline-laurindo-41bb01161/" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg col-md">
            <div class="membro" data-aos="fade-up" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team-1.jpg" alt=""></div>
              <h4>Christian Miranda</h4>
              <span>Programador</span>
              <div class="social">
                <a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/home" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg col-md">
            <div class="membro" data-aos="fade-up" data-aos-delay="500">
              <div class="pic"><img src="assets/img/WhatsApp Image 2023-10-01 at 12.03.05.jpeg" alt=""></div>
              <h4>Eduardo Hernandes </h4>
              <span>Programador</span>
              <div class="social">
               
                <a href="https://instagram.com/edua.hernandes?igshid=NzZlODBkYWE4Ng==" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/me?trk=p_mwlite_me_notifications-secondary_nav==" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim time -->

    <!-- ======= Contato ======= -->
    

  </main>

  <!-- ======= Footer (rodapé)======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>My Sweet Home</strong>. Todos os Direitos Reservados
      </div>
      <div class="credits">
        
       </a>
      </div>
    </div>
  </footer><!-- fim do rodapé -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>