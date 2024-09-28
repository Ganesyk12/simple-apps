<div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
   <div class="container py-5">
      <div class="row g-5">
         <div class="col-lg-7 col-md-12">
            <h1 class="mb-3 text-primary">We Care Your Baby</h1>
            <h1 class="mb-5 display-1 text-white">The Best Play Area For Your Kids</h1>
            <a href="#about" class="btn btn-primary px-4 py-3 px-md-5  me-4 btn-border-radius">Baca Selengkapnya</a>
            <a href="#facilities" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Fasilitas</a>
         </div>
      </div>
   </div>
</div>
<!-- Hero End -->


<!-- About Start -->
<div class="container-fluid py-5 about bg-light" id="about">
   <div class="container py-5">
      <div class="row g-5 align-items-center">
         <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="video border">
               <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                  <span></span>
               </button>
            </div>
         </div>
         <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">About Us</h4>
            <h1 class="text-dark mb-4 display-5">We Learn Smart Way To Build Bright Futute For Your Children</h1>
            <p class="text-dark mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>
            <div class="row mb-4">
               <div class="col-lg-6">
                  <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Sport Activites</h6>
                  <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Outdoor Games</h6>
                  <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Nutritious Foods</h6>
               </div>
               <div class="col-lg-6">
                  <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Highly Secured</h6>
                  <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Friendly Environment</h6>
                  <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Qualified Teacher</h6>
               </div>
            </div>
            <a href="<?= base_url('About') ?>" class="btn btn-primary px-5 py-3 btn-border-radius">More Details</a>
         </div>
      </div>
   </div>
</div>
<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content rounded-0">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <!-- 16:9 aspect ratio -->
            <div class="ratio ratio-16x9">
               <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                  allow="autoplay"></iframe>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- About End -->