<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Dashboard Events</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Events</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <button type="button" class="btn btn-primary mb-2 bg-primary" id="addbtn" data-toggle="modal" data-target="#mainModal" href="#">
                        <i class="fa fa-plus"></i> Add Data
                     </button>
                  </div>
                  <div class="card-body">
                     <table id="main-table" class="table display nowrap table-striped table-bordered">
                        <thead class="text-center">
                           <tr>
                              <th>Tanggal</th>
                              <th>Event</th>
                              <th>Picture</th>
                              <th>Waktu</th>
                              <th>Content</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody></tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<footer class="main-footer">
   <strong>Copyright &copy; 2024. Arena Bocil </strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
   </div>
</footer>

<div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog " role="document">
      <div class="modal-content">
         <div class="modal-header bg-info">
            <h4 class="modal-title" id="exampleModalLabel">ADD DATA</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
         </div>
         <div class="modal-body table-responsive" style="overflow-y: auto; max-height: calc(100vh - 200px);">
            <form role="form" id="quickForm">
               <div class="card-body">
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-4">
                           <label for="sku">EVENT ID :</label>
                        </div>
                        <div class="col-md-8">
                           <input type="text" name="sku" class="form-control" id="sku" placeholder="auto generate" readonly>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-4">
                           <label for="title">TITLE :</label>
                        </div>
                        <div class="col-md-8">
                           <input type="text" name="title" class="form-control" id="title">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row justify-content-center">
                        <div class="col-md-4">
                           <label for="img_url">PICTURE :</label>
                        </div>
                        <div class="col-md-8">
                           <img id="v_image" width="200px" height="200px" class="mt-3 mb-2" style="justify-content:center; align-items:center;">
                           <div class="media-container d-flex justify-content-center mb-auto">
                              <input type="file" id="img_url" name="img_url" onchange="loadFile(event, 'v_image')">
                              <label class="input-group-text" for="img_url" id="img_url_label">Upload</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-4">
                           <label>DATE START :</label>
                        </div>
                        <div class="col-md-8">
                           <div class="input-group">
                              <input type="date" class="form-control float-right" id="event-start" name="event_start">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-4">
                           <label>DATE END :</label>
                        </div>
                        <div class="col-md-8">
                           <div class="input-group">
                              <input type="date" class="form-control float-right" id="event-end" name="event_end">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-4">
                           <label for="content">CONTENT :</label>
                        </div>
                        <div class="col-md-8">
                           <textarea cols="auto" rows="2" class="form-control" style="width: 100%;" id="content" name="content"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-md-5 col-form-label">
                        <label for="content">STATUS :</label>
                     </div>
                     <div class="col-md-3">
                        <div class="icheck-primary d-inline">
                           <input class="form-check-input" type="radio" id="active" name="status" value="1">
                           <label for="active">Active</label>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="icheck-primary d-inline">
                           <input class="form-check-input" type="radio" id="nonactive" name="status" value="0">
                           <label for="nonactive">NonActive</label>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer justify-content-right">
            <button type="button" class="btn btn-primary" id="btnsubmit" onclick="Simpan_data('Add')">Save Data</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="modal-delete">
   <div class="modal-dialog">
      <div class="modal-content bg-danger text-white">
         <div class="modal-header">
            <h4 class="modal-title">Delete Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <label id="iddelete2" hidden> </label>Apakah ingin delete <label id="iddelete"> </label> ?
         </div>
         <div class="modal-footer justify-content-right">
            <form action="#" method="post">
               <button type="button" id="delete" onclick="Delete_data()" class="btn btn-outline-light">Yes</button>
            </form>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
         </div>
      </div>
   </div>
</div>