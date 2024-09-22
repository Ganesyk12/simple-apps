<div class="container-fluid border-bottom bg-light wow fadeIn" data-wow-delay="0.1s">
   <div class="container px-0">
      <nav class="navbar navbar-light navbar-expand-xl py-3">
         <a href="<?= base_url('Home') ?>" class="navbar-brand">
            <img src="<?= base_url('assets') ?>/img/Arena Bocil_Logo.png" alt="Logo" style="width: 80px; margin-right: 5px;">
         </a>
         <a href="<?= base_url('Home') ?>" class="navbar-brand">
            <h1 class="text-primary display-6">Arena<span class="text-secondary">Bocil</span></h1>
         </a>
         <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars text-primary"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
               <a href="index.html" class="nav-item nav-link active">Beranda</a>
               <a href="about.html" class="nav-item nav-link">Tentang Kami</a>
               <a href="service.html" class="nav-item nav-link">Layanan</a>
               <a href="event.html" class="nav-item nav-link">Berita</a>
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                  <div class="dropdown-menu m-0 bg-secondary rounded-0">
                     <a href="blog.html" class="dropdown-item">Program</a>
                     <a href="team.html" class="dropdown-item">Tata Tertib</a>
                  </div>
               </div>
            </div>
            <div class="d-flex me-4">
               <div id="phone-tada" class="d-flex align-items-center justify-content-center">
                  <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                     <i class="fa fa-phone-alt text-primary fa-2x me-4"></i>
                     <div class="position-absolute" style="top: -7px; left: 20px;">
                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                     </div>
                  </a>
               </div>
               <div class="d-flex flex-column pe-3">
                  <span class="text-primary">Layanan Konsumen</span>
                  <a href="#"><span class="text-secondary">Free: + 0123 456 7890</span></a>
               </div>
            </div>
         </div>
      </nav>
   </div>
</div>