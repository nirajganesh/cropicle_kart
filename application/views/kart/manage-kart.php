
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Manage Kart</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active"> Manage kart
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- account setting page start -->
                <section id="page-account-settings">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card widget-notification">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title d-flex align-items-center">
                                        <i class='bx bx-cart font-medium-4 mr-1'></i>Kart stock
                                    </h4>
                                    <small class='font-small-2'> (Total 8 items)</small>
                                    <div class="heading-elements">
                                        <button type="button" class="btn btn-sm btn-light-primary" data-toggle="modal" data-target="#stockModal">
                                            Update stock
                                        </button>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body px-2">
                                        <small>Last updated: 19-06-2020</small>
                                        <div class="row">
                                            <div class="col-sm-6 p-0 pt-1  d-flex">
                                                <div class="col-6">Potato -</div>
                                                <div class="col-5">8kg</div>
                                            </div>
                                            <div class="col-sm-6 p-0 pt-1  d-flex">
                                                <div class="col-6">Tomato -</div>
                                                <div class="col-4">5kg</div>
                                            </div>
                                            <div class="col-sm-6 p-0 pt-1  d-flex">
                                                <div class="col-6">Ginger -</div>
                                                <div class="col-5">3kg</div>
                                            </div>
                                            <div class="col-sm-6 p-0 pt-1  d-flex">
                                                <div class="col-6">Garlic -</div>
                                                <div class="col-4">3kg</div>
                                            </div>
                                            <div class="col-sm-6 p-0 pt-1  d-flex">
                                                <div class="col-6">Cauliflower -</div>
                                                <div class="col-5">10kg</div>
                                            </div>
                                            <div class="col-sm-6 p-0 pt-1  d-flex">
                                                <div class="col-6">Pumpkin -</div>
                                                <div class="col-4">5kg</div>
                                            </div>
                                            <div class="col-sm-6 p-0 pt-1  d-flex">
                                                <div class="col-6">Coriander -</div>
                                                <div class="col-5">1.5kg</div>
                                            </div>
                                            <div class="col-sm-6 p-0 pt-1  d-flex">
                                                <div class="col-6">Chilles -</div>
                                                <div class="col-4">2kg</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="card widget-notification">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title d-flex align-items-center">
                                        <i class='bx bx-notepad font-medium-4 mr-1'></i>List of demands
                                    </h4>
                                    <small class='font-small-2'> (Total 4 lists)</small>
                                    <div class="heading-elements">
                                        <a href="demand-lists.html" type="button" class="btn btn-sm btn-light-primary">See All</a>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex">
                                                    <div class="list-content">
                                                        <span class="list-title">Regular demand list</span>
                                                        <small class="text-muted d-block">Onion (2kg), Potato (5kg), Garlic (1kg) ...</small>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <a href="" class="badge-circle badge-circle badge-circle-light-primary mr-md-1 mr-0 my-1"  data-toggle="tooltip"  data-placement="top"  title="Order now">
                                                        <i class="bx bx-truck font-small-5"></i>
                                                    </a>
                                                    <span data-toggle="modal" data-target="#listModal">
                                                        <a class="badge-circle badge-circle badge-circle-light-warning my-1 cpointer"  data-toggle="tooltip" title="See list">
                                                            <i class="bx bx-info-circle font-small-5 text-warning"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex">
                                                    <div class="list-content">
                                                        <span class="list-title">Special list</span>
                                                        <small class="text-muted d-block">Broccoli (1kg), Beans (2kg), Mint (0.5kg) ...</small>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <a href="" class="badge-circle badge-circle badge-circle-light-primary mr-md-1 mr-0 my-1"  data-toggle="tooltip"  data-placement="top"  title="Order now">
                                                        <i class="bx bx-truck font-small-5"></i>
                                                    </a>
                                                    <span data-toggle="modal" data-target="#listModal">
                                                        <a class="badge-circle badge-circle badge-circle-light-warning my-1 cpointer"  data-toggle="tooltip" title="See list">
                                                            <i class="bx bx-info-circle font-small-5 text-warning"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex">
                                                    <div class="list-content">
                                                        <span class="list-title">Fruits list</span>
                                                        <small class="text-muted d-block">Orange (2kg), Banana (4dozen) ...</small>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <a href="" class="badge-circle badge-circle badge-circle-light-primary mr-md-1 mr-0 my-1"  data-toggle="tooltip"  data-placement="top"  title="Order now">
                                                        <i class="bx bx-truck font-small-5"></i>
                                                    </a>
                                                    <span data-toggle="modal" data-target="#listModal">
                                                        <a class="badge-circle badge-circle badge-circle-light-warning my-1 cpointer"  data-toggle="tooltip" title="See list">
                                                            <i class="bx bx-info-circle font-small-5 text-warning"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex">
                                                    <div class="list-content">
                                                        <span class="list-title">Custom list name</span>
                                                        <small class="text-muted d-block">Onion (2kg), Potato (5kg), Garlic (1kg) ...</small>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <a href="" class="badge-circle badge-circle badge-circle-light-primary mr-md-1 mr-0  my-1"  data-toggle="tooltip"  data-placement="top"  title="Order now">
                                                        <i class="bx bx-truck font-small-5"></i>
                                                    </a>
                                                    <span data-toggle="modal" data-target="#listModal">
                                                        <a class="badge-circle badge-circle badge-circle-light-warning my-1 cpointer"  data-toggle="tooltip" title="See list">
                                                            <i class="bx bx-info-circle font-small-5 text-warning"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- account setting page ends -->
            </div>
        </div>
    </div>

    <div class="modal fade " id="stockModal" tabindex="-1" role="dialog" aria-labelledby="stockModal" aria-modal="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update stock</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
                </div>
                <form action="#" method="POST">

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12 heads row mb-2 align-items-center">
                            <div class="col-md-6 modItm text-dark text-bold-600">Items </div>
                            <div class="col-md-3 modQty text-dark text-bold-600">Qty</div>
                            <div class="col-md-3 text-dark text-bold-600">
                                Remaining Stock
                            </div>
                        </div>
                        <div class="form-group col-12 row align-items-center">
                            <div class="col-md-6 modItm">Potato: </div>
                            <div class="col-md-3 modQty">8Kg</div>
                            <div class="input-group input-group-sm modStk col-md-3 ">
                                <input type="text" data-bts-step="0.25" data-bts-decimals="2" min="0" max="8" decimals="0.25" class="digits touchspin touchspin-min-max" data-bts-postfix="Kg" placeholder="Remaining stock" required>
                            </div>
                        </div>
                        <div class="form-group col-12 row align-items-center">
                            <div class="col-md-6 modItm">Tomato: </div>
                            <div class="col-md-3 modQty">5Kg</div>
                            <div class="input-group input-group-sm modStk col-md-3 ">
                                <input type="text" data-bts-step="0.25" data-bts-decimals="2" min="0" max="8" decimals="0.25" class="digits touchspin touchspin-min-max" data-bts-postfix="Kg" placeholder="Remaining stock" required>
                            </div>
                        </div>
                        <div class="form-group col-12 row align-items-center">
                            <div class="col-md-6 modItm">Ginger: </div>
                            <div class="col-md-3 modQty">3Kg</div>
                            <div class="input-group input-group-sm modStk col-md-3 ">
                                <input type="text" data-bts-step="0.25" data-bts-decimals="2" min="0" max="8" decimals="0.25" class="digits touchspin touchspin-min-max" data-bts-postfix="Kg" placeholder="Remaining stock" required>
                            </div>
                        </div>
                        <div class="form-group col-12 row align-items-center">
                            <div class="col-md-6 modItm">Garlic: </div>
                            <div class="col-md-3 modQty">3Kg</div>
                            <div class="input-group input-group-sm modStk col-md-3 ">
                                <input type="text" data-bts-step="0.25" data-bts-decimals="2" min="0" max="8" decimals="0.25" class="digits touchspin touchspin-min-max" data-bts-postfix="Kg" placeholder="Remaining stock" required>
                            </div>
                        </div>
                        <div class="form-group col-12 row align-items-center">
                            <div class="col-md-6 modItm">Cauliflower: </div>
                            <div class="col-md-3 modQty">10Kg</div>
                            <div class="input-group input-group-sm modStk col-md-3 ">
                                <input type="text" data-bts-step="0.25" data-bts-decimals="2" min="0" max="8" decimals="0.25" class="digits touchspin touchspin-min-max" data-bts-postfix="Kg" placeholder="Remaining stock" required>
                            </div>
                        </div>
                        <div class="form-group col-12 row align-items-center">
                            <div class="col-md-6 modItm">Pumpkin: </div>
                            <div class="col-md-3 modQty">5Kg</div>
                            <div class="input-group input-group-sm modStk col-md-3 ">
                                <input type="text" data-bts-step="0.25" data-bts-decimals="2" min="0" max="8" decimals="0.25" class="digits touchspin touchspin-min-max" data-bts-postfix="Kg" placeholder="Remaining stock" required>
                            </div>
                        </div>
                        <div class="form-group col-12 row align-items-center">
                            <div class="col-md-6 modItm">Coriander: </div>
                            <div class="col-md-3 modQty">1.5Kg</div>
                            <div class="input-group input-group-sm modStk col-md-3 ">
                                <input type="text" data-bts-step="0.25" data-bts-decimals="2" min="0" max="8" decimals="0.25" class="digits touchspin touchspin-min-max" data-bts-postfix="Kg" placeholder="Remaining stock" required>
                            </div>
                        </div>
                        <div class="form-group col-12 row align-items-center mb-0">
                            <div class="col-md-6 modItm">Chillies: </div>
                            <div class="col-md-3 modQty">2Kg</div>
                            <div class="input-group input-group-sm modStk col-md-3 ">
                                <input type="text" data-bts-step="0.25" data-bts-decimals="2" min="0" max="8" decimals="0.25" class="digits touchspin touchspin-min-max" data-bts-postfix="Kg" placeholder="Remaining stock" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Update</span>
                    </button>
                </div>

                </form>
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
