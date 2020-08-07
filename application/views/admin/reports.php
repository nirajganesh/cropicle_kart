

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>app-assets/vendors/css/pickers/pickadate/pickadate.css">

    
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
                        <div class="col-sm-3 border-right mb-2">
                            <div class="mb-1">
                                <h4>Reports:</h4>
                            </div>
                            <form action="Reports/showReport" method="POST">
                                <label for=":">Report type:</label>
                                <select name="type" class="form-control mb-1" id="reportType" required>
                                    <option value="">-- Select report type --</option>
                                    <option value="userDemands">User demands</option>
                                    <option value="detailedUserDemands">User demands with details</option>
                                    <!-- <option value="detailedOrders">Item wise User demands</option>
                                    <option value="detailedOrders">Location wise user demands</option> -->
                                </select>
                                
                                <!-- <label for=":">Select Item:</label>
                                <select name="type" class="form-control mb-1" required>
                                    <option value="">-- Select report type --</option>
                                    <option value="orders">User demands</option>
                                    <option value="detailedOrders">User demands with details</option>
                                    <option value="detailedOrders">Item wise User demands</option>
                                    <option value="detailedOrders">Location wise user demands</option>
                                </select>
                                
                                <label for=":">Select Location:</label>
                                <select name="type" class="form-control mb-1" required>
                                    <option value="">-- Select report type --</option>
                                    <option value="orders">User demands</option>
                                    <option value="detailedOrders">User demands with details</option>
                                    <option value="detailedOrders">Item wise User demands</option>
                                    <option value="detailedOrders">Location wise user demands</option>
                                </select> -->

                                <label for=":">From:</label>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="date" name="from" class="form-control pickadate" id="from" placeholder="From Date">
                                    <div class="form-control-position">
                                        <i class='bx bx-calendar'></i>
                                    </div>
                                </fieldset>
        
                                <label for=":">To:</label>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="date" name="to" class="form-control pickadate" placeholder="To Date">
                                    <div class="form-control-position">
                                        <i class='bx bx-calendar'></i>
                                    </div>
                                </fieldset>

                                <button type="submit" class="btn btn-primary">Get report</button>
                            </form>
                        </div>
                        <div class="col-sm-9">
                                <div class="table-responsive">
                                    <table class="table table-striped report-dt">
                                        <thead>
                                            <tr>
                                                <th>Demand no.</th>
                                                <th>Demanded by</th>
                                                <th>Date</th>
                                                <th>Total Amount</th>
                                                <th>Remarks</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <script src="<?=base_url()?>app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="<?=base_url()?>app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="<?=base_url()?>app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>

    
<script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?=base_url()?>app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>

<script src="<?=base_url()?>app-assets/js/scripts/datatables/datatable.js"></script>

<style>
        .dataTables_length{
            float:left !important;
            display:inline !important;
        }
        .dt-buttons{
            float:right !important;
            display:inline !important;
            margin-top:15px !important;
        }
        .custom-select{
            width:60px !important;
        }
    </style>