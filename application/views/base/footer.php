<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
   <div class="container py-5">
      <div class="row g-5">
         <div class="col-md-7 col-lg-4 col-xl-3">
            <div class="footer-item">
               <h2 class="fw-bold mb-3"><span class="text-primary mb-0">Arena</span><span class="text-secondary">Bocil</span></h2>
               <p class="mb-4">Kami menyediakan lingkungan yang aman dan menyenangkan untuk anak-anak, di mana mereka bisa bermain, belajar, dan tumbuh bersama.</p>
               <div class="border border-primary p-3 rounded bg-light">
                  <h5 class="mb-3">Newsletter</h5>
                  <div class="row align-items-center mb-3">
                     <div class="position-relative col-md-12 col-lg-12 border border-primary rounded" style="max-width: 400px;">
                        <form id="newsletterForm">
                           <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email" id="email" name="email" required>
                        </form>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-auto">
                        <button type="button" class="btn btn-block btn-primary max-width py-3 text-white" onclick="submitEmail()">Submit</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="footer-item">
               <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">LOCATION</h4>
               <div class="d-flex flex-column align-items-start">
                  <span class="text-body mb-4"><i class="fa fa-map-marker-alt text-primary me-2"></i> Sentrakota Jatibening Blok No.C/05, RT.001/RW.003, Jatibening Baru, Kec. Pd. Gede, Kota Bks, Jawa Barat 17412</span>
                  <span class="text-start rounded-0 text-body mb-4"><i class="fa fa-phone-alt text-primary me-2"></i> 0852-8278-3549</span>
                  <span class="text-start rounded-0 text-body mb-4"><i class="fas fa-envelope text-primary me-2"></i> arenabocil05@gmail.com</span>
                  <div class="footer-icon d-flex">
                     <a class="btn btn-primary btn-md-square me-3 rounded-circle text-white" href=""><i class="fab fa-instagram fa-2x"></i></a>
                     <a class="btn btn-primary btn-md-square me-3 rounded-circle text-white" href=""><i class="fab fa-tiktok fa-2x"></i></a>
                     <a href="#" class="btn btn-primary btn-md-square me-3 rounded-circle text-white"><i class="fab fa-youtube fa-2x"></i></a>
                     <a href="<?= base_url('Auth') ?>" class="btn btn-primary btn-md-square rounded-circle text-white"><i class="fas fa-user fa-2x"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 col-xl-3">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">MENU</h4>
            <div class="footer-item mb-3">
               <a href="<?= base_url('home/terms') ?>" class="d-flex align-items-center text-decoration-none">
                  <span class="btn btn-primary btn-md-square me-3 rounded-circle text-white">
                     <i class="fas fa-clipboard fa-2x"></i>
                  </span>
                  <span>Syarat / Tata Tertib</span>
               </a>
            </div>
            <div class="footer-item mb-3">
               <a href="<?= base_url('home/contacts') ?>" class="d-flex align-items-center text-decoration-none">
                  <span class="btn btn-primary btn-md-square me-3 rounded-circle text-white">
                     <i class="fas fa-headset fa-2x"></i>
                  </span>
                  <span>Kontak Kami</span>
               </a>
            </div>
            <div class="footer-item mb-3">
               <a href="<?= base_url('home/programs') ?>" class="d-flex align-items-center text-decoration-none">
                  <span class="btn btn-primary btn-md-square me-3 rounded-circle text-white">
                     <i class="fas fa-th-list"></i>
                  </span>
                  <span>Program</span>
               </a>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="footer-item">
               <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">OUR GALLERY</h4>
               <div class="row g-3">
                  <div class="col-4">
                     <div class="footer-galary-img rounded-circle border border-primary">
                        <img src="<?= base_url('assets') ?>/img/galary-1.jpg" class="img-fluid rounded-circle p-2" alt="">
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="footer-galary-img rounded-circle border border-primary">
                        <img src="<?= base_url('assets') ?>/img/galary-2.jpg" class="img-fluid rounded-circle p-2" alt="">
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="footer-galary-img rounded-circle border border-primary">
                        <img src="<?= base_url('assets') ?>/img/galary-3.jpg" class="img-fluid rounded-circle p-2" alt="">
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="footer-galary-img rounded-circle border border-primary">
                        <img src="<?= base_url('assets') ?>/img/galary-4.jpg" class="img-fluid rounded-circle p-2" alt="">
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="footer-galary-img rounded-circle border border-primary">
                        <img src="<?= base_url('assets') ?>/img/galary-5.jpg" class="img-fluid rounded-circle p-2" alt="">
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="footer-galary-img rounded-circle border border-primary">
                        <img src="<?= base_url('assets') ?>/img/galary-6.jpg" class="img-fluid rounded-circle p-2" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Footer End -->
<div class="container-fluid copyright bg-dark py-3">
   <div class="container">
      <div class="row">
         <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>ArenaBocil.id</a>, All right reserved.</span>
         </div>
         <div class="col-md-6 my-auto text-center text-md-end text-white">
         </div>
      </div>
   </div>
</div>
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
</body>
<script>
   function submitEmail() {
      var email = $('#email').val(); // Mengambil nilai input email dari form

      if (email) {
         // Mengirimkan data email menggunakan jQuery AJAX
         $.ajax({
            url: '<?= base_url('Service/subscription') ?>', // Arahkan ke controller yang akan menangani proses
            type: 'POST',
            data: {
               email: email
            }, // Kirim data email
            dataType: 'json',
            success: function(response) {
               if (response.status === 'Success') {
                  alert('Subscription successful!');
                  $('#email').val('');
               } else {
                  alert(response.message); // Menampilkan pesan error jika ada
               }
            },
            error: function(xhr, status, error) {
               console.error('Error:', error);
               alert('Terjadi kesalahan, silakan coba lagi.');
            }
         });
      } else {
         alert('Mohon masukkan alamat email yang valid.');
      }
   }
</script>

</html>