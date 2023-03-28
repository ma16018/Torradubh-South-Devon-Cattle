<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gallery - Torradubh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MeFamily - v4.8.0
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Torradubh South Devons</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="our-story.html">Our Story</a></li>
          <li><a href="practices.html">Farming Practices</a></li>
          <li><a href="hampers.html">Our Beef Boxes</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Gallery</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Gallery Section ======= (fix this to search through folder) -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="gallery-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-calves">Calves</li>
              <li data-filter=".filter-cows">Heifers</li>
              <li data-filter=".filter-cows">Cows</li>
              <li data-filter=".filter-bulls">Bulls</li>
              <li data-filter=".filter-bulls">Steers</li>
              <li data-filter=".filter-family">Herd</li>
            </ul>
          </div>
        </div>

        <div class="row gallery-container">
          <?php
            // Directory containing images
            $dir = "assets/img/gallery";

            // Get list of image filenames in directory
            $files = scandir($dir);

            // Loop through each filename and generate HTML code
            foreach ($files as $file) {
              // Skip if not an image file
              if (!preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                continue;
              }
              
              // Determine filter class based on filename
              if (strpos($file, 'Merlin') !== false) {
                $filter = 'filter-bulls';
              } elseif (strpos($file, 'group') !== false) {
                $filter = 'filter-family';
              } elseif (strpos($file, 'unnamed') !== false) {
                $filter = 'filter-cows';
              } elseif (strpos($file, 'cow_calf') !== false) {
                $filter = 'filter-calves';
              } else {
                $filter = '';
              }
              
              // Generate HTML code for image
              echo '<div class="col-lg-4 col-md-6 gallery-item ' . $filter . '">';
              echo '<div class="gallery-wrap">';
              echo '<img src="' . $dir . '/' . $file . '" class="img-fluid" alt="">';
              echo '<div class="gallery-info">';
              echo '<h4>' . pathinfo($file, PATHINFO_FILENAME) . '</h4>';
              echo '<p></p>';
              echo '<div class="gallery-links">';
              echo '<a href="' . $dir . '/' . $file . '" class="glightbox" title="' . pathinfo($file, PATHINFO_FILENAME) . '"><i class="bx bx-plus"></i></a>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
          ?>
        </div>
        

        <!-- <div class="row gallery-container">

          <div class="col-lg-4 col-md-6 gallery-item filter-bulls">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/Merlin.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Torradubh Merlin</h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/Merlin.jpg" class="glightbox" title="Torradubh Merlin"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-family">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/group-1.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Bella, Buff and ...</h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/group-1.jpg" class="glightbox" title="Vacation 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-family">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/group-2.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4></h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/group-2.jpg" class="glightbox" title="Home 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-cows">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/unnamed-1.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4></h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/unnamed-1.jpg" class="glightbox" title="Beach 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-calves">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/cow_calf-1.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4></h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/cow_calf-1.jpg" class="glightbox" title="Vacation 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-calves">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/cow_calf-3.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4></h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/cow_calf-3.jpg" class="glightbox" title="Home 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-cows">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/bella.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Torradubh Bella</h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/bella.jpg" class="glightbox" title="Beach 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-family">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/group-3.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4></h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/group-3.jpg" class="glightbox" title="Beach 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-calves">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/cow_calf-4.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4></h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/cow_calf-4.jpg" class="glightbox" title="Vacation 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-cows">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/nonamoo.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Torradubh Nonamoo</h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/nonamoo.jpg" class="glightbox" title="Vacation 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-cows">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/clover.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Torradubh Clover</h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/clover.jpg" class="glightbox" title="Vacation 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-calves">
            <div class="gallery-wrap">
              <img src="assets/img/gallery/yoda.jpg" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4>Torradubh Yoda</h4>
                <p></p>
                <div class="gallery-links">
                  <a href="assets/img/gallery/yoda.jpg" class="glightbox" title="Vacation 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div> -->



      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Torradubh South Devons</h3>
      <p>Check out our <a href="https://www.facebook.com/people/Torradubh-South-Devons/100076126925459/">facebook page.</a></p>
      <div class="social-links">
        <a href="https://www.facebook.com/people/Torradubh-South-Devons/100076126925459/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>