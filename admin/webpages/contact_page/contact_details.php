<base href="../../">
<?php
$contact_page = true;
$contact_details = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="dashboard.php">Bracket</a>
            <span class="breadcrumb-item">Contact Us</span>
            <span class="breadcrumb-item active">Contact Details</span>
        </nav>
    </div><!-- br-pageheader -->

    <div class="br-pagebody">

        <div class="title text-center my-5">
            <h4 class="tx-gray-800">Contact Details</h4>
            <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
        </div>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">Update Contact Details</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <form method="POST" action="webpages/contact_page/contact_details_update.php" id="edit_form">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="company_address" value="<?= spy_sabbir_update('contact_details', 'company_address'); ?>">
                            </div>
                        </div><!-- col -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Phone Number One: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="phone_number_one" value="<?= spy_sabbir_update('contact_details', 'phone_number_one'); ?>">
                            </div>
                        </div><!-- col -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Phone Number Two: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="phone_number_two" value="<?= spy_sabbir_update('contact_details', 'phone_number_two'); ?>">
                            </div>
                        </div><!-- col -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Email Address One: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="email" name="email_address_one" value="<?= spy_sabbir_update('contact_details', 'email_address_one'); ?>">
                            </div>
                        </div><!-- col -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Email Address Two: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="email" name="email_address_two" value="<?= spy_sabbir_update('contact_details', 'email_address_two'); ?>">
                            </div>
                        </div><!-- col -->
                    </div>
                    <div class="form-layout-footer">
                        <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Contact Details Update</a>
                    </div>
                </div>
            </form>
        </div>

    </div><!-- br-pagebody -->

    <?php
    require_once('../../footer.php');
    require_once('../../status.php');
    ?>