<script>
   $(document).ready(function() {
      $('#no-telp').inputmask({
         mask: '+62 999-9999-9999',
         placeholder: '___-____-____',
         showMaskOnHover: false,
         showMaskOnFocus: true,
         onBeforePaste: function(pastedValue) {
            return pastedValue;
         }
      });
   });
   document.getElementById('primarybtn').addEventListener('click', function() {
      // Tampilkan step 2 dan sembunyikan step 1
      document.getElementById('step1').style.display = 'none';
      document.getElementById('step2').style.display = 'block';

      // Ubah teks tombol dan tampilkan tombol kembali
      this.textContent = 'Submit';
      document.getElementById('backbtn').style.display = 'inline-block';
   });
   document.getElementById('backbtn').addEventListener('click', function() {
      // Tampilkan step 1 dan sembunyikan step 2
      document.getElementById('step2').style.display = 'none';
      document.getElementById('step1').style.display = 'block';
      document.getElementById('primarybtn').textContent = 'Selanjutnya';
      this.style.display = 'none';
   });

   document.getElementById('increaseBtn').addEventListener('click', function() {
      const input = document.getElementById('ticket_quantity');
      input.value = parseInt(input.value) + 1;
   });

   document.getElementById('decreaseBtn').addEventListener('click', function() {
      const input = document.getElementById('ticket_quantity');
      if (parseInt(input.value) > 1) {
         input.value = parseInt(input.value) - 1;
      }
   });
</script>