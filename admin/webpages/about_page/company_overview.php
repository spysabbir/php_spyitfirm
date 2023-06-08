<base href="../../">
<?php
$about_page = true;
$company_overview = true;
require_once('../../header.php');
require_once('../../db.php');
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="dashboard.php">Bracket</a>
      <span class="breadcrumb-item">About Page</span>
      <span class="breadcrumb-item active">Company Overview</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagebody">
    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Company Overview</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Update Company Overview</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <form method="POST" action="webpages/about_page/company_overview_update.php" enctype="multipart/form-data" id="edit_form">
        <div class="form-layout">
          <div class="row mg-b-25">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="form-control-label">Company History: <span class="tx-danger">*</span></label>
                <textarea id="summernote" class="form-control" name="company_history" rows="8"><?= spy_sabbir_update('company_overviews', 'company_history'); ?></textarea>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Company Mission: <span class="tx-danger">*</span></label>
                <textarea id="summernote" class="form-control" name="company_mission" rows="8"><?= spy_sabbir_update('company_overviews', 'company_mission'); ?></textarea>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Company Vision: <span class="tx-danger">*</span></label>
                <textarea id="summernote" class="form-control" name="company_vision" rows="8"><?= spy_sabbir_update('company_overviews', 'company_vision'); ?></textarea>
              </div>
            </div><!-- col-4 -->
          </div>
          <div class="form-layout-footer">
            <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Company Overview Update</a>
          </div>
        </div>
      </form>
    </div>

  </div><!-- br-pagebody -->

  <?php
  require_once('../../footer.php');
  require_once('../../status.php');
  ?>