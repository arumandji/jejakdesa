<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body class="blog-page">

@include('layouts.navbar')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>Booking</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Beranda</a></li>
            <li class="current">Booking</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Booking Section -->
    <div class="container my-5">
      <div class="booking-form-container p-4 rounded shadow">
        <form action="search-results.php" method="GET" class="booking-form">
          <div class="row g-2">
            <div class="col-md-3">
              <label for="destination" class="form-label">Destination</label>
              <input type="text" class="form-control" id="destination" name="destination" placeholder="Kota, Desa atau Tempat wisata" required>
            </div>
            <div class="col-md-2">
              <label for="checkin" class="form-label">Check-in</label>
              <input type="date" class="form-control" id="checkin" name="checkin" required>
            </div>
            <div class="col-md-2">
              <label for="checkout" class="form-label">Check-out</label>
              <input type="date" class="form-control" id="checkout" name="checkout" required>
            </div>
            <div class="col-md-3">
              <label for="rooms_guests" class="form-label">Rooms and Guests</label>
              <input type="text" class="form-control" id="rooms_guests" name="rooms_guests" placeholder="1 room, 2 adults, 0 children" required>
            </div>
            <div class="col-md-2 d-flex align-items-end">
              <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
          </div>
          <div class="row mt-3 align-items-center">
            <div class="col-md-3">
              <input type="checkbox" id="work_travel" name="work_travel">
              <label for="work_travel">I'm traveling for work</label>
            </div>
            <div class="col-md-9 d-flex gap-2">
              <span>Star Rating:</span>
              <button type="button" class="btn btn-outline-secondary">≤ 2 ★</button>
              <button type="button" class="btn btn-outline-secondary">3 ★</button>
              <button type="button" class="btn btn-outline-secondary">4 ★</button>
              <button type="button" class="btn btn-outline-secondary">5 ★</button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- End Booking Section -->

    <section id="contact" class="contact section">
      <div class="container" data-aos="fade">
        <div class="row gy-5 gx-lg-5">
          <div class="col-lg-4">
            <div class="info">
              <h3>Pemesanan</h3>
              <p>Kami hadir untuk memperkenalkan desa, budaya, dan mendukung perekonomian lokal.</p>
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Surabaya, Indonesia</p>
                </div>
              </div>
              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>jejakdesa@unair.ac.id</p>
                </div>
              </div>
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+62 8315 0559 9789</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <form action="forms/booking.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->
  </main>

  @include('layouts.footer')
  @include('layouts.script')
</html>
