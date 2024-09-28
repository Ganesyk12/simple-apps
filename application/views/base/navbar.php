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
               <a href="<?= base_url('Home') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Home' || $this->uri->segment(1) == '') ? 'active' : '' ?>">Dashboard</a>
               <a href="<?= base_url('News') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'News' || $this->uri->segment(1) == '') ? 'active' : '' ?>">Event</a>
               <a href="<?= base_url('Service') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Service' || $this->uri->segment(1) == '') ? 'active' : '' ?>">Ticket</a>
               <a href="<?= base_url('About') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'About' || $this->uri->segment(1) == '') ? 'active' : '' ?>">Blog / Tips</a>
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                  <div class="dropdown-menu m-0 bg-secondary rounded-0">
                     <a href="<?= base_url('home/programs') ?>" class="dropdown-item">Program</a>
                     <a href="<?= base_url('home/terms') ?>" class="dropdown-item">Tata Tertib</a>
                     <a href="<?= base_url('home/contacts') ?>" class="dropdown-item">Kontak Kami</a>
                  </div>
               </div>
            </div>

         </div>
      </nav>
   </div>
</div>