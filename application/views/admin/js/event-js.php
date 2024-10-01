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
         "responsive": true,
         "autoWidth": true,
         "serverSide": true,
         "scrollX": true,
         "ordering": true,
         "order": [
            [0, 'asc']
         ],
         dom: "lfBrtip",
         "ajax": {
            "url": "<?= base_url('Events/view_data_where'); ?>",
            "type": "POST",
            "data": function(data) {
               data.sku = $('#sku').val();
            }
         },
         "deferRender": true,
         "aLengthMenu": [
            [10, 100, 1000, 10000, 100000, 1000000, 1000000000],
            [10, 100, 1000, 10000, 100000, 1000000, "All"]
         ],
         "columns": [{
               "data": "event_start",
               render: function(data, type, row) {
                  return row.event_start + ' - ' + row.event_end;
               }
            },
            {
               "data": "title"
            },
            {
               "data": "img_url",
               render: function(data, type, row, meta) {
                  var baseUrl = "<?= base_url('assets/uploads/') ?>";
                  var defaultImage = "<?= base_url('assets/uploads/nopic.png') ?>";
                  return data ? '<img src="' + baseUrl + data + '" alt="Agenda Photo" width="80" height="80">' : '<img src="' + defaultImage + '" alt="Agenda Photo" width="80" height="80">';
               }
            },
            {
               "data": "event_start",
               render: function(data, type, row) {
                  return row.event_start + ' - ' + row.event_end;
               }
            },
            {
               "data": "content"
            },
            {
               "data": "id",
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

   var loadFile = function(event, imageId) {
      var image = document.getElementById(imageId);
      image.src = URL.createObjectURL(event.target.files[0]);
   };

   function Simpan_data(trigger) {
      var fdata = new FormData();
      var form_data = $('#quickForm').serializeArray();
      $.each(form_data, function(key, input) {
         fdata.append(input.name, input.value);
      });
      $('#quickForm input[type="file"]').each(function(i, e) {
         if ($('#' + e.getAttribute("name")).val()) {
            var file_data = $('#' + e.getAttribute("name")).prop('files')[0];
            fdata.append(e.getAttribute("name"), file_data);
         }
      });
      var existing_photo = $('#img_url_label').text() !== 'No file | Upload' ? $('#img_url_label').text() : null;
      if (existing_photo) {
         fdata.append('img_url', existing_photo);
      }
      fdata.append('event_start', $('#event-start').val());
      fdata.append('event_end', $('#event-end').val());
      var vurl = (trigger == 'Add') ? "<?= base_url('Events/add_event') ?>" : "<?= base_url('Events/update_event') ?>";
      // AJAX request untuk menyimpan data
      $.ajax({
         url: vurl,
         method: "POST",
         data: fdata,
         processData: false,
         contentType: false,
         success: function(data) {
            $('#quickForm')[0].reset();
            $('#v_image1').attr('src', '');
            Toast.fire({
               icon: 'success',
               title: 'Data saved successfully!'
            });
            $('#mainModal').modal('hide');
            mainTable.draw();
         },
         error: function(err) {
            Toast.fire({
               icon: 'error',
               title: 'Failed to save data!'
            });
         }
      });
   }

   $(document).on("click", ".konfirmasiHapus", function() {
      $('#iddelete').text($(this).attr("data-id"));
   })

   function Delete_data() {
      var fdata = new FormData();
      fdata.append('id', $('#iddelete').text());
      vurl = "<?= base_url('Events/ajax_delete') ?>";
      $.ajax({
         url: vurl,
         method: "post",
         processData: false,
         contentType: false,
         data: fdata,
         success: function(data) {
            $('#modal-delete').modal('hide');
            $('#main-table').DataTable().row("#" + $('#iddelete2').text()).remove().draw();
            // Show success message
            location.reload();
            Toast.fire({
               icon: 'success',
               title: 'Data Deleted successfully!'
            });
         },
         error: function(data) {
            $('#modal-delete').modal('hide');
            $('#main-table').DataTable().row("#" + $('#iddelete2').text()).remove().draw();
            location.reload();
            Toast.fire({
               icon: 'success',
               title: 'Data Deleted successfully!'
            });
         }
      });
   }
</script>