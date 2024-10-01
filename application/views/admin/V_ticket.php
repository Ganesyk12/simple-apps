<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Dashboard Ticket & Promo</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tickets</li>
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
                     <!-- <button type="button" class="btn btn-primary mb-2 bg-primary" id="addbtn" data-toggle="modal" data-target="#mainModal" Onclick="view_modal('1','Add')" href="#"> -->
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
                              <th>Pict</th>
                              <th>Waktu</th>
                              <th>Content</th>
                           </tr>
                        </thead>
                        <tbody></tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <section class="col-lg-7 connectedSortable">
            </section>
            <section class="col-lg-5 connectedSortable">
            </section>
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