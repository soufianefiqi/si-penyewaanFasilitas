<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>UIN Syarif Hidayatullah Jakarta</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="assets/img/logo.png"/>

    <!-- icons -->
    <script src="https://kit.fontawesome.com/30dd703613.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
      integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
      crossorigin="anonymous"
    />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{url('/')}}" class="logo mr-auto"><img src="https://nict.uinjkt.ac.id/wp-content/uploads/2020/04/logo-3.png"  alt="" /></a>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li>
              <a href="#beranda"><i class="fas fa-home"></i> Beranda</a>
            </li>
            <li class="drop-down">
              <a href=""><i class="fas fa-network-wired"></i> Profil</a>
              <ul>
                <li><a href="#">Fungsi</a></li>
                <li><a href="#">Visi & Misi</a></li>
                <li><a href="#">Sejarah</a></li>
                <li><a href="#">Pengelola</a></li>
              </ul>
            </li>

            <li class="active">
              <a href="{{url('/')}}"><i class="fas fa-laptop"></i> Fasilitas</a>
            </li>
            <li class="drop-down">
              <a href=""><i class="far fa-newspaper"></i> Media</a>
              <ul>
                <li><a href="#"> Berita</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Infografis</a></li>
                <li><a href="#">Press Release</a></li>
              </ul>
            </li>

            <li>
              <a href="#agenda"><i class="fas fa-calendar-check"></i> Agenda</a>
            </li>
            <li>
              <a href="#login"><i class="fa fa-lock"></i> Login</a>
            </li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1 class="text-center">FASILITAS</h1>
      </div>
    </section>
    <!-- End Hero -->

    <section id="link">
      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
          <div class="col-md-6">
            <a href="{{url('/penginapan')}}"><h3>Dormitory/Penginapan</h3></a>
          </div>
          <div class="col-md-6">
            <a href="{{url('/sewa')}}"><h3>Penyewaan Layanan & Fasilitas</h3></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <p>NICT UIN Syarif Hidayatullah Jakarta menyediakan berbagai penyewaan layanan fasilitas & ruangan dan juga penyewaan </br>dormitory/penginapan</p>
          </div>
        </div>
      </div>
    </section>

   @yield('content')
    <!-- ======= Footer ======= -->
    <footer  id="footer">
      <div class="footer-top ">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 footer-contact" >
              <i class="fas fa-phone fa-4x "></i>
              <p>(021)7401925</p>
            </div>
            <div class="col-sm-3 footer-contact">
                <i class="fas fa-envelope-open fa-4x "></i>
                  <p>nict@uinjkt.ac.id</p>
            </div>
            <div class="col-sm-3 footer-contact">
              <i class="fas fa-phone fa-4x "></i>
                  <p>0812-8898-9496 [Akram] 0838-9314-3617 [Ridho]</p>
            </div>
            
            <div class="col-sm-3 footer-contact bg-warning">
              <div class="social-links ">
                <a href="#" class="twitter"><i class="fa fa-facebook-square"></i></a>
                <a href="#" class="facebook"><i class="fa fa-twitter-square"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <div class="copyright">
                  &copy; <span> 2021 NICT UIN Syarif Hidayatullah Jakarta.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="assets/vendor/jquery/jquery.mousewheel.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

   
  </body>
</html>
