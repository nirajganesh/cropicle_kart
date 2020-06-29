
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Profile</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active"> Profile
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
                        <div class="col-12">
                            <div class="row">
                                <!-- left menu section -->
                                <div class="col-md-3 mb-2 mb-md-0 pills-stacked">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                                <i class="bx bx-cog"></i>
                                                <span>General</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                                <i class="bx bx-cart"></i>
                                                <span>Kart Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                                <i class="bx bxs-bank"></i>
                                                <span>Bank Info</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                                <i class="bx bx-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- right content section -->
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                                        <div class="media">
                                                        <?php if($data->profile_img==''){?>
                                                            <a href="javascript: void(0);">
                                                                <img src="<?=base_url()?>assets/images/user.svg" class="rounded mr-75 profile_img" alt="profile image" height="50" width="50">
                                                            </a>
                                                        <?php } else{ ?>
                                                            <a href="javascript: void(0);">
                                                                <img src="<?=base_url()?>assets/images/<?=$data->profile_img?>" class="rounded mr-75 profile_img" alt="profile image" height="64" width="64">
                                                            </a>
                                                            <?php }?>
                                                            <div class="media-body mt-25">
                                                                <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                                    <label for="select-files" class="btn btn-sm btn-light-primary ml-50 mb-50 mb-sm-0">
                                                                        <span>Upload new photo</span>
                                                                        <input id="select-files" class="profile_img" name="profile_img" type="file" accept=".jpg, .jpeg, .png" hidden>
                                                                    </label>
                                                                    <button class="btn btn-sm btn-light-secondary ml-50" id="reset-profile-img">Reset</button>
                                                                </div>
                                                                <p class="text-muted ml-1 mt-50"><small>Allowed JPG, JPEG or PNG. Max
                                                                        size of
                                                                        800kB</small></p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <form novalidate method="POST" action="<?base_url('Edit/General')?>">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Name</label>
                                                                            <input type="text" class="form-control" placeholder="Name" value="<?=$this->session->kart->name?>" required data-validation-required-message="This name field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Contact no</label>
                                                                            <input type="text" class="form-control" placeholder="Contact no." value="<?=$this->session->kart->mobile_no?>" required readonly data-validation-required-message="This name field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>E-mail</label>
                                                                            <input type="email" class="form-control" placeholder="Example@gmail.com" value="<?=$data->email?>" required data-validation-required-message="This email field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                                        changes</button>
                                                                    <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                        <form novalidate>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Old Password</label>
                                                                            <input type="password" class="form-control" required placeholder="Old Password" data-validation-required-message="This old password field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>New Password</label>
                                                                            <input type="password" name="password" class="form-control" placeholder="New Password" required data-validation-required-message="The password field is required" minlength="6">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Retype new Password</label>
                                                                            <input type="password" name="con-password" class="form-control" required data-validation-match-match="password" placeholder="Re-type Password" data-validation-required-message="The Confirm password field is required" minlength="6">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                                        changes</button>
                                                                    <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                                        <form novalidate>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label>Bank name</label>
                                                                        <input type="text" class="form-control birthdate-picker" required placeholder="Bank name" data-validation-required-message="This field is required">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label>Account holder's name</label>
                                                                        <input type="text" class="form-control birthdate-picker" required placeholder="Holder name" data-validation-required-message="This field is required">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label>Account no.</label>
                                                                        <input type="text" class="form-control birthdate-picker" required placeholder="A/C no." data-validation-required-message="This field is required">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label>IFSC Code</label>
                                                                        <input type="text" class="form-control birthdate-picker" required placeholder="DDDD00000000" data-validation-required-message="This field is required">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                                        changes</button>
                                                                    <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade " id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label>Capacity of kart</label>
                                                                        <input type="text" class="form-control" placeholder="capacity in kg" value="150kg">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label>Sales qty per day</label>
                                                                        <input type="text" class="form-control" placeholder="Example: 20kg/day">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label>Source of purchase</label>
                                                                        <input type="text" class="form-control" placeholder="Example: ">
                                                                    </div>
                                                                </div>
                                                                <a href="#" class="ml-1 link link-info">See account ledger</a>
                                                                
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Save
                                                                        changes</button>
                                                                    <button type="reset" class="btn btn-light mb-1">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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