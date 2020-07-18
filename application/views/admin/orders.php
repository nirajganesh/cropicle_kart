
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
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-warning">Pending orders list</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped order-dt">
                                        <thead>
                                            <tr>
                                                <th>Order no.</th>
                                                <th>Ordered by</th>
                                                <th>Order Date</th>
                                                <th>Order Amount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($pending as $p){?>
                                            <tr>
                                                <td><?=$p->id?></td>
                                                <td><?=$p->name?></td>
                                                <td><?=date('d-M-Y',strtotime($p->date))?></td>
                                                <td>Rs. <?=$p->total_amt?>/-</td>
                                                <td class='d-flex'>
                                                    <span data-id='<?=$p->id?>' class="pendingOrderOpen">
                                                        <a href="#" data-toggle="tooltip" title="Approve/Reject"><i class="badge-circle badge-circle-light-secondary bx bx-info-circle text-primary font-medium-1"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-success">Delivered orders list</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped order-dt">
                                        <thead>
                                            <tr>
                                                <th>Order no.</th>
                                                <th>Ordered by</th>
                                                <th>Order Date</th>
                                                <th>Order Amount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($delivered as $d){?>
                                            <tr>
                                                <td><?=$d->id?></td>
                                                <td><?=$d->name?></td>
                                                <td><?=date('d-M-Y',strtotime($d->date))?></td>
                                                <td>Rs. <?=$d->total_amt?>/-</td>
                                                <td class='d-flex'>
                                                    <span data-id='<?=$d->id?>' class="deliveredOrderOpen">
                                                        <a href="#" data-toggle="tooltip" title="See details"><i class="badge-circle badge-circle-light-secondary bx bx-info-circle text-primary font-medium-1"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-danger">Rejected orders list</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped order-dt">
                                        <thead>
                                            <tr>
                                                <th>Order no.</th>
                                                <th>Ordered by</th>
                                                <th>Order Date</th>
                                                <th>Order Amount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rejected as $r){?>
                                            <tr>
                                                <td><?=$r->id?></td>
                                                <td><?=$r->name?></td>
                                                <td><?=date('d-M-Y',strtotime($r->date))?></td>
                                                <td>Rs. <?=$r->total_amt?>/-</td>
                                                <td class='d-flex'>
                                                    <span data-id='<?=$r->id?>' class="rejectedOrderOpen">
                                                        <a href="#" data-toggle="tooltip" title="See details"><i class="badge-circle badge-circle-light-secondary bx bx-info-circle text-primary font-medium-1"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php }?>
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