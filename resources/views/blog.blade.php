
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog - AgriCulture Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('') }}assets/img/favicon.png" rel="icon">
  <link href="{{ asset('') }}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="{{ asset('') }}https://fonts.googleapis.com" rel="preconnect">
  <link href="{{ asset('') }}https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="{{ asset('') }}https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('') }}assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: AgriCulture
  * Template URL: https://bootstrapmade.com/agriculture-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ asset('') }}index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="AgriCulture">
        <!-- <h1 class="sitename">AgriCulture</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ asset('') }}index.html">Home</a></li>
          <li><a href="{{ asset('') }}about.html">About Us</a></li>
          <li><a href="{{ asset('') }}services.html">Our Services</a></li>
          <li><a href="{{ asset('') }}testimonials.html">Testimonials</a></li>
          <li><a href="{{ asset('') }}blog.html" class="active">Blog</a></li>
          <li class="dropdown"><a href="{{ asset('') }}#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ asset('') }}#">Dropdown 1</a></li>
              <li class="dropdown"><a href="{{ asset('') }}#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{ asset('') }}#">Deep Dropdown 1</a></li>
                  <li><a href="{{ asset('') }}#">Deep Dropdown 2</a></li>
                  <li><a href="{{ asset('') }}#">Deep Dropdown 3</a></li>
                  <li><a href="{{ asset('') }}#">Deep Dropdown 4</a></li>
                  <li><a href="{{ asset('') }}#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="{{ asset('') }}#">Dropdown 2</a></li>
              <li><a href="{{ asset('') }}#">Dropdown 3</a></li>
              <li><a href="{{ asset('') }}#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="{{ asset('') }}contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>Blog</h1>
        <p>
          Home
          /
          Blog</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ asset('') }}index.html">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts 2 Section -->
    <section id="blog-posts-2" class="blog-posts-2 section">

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
              </div>

              <div class="meta d-flex align-items-end">
                <span class="post-date"><span>12</span>December</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                </div>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Dolorum optio tempore voluptas dignissimos</h3>
                <a href="{{ asset('') }}blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
              </div>

              <div class="meta d-flex align-items-end">
                <span class="post-date"><span>19</span>March</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                </div>
              </div>

              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Nisi magni odit consequatur autem nulla dolorem</h3>
                <a href="{{ asset('') }}blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="meta d-flex align-items-end">
                <span class="post-date"><span>24</span>June</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                </div>
              </div>

              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</h3>
                <a href="{{ asset('') }}blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="meta d-flex align-items-end">
                <span class="post-date"><span>05</span>August</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                </div>
              </div>

              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Non rem rerum nam cum quo minus explicabo eius exercitationem.</h3>
                <a href="{{ asset('') }}blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-5.jpg" class="img-fluid" alt="">
              </div>

              <div class="meta d-flex align-items-end">
                <span class="post-date"><span>17</span>September</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">John Parker</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                </div>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Accusamus quaerat aliquam qui debitis facilis consequatur</h3>
                <a href="{{ asset('') }}blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-6.jpg" class="img-fluid" alt="">
              </div>

              <div class="meta d-flex align-items-end">
                <span class="post-date"><span>07</span>December</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Julia White</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                </div>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Distinctio provident quibusdam numquam aperiam aut</h3>
                <a href="{{ asset('') }}blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->

        </div>
      </div>

    </section><!-- /Blog Posts 2 Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="{{ asset('') }}#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="{{ asset('') }}#">1</a></li>
            <li><a href="{{ asset('') }}#" class="active">2</a></li>
            <li><a href="{{ asset('') }}#">3</a></li>
            <li><a href="{{ asset('') }}#">4</a></li>
            <li>...</li>
            <li><a href="{{ asset('') }}#">10</a></li>
            <li><a href="{{ asset('') }}#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

      <div class="content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h3>Subscribe To Our Newsletter</h3>
              <p class="opacity-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt, reprehenderit!
              </p>
            </div>
            <div class="col-lg-6">
              <form action="forms/newsletter.php" class="form-subscribe php-email-form">
                <div class="form-group d-flex align-items-stretch">
                  <input type="email" name="email" class="form-control h-100" placeholder="Enter your e-mail">
                  <input type="submit" class="btn btn-secondary px-4" value="Subcribe">
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your subscription request has been sent. Thank you!
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Call To Action Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="{{ asset('') }}index.html" class="logo d-flex align-items-center">
              <span class="sitename">AgriCulture</span>
            </a>
            <div class="footer-contact pt-3">
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
              <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="{{ asset('') }}#">Home</a></li>
              <li><a href="{{ asset('') }}#">About us</a></li>
              <li><a href="{{ asset('') }}#">Services</a></li>
              <li><a href="{{ asset('') }}#">Terms of service</a></li>
              <li><a href="{{ asset('') }}#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="{{ asset('') }}#">Web Design</a></li>
              <li><a href="{{ asset('') }}#">Web Development</a></li>
              <li><a href="{{ asset('') }}#">Product Management</a></li>
              <li><a href="{{ asset('') }}#">Marketing</a></li>
              <li><a href="{{ asset('') }}#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="{{ asset('') }}#">Molestiae accusamus iure</a></li>
              <li><a href="{{ asset('') }}#">Excepturi dignissimos</a></li>
              <li><a href="{{ asset('') }}#">Suscipit distinctio</a></li>
              <li><a href="{{ asset('') }}#">Dilecta</a></li>
              <li><a href="{{ asset('') }}#">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="{{ asset('') }}#">Ipsam</a></li>
              <li><a href="{{ asset('') }}#">Laudantium dolorum</a></li>
              <li><a href="{{ asset('') }}#">Dinera</a></li>
              <li><a href="{{ asset('') }}#">Trodelas</a></li>
              <li><a href="{{ asset('') }}#">Flexo</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="{{ asset('') }}https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="{{ asset('') }}https://themewagon.com">ThemeWagon</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="{{ asset('') }}"><i class="bi bi-twitter-x"></i></a>
          <a href="{{ asset('') }}"><i class="bi bi-facebook"></i></a>
          <a href="{{ asset('') }}"><i class="bi bi-instagram"></i></a>
          <a href="{{ asset('') }}"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="{{ asset('') }}#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>