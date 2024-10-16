<script type="text/javascript">
   $('.select2').select2();
   var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
   });

   var mainTable = null;
   $(document).ready(function() {
      mainTable = $('#main-table').DataTable({
         "processing": true,
         "responsive": false,
         "autoWidth": true,
         "serverSide": true,
         "scrollX": true,
         "ordering": true,
         "order": [
            [0, 'asc']
         ],
         dom: "lfBrtip",
         "ajax": {
            "url": "<?= base_url('Transaction/view_data_where'); ?>",
            "type": "POST",
            "data": function(data) {
               data.trxid = $('#trxid').val();
            }
         },
         "deferRender": true,
         "aLengthMenu": [
            [10, 100, 1000, 10000, 100000, 1000000, 1000000000],
            [10, 100, 1000, 10000, 100000, 1000000, "All"]
         ],
         "columns": [{
               "data": "sku",
            },
            {
               "data": "ticketType",
            },
            {
               "data": "name",
            },
            {
               "data": "no_telp",
            },
            {
               "data": "email",
            },
            {
               "data": "reservation_date",
               render: function(data, type, row) {
                  function formatDate(dateString) {
                     const date = new Date(dateString);
                     const day = String(date.getDate()).padStart(2, '0');
                     const month = String(date.getMonth() + 1).padStart(2, '0');
                     const year = date.getFullYear();
                     return `${day}-${month}-${year}`;
                  }
                  const reservation_date = formatDate(row.reservation_date);
                  return `${reservation_date}`;
               }
            },
            {
               "data": "reservation_time"
            },
            {
               "data": "ticket_quantity",
            },
            {
               "data": "total",
            },
            {
               "data": "voucher"
            },
            {
               "data": "discount_price",
            },
            {
               "data": "status",
            },
            {
               "data": "created_at",
               render: function(data, type, row) {
                  function formatDateTime(dateTimeString) {
                     const date = new Date(dateTimeString);

                     const day = String(date.getDate()).padStart(2, '0');
                     const month = String(date.getMonth() + 1).padStart(2, '0');
                     const year = date.getFullYear();
                     const hours = String(date.getHours()).padStart(2, '0');
                     const minutes = String(date.getMinutes()).padStart(2, '0');
                     const seconds = String(date.getSeconds()).padStart(2, '0');
                     const formattedDate = `${day}-${month}-${year}`;
                     const formattedTime = `${hours}:${minutes}:${seconds}`;
                     return `${formattedDate}<br>${formattedTime}`;
                  }
                  return formatDateTime(row.created_at);
               }
            },
            {
               "data": "trxid",
               "sortable": false,
               render: function(data, type, row, meta) {
                  mnu = '';
                  mnu = mnu + '<div class="btn btn-success btn-sm mr-1 konfirmasiView" data-id="' + data + '" data-toggle="modal" data-target="#agendaModal" > <i class="fa fa-eye"></i></div>';
                  mnu = mnu + '<div class="btn btn-primary btn-sm mr-1 konfirmasiEdit" data-id="' + data + '" data-toggle="modal" data-target="#agendaModal"> <i class="fa fa-edit"></i></div>';
                  mnu = mnu + '<div class="btn btn-danger btn-sm mr-1 konfirmasiHapus" data-id="' + data + '" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
                  return mnu;
               }
            },
         ],
      });
      bsCustomFileInput.init();
   });
</script>