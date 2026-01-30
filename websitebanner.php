
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fasihaharina</title>

  <!-- Favicons -->
  <link href="assets/img/sunflower.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&family=Raleway&display=swap" rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

<?php include 'partials/newheader.php'; ?>

<main class="main">

<!-- ======= Portfolio Details ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">

        <!-- ✅ SWIPER FIXED -->
        <div class="portfolio-details-slider swiper init-swiper">

          <!-- ✅ CONFIG MUST BE HERE -->
          <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 4000
            },
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
          </script>

          <div class="swiper-wrapper align-items-center">
               
          </div>

          <div class="swiper-pagination"></div>
        </div>

      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          
        </div>

        <div class="portfolio-description">
      
        </div>
      </div>

    </div>

  </div>
</section>

</main>

<!-- Scroll Top -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<div id="preloader"></div>

<!-- Vendor JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>
</html>
