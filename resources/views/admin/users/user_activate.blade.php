   <!--**********************************
            Content body start
        ***********************************-->
   <div class="content-body">
       <div class="container-fluid">
           <div class="row page-titles">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item active"><a href="javascript:void(0)">User Management</a></li>
                   <li class="breadcrumb-item"><a href="javascript:void(0)">User Activation</a></li>
               </ol>
           </div>
           <!-- row -->
           <div class="row">


               <div class="col-xl-6 col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">User Activation</h4>
                       </div>
                       <div class="card-body">
                           <div class="basic-form">
                               <form action="{{ route('admin.activate_admin_post') }}" method="POST">
                                {{ csrf_field() }}
                                   <div class="row">
                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Enter Amount</label>
                                        
                                                    <input placeholder="Enter Amount" required min="50" class="form-control" type="number"  name="amount" value="" >
                                       </div>

                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">UserID</label>
                                           <input placeholder="Enter UserID" class="form-control check_sponsor_exist" type="text" data-response="sponsor_res" name="memberID"
                                               value="" >
                                               
                                               <span id="sponsor_res"></span>
                                       </div> 
                                       
                                      
                                       
                                   </div>

                                   <div class="mb-3">
                                       <div class="form-check">
                                           <input class="form-check-input" type="checkbox">
                                           <label class="form-check-label">
                                               Check me out
                                           </label>
                                       </div>
                                   </div>
                                   <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>




           </div>
       </div>
   </div>
   
   
         
   <!--**********************************
            Content body end
        ***********************************-->
