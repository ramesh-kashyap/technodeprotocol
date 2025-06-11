   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">General Setting</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">General Setting</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.general-setting-post') }}" method="POST">
                                     {{ csrf_field() }}
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">DAYS</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Enter Daysd" type="text" name="days">
                                            </div>
     
                                           
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Users</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Enter User" type="text" name="users">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Total Deposit</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Enter Deposit" type="text" name="deposit">
                                            </div>
                                             <div class="mb-3 col-md-12">
                                                <label class="form-label">Total Withdraw</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Enter Withdraw" type="text" name="withdraw">
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
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
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
     