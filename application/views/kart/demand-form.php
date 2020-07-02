
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
                                    <li class="breadcrumb-item"><a href="<?=base_url()?>"><i class="bx bx-home-alt"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?=base_url()?>manage-kart">Manage Kart</a></li>
                                    <li class="breadcrumb-item"><a href="<?=base_url()?>demand-lists">List of demands</a></li>
                                    <li class="breadcrumb-item active">Create demand list</li>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header px-1">
                                    <h4 class="card-title">Start creating new demand list:</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body px-1">
                                        <form action=<?=base_url('Add/saveDemand')?> method="POST" id="demand-form">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <label class="dFormLabel">Name of list:</label>
                                                    <input type="text" name="name" class="form-control" placeholder="List name (Eg: Fruits list)" required>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12 form-group file-repeater">
                                                    <div id="repeater-list">
														<div class="row mb-2" style="flex-wrap: nowrap;">
															<div class="col-md-6 col-5 pr-0 px-md-1 mb-1">
																<select name="item_id[]" class="select form-control" required>
																	<option value="">Items</option>
																	<?php foreach($data as $d){?>
																		<option value="<?=$d->id?>"><?=$d->item_name.'&nbsp;(Rs. '.$d->item_price_kart.'/'.$d->unit_short_name.')'.'&nbsp;(max:'.$d->max_order_qty.' '.$d->unit_short_name.')'?></option>
																	<?php }?>
																</select>
															</div>
															<div class="input-group col-md-3 col-5 mb-1">
																<input type="number" name="qty[]" step="0.25" min="0" class="digits form-control" placeholder="Qty" aria-describedby="basic-addon2" required>
																<div class="input-group-append">
																	<span class="input-group-text font-small-3 " style="padding:0 5px" id="basic-addon2">kg</span>
																</div>
															</div>
														</div>
                                                    </div>
                                                    <div class="col form-group p-0">
                                                        <button class="btn btn-light-primary dFormAdder" type="button">
                                                            <i class="bx bx-plus"></i>Add item
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <button type="submit" id="submit" class="mx-1 btn btn-primary">Save List</button>
                                            </div>
                                        </form>
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
    <!-- END: Content-->
<script>
	var i=1;
      $('.dFormAdder').click(function(){
        i++;
		$('#repeater-list').append( `
			<div class="row mb-2" id="row`+i+`" style="flex-wrap: nowrap;">
				<div class="col-md-6 col-5 pr-0 px-md-1 mb-1">
					<select name="item_id[]" class="select form-control" required>
						<option value="">Items</option>
						<?php foreach($data as $d){?>
							<option value="<?=$d->id?>"><?=$d->item_name.'&nbsp;(Rs. '.$d->item_price_kart.'/'.$d->unit_short_name.')'.'&nbsp;(max:'.$d->max_order_qty.' '.$d->unit_short_name.')'?></option>
						<?php }?>
					</select>
				</div>
				<div class="input-group col-md-3 col-5 mb-1">
					<input type="number" name="qty[]" step="0.25" min="0" class="digits form-control"  placeholder="Qty" aria-describedby="basic-addon2" required>
					<div class="input-group-append">
						<span class="input-group-text font-small-3 " style="padding:0 5px" id="basic-addon2">kg</span>
					</div>
				</div>
				<div class="col-md-2 col-1 pl-0 px-md-1 ">
					<button type="button" id="`+i+`" class="btn btn-icon btn-light-danger btn_remove">
						<i class="bx bx-x"></i>
						<span class="d-lg-inline-block d-none">Delete</span>
					</button>
				</div>
			</div>
		`);
      });


    $(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
    });

    
    // $('#submit').click(function(){		
	// 	$.ajax({
	// 		url:"<?=base_url($submissionPath)?>",
	// 		method:"POST",
	// 		data:$('#demand-form').serialize()
	// 	});
	// });
</script>
 


