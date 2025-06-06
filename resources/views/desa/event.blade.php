
<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body class="blog-page">

@include('layouts.navbar')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>Event</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Beranda</a></li>
            <li class="current">Event</li>
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
            <li><a href="{{ asset('') }}#" class="active">1</a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->
  </main>

  @include('layouts.footer')

  @include('layouts.script')

</html>