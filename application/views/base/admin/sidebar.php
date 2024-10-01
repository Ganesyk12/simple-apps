<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <a href="<?= base_url('admin/dashboard') ?>" class="brand-link">
      <img src="<?= base_url('assets') ?>/img/Logo.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dashboard</span>
   </a>
   <div class="sidebar">
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
               <a href="#" class="nav-link <?= ($this->uri->segment(2) == 'event' || $this->uri->segment(2) == 'ticket') ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview ml-3 mr-3">
                  <li class="nav-item">
                     <a href="<?= base_url('Events') ?>" class="nav-link <?= ($this->uri->segment(1) == 'Events') ? 'active' : '' ?>">
                        <i class="fas fa-calendar-day nav-icon"></i>
                        <p>Events</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('Tickets') ?>" class="nav-link <?= ($this->uri->segment(1) == 'Tickets') ? 'active' : '' ?>">
                        <i class="fas fa-ticket-alt nav-icon"></i>
                        <p>Ticket & Promo</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="<?= base_url('admin/transaction') ?>" class="nav-link <?= ($this->uri->segment(1) == 'admin/transaction') ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Booking List
                     <span class="right badge badge-danger">New</span>
                  </p>
               </a>
            </li>
         </ul>
      </nav>
   </div>
</aside>