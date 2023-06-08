<base href="../../">
<?php
$home_page = true;
$client_testimonial = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <span class="breadcrumb-item">Webpages</span>
      <span class="breadcrumb-item">Home Page</span>
      <span class="breadcrumb-item active">Client Testimonial</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagebody">
    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Client Testimonial Add</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Add Amazing Client</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <form method="POST" action="webpages/home_page/client_testimonial_post.php" enctype="multipart/form-data">
        <div class="form-layout">
          <div class="row mg-b-25">
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Client Name: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['client_name_error'])) ? 'is-invalid' : '' ?>" type="text" name="client_name" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_client_name'])) ? $_SESSION['old_client_name'] : '' ; unset($_SESSION['old_client_name'])?>">
                <?php if (isset($_SESSION['client_name_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['client_name_error'] ?></small>
                <?php endif;
                unset($_SESSION['client_name_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Client Details: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['client_details_error'])) ? 'is-invalid' : '' ?>" type="text" name="client_details" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_client_details'])) ? $_SESSION['old_client_details'] : '' ; unset($_SESSION['old_client_details'])?>">
                <?php if (isset($_SESSION['client_details_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['client_details_error'] ?></small>
                <?php endif;
                unset($_SESSION['client_details_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Client Address: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['client_address_error'])) ? 'is-invalid' : '' ?>" type="text" name="client_address" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_client_address'])) ? $_SESSION['old_client_address'] : '' ; unset($_SESSION['old_client_address']) ?>">
                <?php if (isset($_SESSION['client_address_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['client_address_error'] ?></small>
                <?php endif;
                unset($_SESSION['client_address_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-8">
              <div class="form-group">
                <label class="form-control-label">Client Comments: <span class="tx-danger">*</span></label>
                <textarea id="summernote" class="form-control <?= (isset($_SESSION['client_comments_error'])) ? 'is-invalid' : '' ?>" name="client_comments" rows="4" placeholder="Enter Blog Details"><?= (isset($_SESSION['old_client_comments'])) ? $_SESSION['old_client_comments'] : '' ; unset($_SESSION['old_client_comments']) ?></textarea>
                <?php if (isset($_SESSION['client_comments_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['client_comments_error'] ?></small>
                <?php endif;
                unset($_SESSION['client_comments_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4 py-3">
              <div class="form-group">
                <label class="form-control-label">Clients Project logo Img: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['project_logo_img_error'])) ? 'is-invalid' : '' ?>" type="file" name="project_logo_img">
                <small>Photo Size 640*520 px</small>
              </div>
              <?php if (isset($_SESSION['project_logo_img_error'])) : ?>
                <small class="text-danger"><?= $_SESSION['project_logo_img_error'] ?></small>
              <?php endif;
              unset($_SESSION['project_logo_img_error'])
              ?>
            </div><!-- col-4 -->
          </div><!-- row -->

          <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5">Add Client Testimonial</button>
          </div><!-- form-layout-footer -->
        </div><!-- form-layout -->
      </form>
    </div>

    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Client Testimonial List</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Amazing Clients List</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <div class="card text-start|center|end">
        <div class="card-body">
          <!-- <table id="message_table" class="table table-hover table-bordered table-striped"> -->
          <table id="message_table" class="table table-hover table-bordered table-striped">
            <thead class="bg-info">
              <tr>
                <th class="text-center">Srial No</th>
                <th class="text-center">Clients Name</th>
                <th class="text-center">Clients Details</th>
                <th class="text-center">Clients Address</th>
                <th class="text-center">Clients Comments</th>
                <th class="text-center">Clients Project Img</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php
              $srial_no = 1;
              foreach (spy_sabbir_all('client_testimonials') as $single_client_testimonials) :
              ?>
                <tr>
                  <td>
                    <h5><b><?= $srial_no++ ?></b></h5>
                  </td>
                  <td>
                    <?= $single_client_testimonials['client_name'] ?>
                  </td>
                  <td>
                    <?= $single_client_testimonials['client_details'] ?>
                  </td>
                  <td>
                    <?= $single_client_testimonials['client_address'] ?>
                  </td>
                  <td>
                    <?= $single_client_testimonials['client_comments'] ?>
                  </td>
                  <td>
                    <img width="120" height="75" src="../assets/images/client_testimonials/<?= $single_client_testimonials['project_logo_img'] ?>" alt="">
                  </td>
                  <td>
                    <a href="webpages/home_page/client_testimonial_edit.php?id=<?= $single_client_testimonials['id'] ?>" class="btn btn-sm btn-info">Edit</a>
                    <button value="webpages/home_page/client_testimonial_delete.php?id=<?= $single_client_testimonials['id'] ?>" class="btn btn-sm btn-danger delete_btn mt-2">Delete</button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- card -->
  </div><!-- br-pagebody -->

  <?php
  require_once('../../footer.php');
  require_once('../../status.php');
  ?>