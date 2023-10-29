<?php
session_start();

$nome = $_SESSION['nome_usuario'];
?>

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
          <li><a class="nav-link scrollto active" href="perfil.php">Home</a></li>
          <li><a class="nav-link scrollto" href="categoria.php" name="categoria">Categorias</a></li>
          <li><a class="nav-link scrollto" href="lista.php" name="listas">Listas</a></li>
          
          
          
          <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
            
            <ul>
                  <li><a href="#">Agenda</a></li>
                  <li><a href="#">Calculadora</a></li>
                  <li><a href="#">Favoritos</a></li>
                  
            </ul>
          </li>
          <li class="dropdown"><a href="#">Login<i class="bi bi-chevron-down"></i></a>
            <ul>
             
                 
                  <li class="dropdown"><a href="#">Ver perfil</a></li>
                  
                  <li class="dropdown"><a href="sair.php">Sair</a></li>
                  
              
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- final Header -->

  <!-- ======= Hero imagem do fundo ======= -->
  
 <!-- ======= Hero imagem do fundo ======= -->
 <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Bem vindo,<?php echo "$nome";?></h1>
      
    </div>
  </section><!-- Fim do Hero-->


  <section >
    <div class="container">
      <div class="row">
        <div class="col-md-4 menu-perfil">
          <form>
            
          <input type="radio" name="mostrar" onclick="qual()" value="categoria">Categorias</input></br>
          <input type="radio" name="mostrar" onclick="qual()" value="lista">Listas</input></br>
          <input type="radio" name="mostrar" onclick="qual()" value="agenda">Agenda</input></br>
          </form>
        </div>
        <div class="col-md-8 conteudo-perfil">
          <iframe src="categoria.php" title="Categorias"></iframe>
        </div>
      </div>
    </div>
  </section>
 <!-- ======= Footer (rodapé)======= -->
 <footer id="footer">
    <div class="footer-top">
     
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
  <script src="assets/js/script.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>