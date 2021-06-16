<div class="container-fluid position-sticky">
    <div class="row top-header pt-0">
      <div class="col-sm-6 top-header-content">
        <div class="top-header-content-left">
          <div class="phoneNo">
            <i class="fas fa-phone"> </i>
             <a href="https://wa.me/+628117853951" class="wa-link">Hubungi Kami</a>
          </div>
          <div class="email">
            <i class="fas fa-envelope"></i>
            <a href="mailto:klinikyudianita@gmail.com" class="maillink">
              email
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row header">
      <nav class="navbar navbar-expand-md navbar-dark">
        <a href="/" class="navbar-brand">
          <img src="<?php echo e(URL('storage/image/love2growlogo-cutout.png')); ?>" class="d-inline-block
          align-top img-fluid" width="200px" height: "50px" alt="">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarToggler"
          aria-controls="navbarToggler"
          aria-expanded="false"
        >
          <span class="navbar-toggler-icon"> </span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarToggler">
          <ul class=" flex-fill navbar-nav me-auto text-center">
            <li class="nav-item active">
              <a href="#" class="nav-link" id="navText">Home</a>
            </li>
            <li class="nav-item" id="navSelect">
              <a href="#about-us" class="nav-link" id="navText"
                >Tentang Kami</a
              >
            </li>
            <li class="nav-item" id="navSelect">
              <a href="#facility" class="nav-link" id="navText">Fasilitas</a>
            </li>
            <li class="nav-item" id="navSelect">
              <a href="services.html" class="nav-link" id="navText"
                >Layanan</a
              >
            </li>
            <li class="nav-item" id="navSelect">
              <a href="gallery.html" class="nav-link" id="navText">Galeri</a>
            </li>
            <li class="nav-item" id="navSelect">
              <a href="article.html" class="nav-link" id="navText">Artikel</a>
            </li>
            <li class="nav-item" id="navSelect">
              <a href="event.html" class="nav-link" id="navText">Event</a>
            </li>
            <li class="nav-item" id="navSelect">
              <a href="testimonial.html" class="nav-link" id="navText"
                >Testimoni</a
              >
            </li>
            <li class="nav-item" id="navSelect">
              <a href="contact.html" class="nav-link" id="navText"
                >Kontak Kami</a
              >
            </li>
          </ul>
  
          <ul class=" member-buttons navbar-nav ms-auto text-center">
            <div id="btnWrapper">
              <?php if(Auth::user()): ?>
                  <p class="mb-1">Halo</p>
                    <button class="btn regButton" id="navText"> 
                      <a href="/member">Lihat Akun</a>
                    </button>
                    <button class="btn loginButton" id="navText"> 
                      <a href="/logout">Logout</a>
                    </button>
                  <?php else: ?>
                    <p class="mb-1">Ingin konsultasi? Daftar akun terlebih dahulu</p>
                    <button class="btn regButton" id="navText"> 
                      <a href="/register">Member</a>
                    </button>
                    <button class="btn loginButton" id="navText"> 
                      <a href="/login">Login</a>
                  </button>
              <?php endif; ?>
            </div>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <?php echo $__env->yieldContent('content'); ?><?php /**PATH C:\Users\User\OneDrive - Bina Nusantara University\College Life\Skripsi\Skripsi\Apps\love-2-grow-clinic\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>