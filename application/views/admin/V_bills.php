<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Dashboard Transaction</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Transaction</li>
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
                     <table id="main-table" class="table display nowrap table-striped table-bordered" style="overflow-x: scroll;">
                        <thead class="text-center">
                           <tr>
                              <th>SKU</th>
                              <th>Ticket Type</th>
                              <th>Name</th>
                              <th>Phone Number</th>
                              <th>Email</th>
                              <th>Reservation date</th>
                              <th>Reservation time</th>
                              <th>Ticket Qty</th>
                              <th>Total Price</th>
                              <th>Voucher</th>
                              <th>Discount Price</th>
                              <th>Status</th>
                              <th>Created At</th>
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