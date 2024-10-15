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

      $('#termsCheck').on('change', function() {
         // Enable the button if the checkbox is checked, otherwise disable it
         $('#submitBtn').prop('disabled', !this.checked);
      });
   });
   // Event handler untuk tombol "Submit || Back"
   $('#primarybtn').on('click', () => {
      if ($('#step2').is(':visible')) {
         if ($('#termsCheck').is(':checked')) {
            simpanAlert(); // Call the function to save data
         } else {
            alert('Silakan setujui syarat dan ketentuan untuk melanjutkan.');
            $('#submitBtn').prop('disabled', true);
         }
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
   const firstTotal = $('#total');
   const decreaseBtn = $('#decreaseBtn');
   const increaseBtn = $('#increaseBtn');
   const voucherInput = $('#voucher');
   const voucherError = $('#voucherError');
   const reservationDateInput = $('#reservation_date');
   const today = new Date().toISOString().split('T')[0]; // today format date
   reservationDateInput.attr('min', today);


   let previousTotalPrice; // Declare variable to store the previous total price

   const validVoucherCode = {
      "FUNTOBER-ABC": 50,
      "FUNTOBER-XYZ": 30,
   }; // Kode voucher yang valid

   function calculateTotal() { // 1-- to calculate total price
      const totalPrice = ticketPrice * quantity;
      totalCountInput.val(totalPrice.toLocaleString());
      firstTotal.val(totalPrice.toLocaleString());
      previousTotalPrice = totalPrice; // Update previous total price
      return totalPrice; // Kembalikan total price untuk penggunaan selanjutnya
   }
   // Function to calculate and update total price
   function manageTicketBooking() {
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

   // Validasi voucher
   voucherInput.on('change', function() {
      const voucherCode = $(this).val().trim();
      voucherError.hide();
      const totalPrice = parseFloat(totalCountInput.val().replace(/[^0-9.-]+/g, ""));

      if (voucherCode === '') {
         calculateTotal();
         voucherError.hide();
         return;
      }
      $.ajax({
         url: "<?= base_url('Service/validate_voucher') ?>",
         method: 'POST',
         data: {
            voucherCode: voucherCode
         },
         dataType: 'json',
         success: function(response) {
            if (response.valid) {
               const discountPercentage = response.discount;
               const discount = totalPrice * (discountPercentage / 100);
               const discountedPrice = totalPrice - discount;
               previousTotalPrice = discountedPrice;

               if (discountPercentage !== 0) {
                  voucherError.text(`Potongan ${discountPercentage}% diterapkan!`).show();
                  totalCountInput.val(discountedPrice.toLocaleString());
               }
            } else {
               voucherError.text(response.message).show();
               calculateTotal();
            }
         },
         error: function() {
            voucherError.text('Kode voucher salah.').show();
            calculateTotal();
         }
      });
   });

   function formatTanggal(tanggal) {
      const options = {
         day: '2-digit',
         month: 'long',
         year: 'numeric'
      };
      return new Date(tanggal).toLocaleDateString('id-ID', options);
   }

   let discountPercentage = 0;
   const simpanAlert = () => {
      // Mengambil nilai dari input
      const ticketType = $('#ticketType').val();
      const name = $('#name').val();
      const noTelp = $('#no_telp').val();
      const email = $('#email').val();
      const reservationDate = formatTanggal($('#reservation_date').val());
      const reservationTime = $('#reservation_time').val();
      const ticketQuantity = $('#ticket_quantity').val();
      const firstPrice = $('#total').val();
      const totalPrice = $('#count').val();
      const voucher = $('#voucher').val();
      // Menampilkan alert dengan nilai yang diambil
      alert(`Data Pemesanan:\n Jenis Tiket: ${ticketType}\n Nama: ${name}\n Nomor Telepon: ${noTelp}\n Email: ${email}\n Tanggal Booking: ${reservationDate}\n Waktu Booking: ${reservationTime}\n Jumlah Tiket: ${ticketQuantity}\n Voucher: ${voucher}\n Total Harga: ${firstPrice}\n Total Diskon: ${totalPrice}`);
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