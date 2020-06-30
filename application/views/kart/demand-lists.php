
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-md-9">
                            <h5 class="content-header-title float-left pr-1 mb-0">Manage Kart</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a></li>
                                    <li class="breadcrumb-item"><a href="manage-kart.html">Manage Kart</a></li>
                                    <li class="breadcrumb-item active">List of demands</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-3 text-sm-right">
                            <a href="<?=base_url()?>demand-form" type="button" class="btn btn-sm btn-primary">Create new demand list</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- account setting page start -->
                <section id="page-account-settings">
                    <div class="row">
                        <div class="card py-2 col-lg-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CREATED AT</th>
                                            <th>LIST NAME</th>
                                            <th>ITEMS IN LIST</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>23-06-2020</td>
                                            <td>Special items list </td>
                                            <td>8 items</td>
                                            <td class='d-flex'>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Order now"><i class="badge-circle badge-circle-light-secondary  text-primary bx bx-truck font-medium-1"></i></a>

                                                <a href="<?=base_url()?>demand-form" class="mx-1" data-toggle="tooltip" data-placement="top" title="Edit list"><i class="badge-circle text-primary badge-circle-light-secondary bx bx-edit font-medium-1"></i></a>

                                                <a href="#" class="mr-1" data-toggle="tooltip" data-placement="top" title="Delete list"><i class="badge-circle badge-circle-light-secondary text-danger bx bx-trash font-medium-1"></i></a>

                                                <span data-toggle="modal" data-target="#listModal">
                                                    <a href="#" data-toggle="tooltip" title="See list"><i class="badge-circle badge-circle-light-secondary bx bx-info-circle text-warning font-medium-1"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23-06-2020</td>
                                            <td>Special items list </td>
                                            <td>8 items</td>
                                            <td class='d-flex'>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Order now"><i class="badge-circle badge-circle-light-secondary text-primary bx bx-truck font-medium-1"></i></a>

                                                <a href="<?=base_url()?>demand-form" class="mx-1" data-toggle="tooltip" data-placement="top" title="Edit list"><i class="badge-circle text-primary badge-circle-light-secondary bx bx-edit font-medium-1"></i></a>

                                                <a href="#" class="mr-1" data-toggle="tooltip" data-placement="top" title="Delete list"><i class="badge-circle badge-circle-light-secondary text-danger bx bx-trash font-medium-1"></i></a>

                                                <span data-toggle="modal" data-target="#listModal">
                                                    <a href="#" data-toggle="tooltip" title="See list"><i class="badge-circle badge-circle-light-secondary bx bx-info-circle text-warning font-medium-1"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23-06-2020</td>
                                            <td>Special items list </td>
                                            <td>8 items</td>
                                            <td class='d-flex'>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Order now"><i class="badge-circle badge-circle-light-secondary text-primary bx bx-truck font-medium-1"></i></a>

                                                <a href="<?=base_url()?>demand-form" class="mx-1" data-toggle="tooltip" data-placement="top" title="Edit list"><i class="badge-circle text-primary badge-circle-light-secondary bx bx-edit font-medium-1"></i></a>

                                                <a href="#" class="mr-1" data-toggle="tooltip" data-placement="top" title="Delete list"><i class="badge-circle badge-circle-light-secondary text-danger bx bx-trash font-medium-1"></i></a>

                                                <span data-toggle="modal" data-target="#listModal">
                                                    <a href="#" data-toggle="tooltip" title="See list"><i class="badge-circle badge-circle-light-secondary bx bx-info-circle text-warning font-medium-1"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- account setting page ends -->
            </div>
        </div>
    </div>

    
    <div class="modal fade " id="listModal" tabindex="-1" role="dialog" aria-labelledby="Demand List Modal" aria-modal="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle">Details of the demand list</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <p class="ml-1 text-dark">List Name - Special items list</p>
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
