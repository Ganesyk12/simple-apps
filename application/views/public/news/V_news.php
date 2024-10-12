<div class="container-fluid events py-1 bg-light">
   <div class="container py-3">
      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
         <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Kami Melayani Event</h4>
         <h1 class="mb-5 display-3">Wujudkan Moment Berharga Anda Bersama Kami :)</h1>
      </div>
      <div class="row g-5 justify-content-center">
         <?php foreach ($event as $events) { ?>
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
               <div class="events-item bg-primary rounded">
                  <div class="events-inner position-relative">
                     <div class="events-img overflow-hidden rounded-circle position-relative">
                        <img src="<?= base_url('assets/uploads/') ?><?= $events->img_url ?>" class="img-fluid w-100 h-80" alt="Image">
                        <div class="event-overlay">
                           <a href="<?= base_url('assets/uploads/') ?><?= $events->img_url ?>" data-lightbox="event-1">
                              <i class="fas fa-search-plus text-white fa-2x"></i>
                           </a>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                        <small class="text-white">
                           <i class="fas fa-calendar me-1 text-primary"></i> Berlaku Sampai : <?= date('d F Y', strtotime($events->event_end)); ?>
                        </small>
                     </div>
                  </div>
                  <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                     <a href="#" class="h4"><?= $events->title ?></a>
                     <p class="mb-0 mt-3"><?= $events->content ?></p>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
</div>