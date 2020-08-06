

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="widgets-Statistics">
                    <div class="row">
                        <div class="col-12 mt-1 mb-2">
                            <h4>Dashboard</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <a href="<?=base_url('user-demands')?>" class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto my-1">
                                            <i class="bx bx-tag font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">User demands</p>
                                        <h2 class="mb-0 position-relative left-0">
                                            <?=$customer_demands?>
                                        </h2>
                                        <div class="chart-info d-flex justify-content-between mb-75 mt-2">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-success"></i>
                                                <span class="text-muted text-bold-600 ml-50">Approved</span>
                                            </div>
                                            <div class="text-muted"><?=$appr_demands?></div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-danger"></i>
                                                <span class="text-muted text-bold-600 ml-50">Rejected</span>
                                            </div>
                                            <div class="text-muted"><?=$rej_demands?></div>
                                        </div>
                                        <?php if($new_demands>0){?>
                                            <span class="badge badge-danger badge-up badge-glow badge-round mt-2 mr-1 font-small-1"><?=$new_demands?> new</span>
                                        <?php }?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <a href="<?=base_url('kart-orders')?>" class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                                            <i class="bx bx-shopping-bag font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">Kart orders</p>
                                        <h2 class="mb-0"><?=$orders?></h2>
                                        <div class="chart-info d-flex justify-content-between mb-75 mt-2">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-success"></i>
                                                <span class="text-muted text-bold-600 ml-50">Delivered</span>
                                            </div>
                                            <div class="text-muted"><?=$appr_orders?></div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-danger"></i>
                                                <span class="text-muted text-bold-600 ml-50">Rejected</span>
                                            </div>
                                            <div class="text-muted"><?=$rej_orders?></div>
                                        </div>
                                        <?php if($new_orders>0){?>
                                            <span class="badge badge-danger badge-up badge-glow badge-round mt-2 mr-1 font-small-5"><?=$new_orders?> new</span>
                                        <?php }?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <a href="<?=base_url('items-master')?>" class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
                                            <i class="bx bx-data font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">No. of items</p>
                                        <h2 class="mb-0"><?=$items?></h2>
                                        <div class="chart-info d-flex justify-content-between mb-75 mt-2">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-success mr-50"></i>
                                                <span class="text-muted text-bold-600 ml-50">Active</span>
                                            </div>
                                            <div class="text-muted"><?=$activeItems?></div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-secondary mr-50"></i>
                                                <span class="text-muted text-bold-600 ml-50">Inactive</span>
                                            </div>
                                            <div class="text-muted"><?=$inactiveItems?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <a href="<?=base_url('locations-master')?>" class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto my-1">
                                            <i class="bx bx-map font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">No. of Locations</p>
                                        <h2 class="mb-0"><?=$locations?></h2>
                                        <div class="chart-info d-flex justify-content-between mb-75 mt-2">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-success mr-50"></i>
                                                <span class="text-muted text-bold-600 ml-50">Active</span>
                                            </div>
                                            <div class="text-muted"><?=$activeLoc?></div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-secondary mr-50"></i>
                                                <span class="text-muted text-bold-600 ml-50">Inactive</span>
                                            </div>
                                            <div class="text-muted"><?=$inactiveLoc?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <a href="<?=base_url('karts')?>" class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1">
                                            <i class="bx bx-cart font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">Regd. Karts</p>
                                        <h2 class="mb-0"><?=$karts?></h2>
                                        <div class="chart-info d-flex justify-content-between mb-75 mt-2">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-success mr-50"></i>
                                                <span class="text-muted text-bold-600 ml-50">Active</span>
                                            </div>
                                            <div class="text-muted"><?=$activeKarts?></div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-secondary mr-50"></i>
                                                <span class="text-muted text-bold-600 ml-50">Inactive</span>
                                            </div>
                                            <div class="text-muted"><?=$inactiveKarts?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <a href="<?=base_url('users')?>" class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
                                            <i class="bx bx-user font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">Regd. Users</p>
                                        <h2 class="mb-0"><?=$customers?></h2>
                                        <div class="chart-info d-flex justify-content-between mb-75 mt-2">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-success mr-50"></i>
                                                <span class="text-muted text-bold-600 ml-50">Active</span>
                                            </div>
                                            <div class="text-muted"><?=$activeCust?></div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="d-flex align-items-center">
                                                <i class="bullet bullet-xs bullet-secondary mr-50"></i>
                                                <span class="text-muted text-bold-600 ml-50">Inactive</span>
                                            </div>
                                            <div class="text-muted"><?=$inactiveCust?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- <div class="col-xl-3 col-md-4 col-sm-6">
                            <a href="<?=base_url('kart-payments')?>payments" class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto my-1">
                                            <i class="bx bx-money font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">Latest payment</p>
                                        <h2 class="mb-0"><?=$last_payment?>/-</h2>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
