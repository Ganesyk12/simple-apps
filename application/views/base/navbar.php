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
               <a href="<?= base_url('Home') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Home' && $this->uri->segment(2) == '') ? 'active' : '' ?>">Dashboard</a>
               <a href="<?= base_url('Service') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Service') ? 'active' : '' ?>">Ticket & Promo</a>
               <a href="<?= base_url('Home/events') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Home' && $this->uri->segment(2) == 'events') ? 'active' : '' ?>">Event</a>
               <a href="<?= base_url('Home/blogs') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Home' && $this->uri->segment(2) == 'blogs') ? 'active' : '' ?>">Blog / Tips Parenting</a>
            </div>
         </div>

      </nav>
   </div>
</div>