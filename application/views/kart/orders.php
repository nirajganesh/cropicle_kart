
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/vendors/css/tables/datatable/datatables.min.css">

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-md-9">
                            <h5 class="content-header-title float-left pr-1 mb-0">Orders</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a></li>
                                    <li class="breadcrumb-item active">Orders</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">See all the orders</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped order-dt">
                                            <thead>
                                                <tr>
                                                    <th>Order no.</th>
                                                    <th>Order item</th>
                                                    <th>Order Date</th>
                                                    <th>Order Amount</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#5147</td>
                                                    <td>Regular demand list</td>
                                                    <td>25-06-2020</td>
                                                    <td>Rs. 10500/-</td>
                                                    <td class="text-warning">Pending</td>
                                                    <td class='d-flex'>
                                                        <span data-toggle="modal" data-target="#orderModal">
                                                            <a href="#" data-toggle="tooltip" title="See order details"><i class="badge-circle border badge-circle-light-primary bx bx-info-circle text-dark font-medium-1"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5148</td>
                                                    <td>Regular demand list</td>
                                                    <td>25-06-2020</td>
                                                    <td>Rs. 10500/-</td>
                                                    <td class="text-primary">Processed</td>
                                                    <td class='d-flex'>
                                                        <span data-toggle="modal" data-target="#orderModal">
                                                            <a href="#" data-toggle="tooltip" title="See order details"><i class="badge-circle border badge-circle-light-primary bx bx-info-circle text-dark font-medium-1"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5149</td>
                                                    <td>Regular demand list</td>
                                                    <td>25-06-2020</td>
                                                    <td>Rs. 10500/-</td>
                                                    <td class="text-success">Delivered</td>
                                                    <td class='d-flex'>
                                                        <span data-toggle="modal" data-target="#orderModal">
                                                            <a href="#" data-toggle="tooltip" title="See order details"><i class="badge-circle border badge-circle-light-primary bx bx-info-circle text-dark font-medium-1"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#5150</td>
                                                    <td>Regular demand list</td>
                                                    <td>25-06-2020</td>
                                                    <td>Rs. 10500/-</td>
                                                    <td class="text-danger">Rejected</td>
                                                    <td class='d-flex'>
                                                        <span data-toggle="modal" data-target="#orderModal">
                                                            <a href="#" data-toggle="tooltip" title="See order details"><i class="badge-circle border badge-circle-light-primary bx bx-info-circle text-dark font-medium-1"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade " id="orderModal" tabindex="-1" role="dialog" aria-labelledby="Order Modal" aria-modal="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle">Order details</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
                </div>
                <div class="modal-body px-md-2 px-1">

                    <div class="row">
                        <p class="ml-1 mb-0 text-dark">Status- <span class="text-warning">Pending</span></p>
                        <p class="ml-auto  mb-0">
                            <small class="pr-1">Date- 23-06-2020</small>
                        </p>
                    </div>
                    <div class="row">
                        <p class="ml-1 mb-0 text-dark">Order number- #5148</p>
                    </div>
                    <div class="row">
                        <p class="ml-1 text-dark">Order item- Regular demand list</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6 p-0 pt-1 border-right d-flex">
                            <div class="col-6">Potato -</div>
                            <div class="col-5">8kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 d-flex">
                            <div class="col-6">Tomato -</div>
                            <div class="col-4">5kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 border-right  d-flex">
                            <div class="col-6">Ginger -</div>
                            <div class="col-5">3kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 d-flex">
                            <div class="col-6">Garlic -</div>
                            <div class="col-4">3kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 border-right d-flex">
                            <div class="col-6">Cauliflower -</div>
                            <div class="col-5">10kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 d-flex">
                            <div class="col-6">Pumpkin -</div>
                            <div class="col-4">5kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 border-right d-flex">
                            <div class="col-6">Coriander -</div>
                            <div class="col-5">1.5kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 d-flex">
                            <div class="col-6">Chilles -</div>
                            <div class="col-4">2kg</div>
                        </div>
                        <div class="col-sm-6 p-0 pt-1 border-right d-flex">
                            <div class="col-6"> </div>
                            <div class="col-4"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Payment mode: <span class="text-dark">cash</span> </div>
                        <div class="col-4">Amount: <span class="text-dark">Rs. 10500/-</span></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Content-->

  
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    
    <script src="<?=base_url()?>app-assets/js/scripts/datatables/datatable.js"></script>