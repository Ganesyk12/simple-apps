<script>
   $('.select2').select2();
   var Toast = Swal.mixin({
      toast: true,
      position: 'center',
      showConfirmButton: false,
      timer: 1500
   });

   $(document).ready(() => {
      $('#no-telp').inputmask({
         mask: '+62 999-9999-9999',
         placeholder: '___-____-____',
         showMaskOnHover: false,
         showMaskOnFocus: true,
         onBeforePaste: (pastedValue) => {
            return pastedValue;
         }
      });
   });

   // Event handler untuk tombol "Submit || Back"
   $('#primarybtn').on('click', () => {
      if ($('#step2').is(':visible')) {
         // step2 active condition, run simpanAlert()
         simpanAlert();
      } else {
         // if not, show step2 and change button
         $('#step1').hide();
         $('#step2').show();
         $('#backbtn').css('display', 'inline-block');
         $('#primarybtn').text('Pesan Tiket');
      }
   });

   $('#backbtn').on('click', () => {
      $('#step2').hide();
      $('#step1').show();
      $('#primarybtn').text('Selanjutnya');
      $('#backbtn').hide();
   });

   // Event handler untuk tombol "Increase || Decrease"
   $('#increaseBtn').on('click', () => {
      const input = $('#ticket_quantity');
      input.val(parseInt(input.val()) + 1);
   });
   $('#decreaseBtn').on('click', () => {
      const input = $('#ticket_quantity');
      if (parseInt(input.val()) > 1) {
         input.val(parseInt(input.val()) - 1);
      }
   });

   // Initial ticket price and quantity
   let ticketPrice = 30000; // Default price for "Harga per jam"
   let quantity = 1;
   const ticketTypeSelect = $('#ticketType');
   const ticketQuantityInput = $('#ticket_quantity');
   const totalCountInput = $('#count');
   const decreaseBtn = $('#decreaseBtn');
   const increaseBtn = $('#increaseBtn');
   const reservationDateInput = $('#reservation_date');
   const today = new Date().toISOString().split('T')[0]; // today format date
   reservationDateInput.attr('min', today);

   // Function to calculate and update total price
   function manageTicketBooking() {

      function calculateTotal() { // 1-- to calculate total price
         const totalPrice = ticketPrice * quantity;
         totalCountInput.val(`Rp ${totalPrice.toLocaleString()}`);
      }

      function isWeekend(date) {
         const day = date.getDay(); // 2-- categories day(0 = Sunday, 6 = Saturday)
         return (day === 0 || day === 6);
      }

      ticketTypeSelect.on('change', () => { // 3-- Listen for ticket type && reservation date
         updateTicketPrice();
      });
      reservationDateInput.on('change', () => {
         updateTicketPrice();
      });

      decreaseBtn.on('click', () => { // 4-- Increase || Decrease ticket quantity
         if (quantity > 1) {
            quantity--;
            ticketQuantityInput.val(quantity);
            calculateTotal();
         }
      });
      increaseBtn.on('click', () => {
         quantity++;
         ticketQuantityInput.val(quantity);
         calculateTotal();
      });

      function updateTicketPrice() { // 5-- update ticket price based on date and ticket type
         const selectedDate = new Date(reservationDateInput.val());
         const selectedOption = ticketTypeSelect.find('option:selected');
         const ticketType = selectedOption.val();
         if (!isNaN(selectedDate)) { // 6-- validate date selected(weekend || weekdays)
            if (isWeekend(selectedDate)) {
               if (ticketType === 'HT') {
                  ticketPrice = 40000;
               } else if (ticketType === 'DT') {
                  ticketPrice = 60000;
               }
            } else {
               if (ticketType === 'HT') {
                  ticketPrice = 30000;
               } else if (ticketType === 'DT') {
                  ticketPrice = 50000;
               }
            }
         }
         calculateTotal();
      }
      calculateTotal(); // 7-- Initial calculation on page load
   }
   manageTicketBooking(); // 8 -- release function

   function formatTanggal(tanggal) {
      const options = {
         day: '2-digit',
         month: 'long',
         year: 'numeric'
      };
      return new Date(tanggal).toLocaleDateString('id-ID', options);
   }

   const simpanAlert = () => {
      // Mengambil nilai dari input
      const ticketType = $('#ticketType').val();
      const name = $('#name').val();
      const noTelp = $('#no_telp').val();
      const email = $('#email').val();
      const reservationDate = formatTanggal($('#reservation_date').val());
      const reservationTime = $('#reservation_time').val();
      const ticketQuantity = $('#ticket_quantity').val();
      const totalPrice = $('#count').val();

      // Menampilkan alert dengan nilai yang diambil
      alert(`Data Pemesanan:\n Jenis Tiket: ${ticketType}\n Nama: ${name}\n Nomor Telepon: ${noTelp}\n Email: ${email}\n Tanggal Booking: ${reservationDate}\n Waktu Booking: ${reservationTime}\n Jumlah Tiket: ${ticketQuantity}\n Total Harga: ${totalPrice}`);
   };

   const Simpan_data = () => {
      var fdata = new FormData();
      var form_data = $('#bookingForm').serializeArray();
      $.each(form_data, function(key, input) {
         fdata.append(input.name, input.value);
      });

      $.ajax({
         url: "<?= base_url() ?>",
         method: "POST",
         data: fdata,
         processData: false,
         contentType: false,
         success: function(data) {
            $('#bookingForm')[0].reset();
            $('#ticketType').select2().val('').trigger('change');
            Toast.fire({
               icon: 'success',
               title: 'Registration successfully!'
            });
         },
         error: function(err) {
            Toast.fire({
               icon: 'error',
               title: 'Failed to submit data!'
            });
         }
      });
   }
</script>