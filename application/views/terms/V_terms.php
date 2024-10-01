<div class="container-fluid py-2 about bg-light">
   <div class="container py-1">
      <div class="row g-5 align-items-center">
         <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="program-item rounded">
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/event-1.jpg" class="img-fluid w-100" alt="Image"
                        onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Tata Tertib</h4>
            <h3 class="text-dark mb-4 display-5">Berikut Syarat & Tata Tertib yang harap diperhatikan</h3>
            <ul style="font-size: medium;">
               <li>1 tiket untuk 1 anak dan pendamping.</li>
               <li>Wajib melepas sepatu/sandal dan memakai kaos kaki.</li>
               <li>Anak usia &lt;5 tahun wajib memakai diapers.</li>
               <li>Balita harus didampingi orang tua/pendamping.</li>
               <li>Orang tua/pendamping wajib mengawasi anak.</li>
               <li>Jaga kebersihan & kerapihan area bermain.</li>
               <li>Tidak bertanggung jawab atas kehilangan/kerusakan barang.</li>
               <li>Dilarang membawa makanan dan minuman.</li>
               <li>Dilarang memakai pakaian bertali/string/strap.</li>
               <li>Melepas perhiasan/aksesoris tajam yang berbahaya.</li>
               <li>Dilarang mencuri atau merusak perlengkapan. Apabila terbukti wajib mengganti rugi.</li>
               <li>Dilarang berkelahi atau berbuat kasar.</li>
               <li>Playground bukan tempat penitipan anak.</li>
               <li>Kami tidak bertanggung jawab atas kecelakaan, karena tanggung jawab orang tua/pendamping.</li>
            </ul>
         </div>
      </div>
      <script>
         function zoomIn(image) {
            image.style.transition = "transform 0.3s ease";
            image.style.transform = "scale(1.1)"; // Zoom in
         }

         function zoomOut(image) {
            image.style.transition = "transform 0.3s ease";
            image.style.transform = "scale(1)"; // Zoom out
         }
      </script>
   </div>
</div>