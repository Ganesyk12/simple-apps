<div class="container-fluid events py-1 bg-light">
   <div class="container py-3">
      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
         <h4 class="mb-5 display-3">Events</h4>
      </div>
      <div class="row g-5 justify-content-center">
         <?php foreach ($event as $ev) { ?>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
               <div class="events-item bg-primary rounded">
                  <div class="events-inner position-relative">
                     <div class="events-img overflow-hidden rounded-circle position-relative">
                        <img src="<?= base_url('assets/uploads/') ?><?= $ev->img_url ?>" class="img-fluid w-100 h-80 " alt="Image">
                        <div class="event-overlay">
                           <a href="<?= base_url('assets/uploads/') ?><?= $ev->img_url ?>" data-lightbox="event-1">
                              <i class="fas fa-search-plus text-white fa-2x"></i>
                           </a>
                        </div>
                     </div>
                     <div class="px-6 py-2 bg-secondary text-white text-center events-rate"><?= $ev->date_created ?></div>
                     <div class="d-flex justify-content-between px-4 py-2 bg-secondary">
                        <small class="text-white">
                           <i class="fas fa-calendar me-1 text-primary"></i>
                           <?= $ev->event_start ?> - <?= $ev->event_end ?>
                        </small>
                     </div>
                  </div>
                  <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                     <a href="#" class="h4"><?= $ev->title ?></a>
                     <p class="mb-0 mt-3"><?= $ev->content ?></p>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
</div>