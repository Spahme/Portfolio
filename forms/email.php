<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sasha Daza - email</title>


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>


<?php

if(isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
  
  // Récupération des données du formulaire
  $the_name = $_POST['name'];
  $the_email = $_POST['email'];
  $the_subject = $_POST['subject'];
  $the_message = $_POST['message'];

  
  $to = 'sashadaza0902@gmail.com';
  $subject = "Contact portfolio de" . $the_name;
  $message = "Email de contact PortFolio " . $the_subject . " pour " .
  $the_message . " à contacter " . $the_email;

  $headers = 'From: ' . $the_email . "\r\n" .
    'Reply-To: ' . $the_email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


  if(mail($to, $subject, $message, $headers)) {
    echo "<script>redirectAndAlert('Email envoyé avec succès');</script>";
  } else {
    echo "<script>redirectAndAlert('Échec de l\'envoi de l\'email');</script>";
  }
  } else {
    echo "<script>redirectAndAlert('All fields are required.');</script>";
}

?>


<body>
  
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <div class="col-sm-6">
                    <!-- Pour les appareils de taille moyenne et plus -->
                    <i class="bi bi-envelope-fill"></i>
                    <a href="mailto:sasha.daza6@etu.univ-lorraine.fr">sasha.daza6@etu.univ-lorraine.fr</a>
                </div>
                <div class="col-sm-6">
                    <!-- Pour les appareils de taille moyenne et plus -->
                    <i class="bi bi-phone-fill phone-icon"></i>
                    <a href="tel:+330630151778">+33 06 30 15 17 78</a>
                </div>
            </div>
            <div class="social-links d-none d-md-block">
                <a href="https://github.com/Spahme" class="github" name="github"><i class="bi bi-github"></i></a>
                <a href="https://twitter.com/home?lang=fr" class="twitter" name="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/sasha.daza.5" class="facebook" name="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/sashadaza/?hl=fr" class="instagram" name="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/sasha-daza-48a588270/" class="linkedin" name="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </section>
    <!-- End Top Bar -->

    <!-- ======= Header Desktop======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo">
                <a href="index.html"><img src="assets/img/favicon.png" alt="" id="mon-icon"></a>
            </h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.html">Accueil</a></li>
                    <li class="dropdown">
                        <a class="nav-link scrollto" href="Presentation.html"><span>Présentation</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="index.html#about">Moi</a></li>
                            <li><a href="Presentation.html#etude">BUT MMI</a></li>
                            <li><a href="Presentation.html#CV">CV</a></li>
                            <li><a href="Presentation.html#exp">Expériences</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="index.html#services">Compétences</a></li>
                    <li class="dropdown">
                        <a class="nav-link scrollto" href="index.html#portfolio"><span>Portfolio</span> <i class="bi bi-chevron-down"></i></a>
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">
                                <a onclick='window.location.href="index.html#portfolio"'>All</a>
                            </li>
                            <li data-filter=".filter-audio-visuel">
                                <a onclick='window.location.href="index.html#portfolio"'>audiovisuel</a>
                            </li>
                            <li data-filter=".filter-Graphique">
                                <a onclick='window.location.href="index.html#portfolio"'>Graphique</a>
                            </li>
                            <li data-filter=".filter-web">
                                <a onclick='window.location.href="index.html#portfolio"'>Web</a>
                            </li>
                            <li data-filter=".filter-com">
                                <a onclick='window.location.href="index.html#portfolio"'>Com/Marketing</a>
                            </li>
                            <li data-filter=".filter-photo">
                                <a onclick='window.location.href="index.html#portfolio"'>Photo</a>

                            </li>
                            <li data-filter=".filter-autre">
                                <a onclick='window.location.href="index.html#portfolio"'>Autres</a>
                            </li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    <!-- End Header -->

   <!-- ======= Footer ======= -->
   <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-6">
                        <div class="footer-info">
                            <h3>Sasha daza</h3>
                            <p>
                                PAM 54700, FR<br><br>
                                <strong>Tel:</strong> <a href="tel:+330630151778">+33 06 30 15 17 78</a><br>
                                <strong>Email:</strong> <a href="mailto:sasha.daza6@etu.univ-lorraine.fr">sasha.daza6@etu.univ-lorraine.fr</a><br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://github.com/Spahme" class="github" name="github"><i class="bi bi-github"></i></a>
                                <a href="https://twitter.com/home?lang=fr" class="twitter"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://www.facebook.com/sasha.daza.5" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/sashadaza/?hl=fr" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/sasha-daza-48a588270/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade and modified by Sasha daza</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>


    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>


 