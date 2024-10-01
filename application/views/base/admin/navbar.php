<nav class="main-header navbar navbar-expand navbar-white navbar-light py-2">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

   </ul>
   <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
            <span class="badge badge-danger navbar-badge">3</span>
            <i class="far fa-bell"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
               <div class="media">
                  <img src="<?= base_url('assets/adminLTE') ?>/dist/img/avatar5.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                     <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                     </h3>
                     <p class="text-sm">Call me whenever you can...</p>
                     <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
               </div>
               <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
         </div>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            <h5>User Login</h5>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="width:auto;">
            <a class="dropdown-header"></a>
            <a class="text-center d-flex justify-content-center align-items-center">

            </a>
            <a class="text-center d-flex justify-content-center align-items-center mb-2">

            </a>
            <a class="dropdown-item" href="<?= base_url('auth') ?>">
               <i class="fas fa-power-off text-danger mr-2"></i> Logout
            </a>
            <a class=" dropdown-footer"></a>
         </div>
      </li>
   </ul>
</nav>