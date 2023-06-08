<base href="../../">
<?php
$blog_page = true;
$my_blog = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <span class="breadcrumb-item">Webpages</span>
      <span class="breadcrumb-item">Blog Page</span>
      <span class="breadcrumb-item active">My Blog</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagebody">
    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Add Blog</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Add Blog</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <form method="POST" action="webpages/blog_page/my_blog_post.php" enctype="multipart/form-data">
        <div class="form-layout">
          <div class="row mg-b-25">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Blog Headline: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['blog_headline_error'])) ? 'is-invalid' : '' ?>" type="text" name="blog_headline" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_blog_headline'])) ? $_SESSION['old_blog_headline'] : '' ; unset($_SESSION['old_blog_headline'])?>">
                <?php if (isset($_SESSION['blog_headline_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['blog_headline_error'] ?></small>
                <?php endif;
                unset($_SESSION['blog_headline_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Blog Cover Photo: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['blog_cover_photo_error'])) ? 'is-invalid' : '' ?>" type="file" name="blog_cover_photo">
                <small>Photo Size 640*520 px</small>
              </div>
              <?php if (isset($_SESSION['blog_cover_photo_error'])) : ?>
                <small class="text-danger"><?= $_SESSION['blog_cover_photo_error'] ?></small>
              <?php endif;
              unset($_SESSION['blog_cover_photo_error'])
              ?>
            </div><!-- col-4 -->
            <div class="col-lg-12">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Blog Details: <span class="tx-danger">*</span></label>
                <textarea id="summernote" class="form-control <?= (isset($_SESSION['blog_details_error'])) ? 'is-invalid' : '' ?>" name="blog_details" rows="8" placeholder="Enter Blog Details"><?= (isset($_SESSION['old_blog_details'])) ? $_SESSION['old_blog_details'] : '' ; unset($_SESSION['old_blog_details'])?></textarea>
                <?php if (isset($_SESSION['blog_details_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['blog_details_error'] ?></small>
                <?php endif;
                unset($_SESSION['blog_details_error'])
                ?>
              </div>
            </div><!-- col-12 -->
          </div><!-- row -->

          <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5">Add Blog</button>
          </div><!-- form-layout-footer -->
        </div><!-- form-layout -->
      </form>
    </div>

    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Blog List</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Blog List</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <div class="row">
        <table id="message_table" class="table table-hover table-bordered table-striped">
          <thead class="bg-info">
            <tr>
              <th class="text-center">Serial </th>
              <th class="text-center">blog Img</th>
              <th class="text-center">blog Item</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $srial_no = 1;
            foreach (spy_sabbir_all('blogs') as $single_blog) :
            ?>
              <tr>
                <td>
                  <h5 class="mt-5"><b><?= $srial_no++ ?></b></h5>
                </td>
                <td><img height="120px" width="180px" src="../assets/images/blog/<?= $single_blog['blog_cover_photo'] ?>" alt=""></td>
                <td>
                  <div class="item">
                    <h4><?= $single_blog['blog_headline'] ?></h4>
                    <small class="text-info">Update Time: <?= date("d-M-Y h:i:sa", strtotime($single_blog['blog_uploaded_date'])); ?></small>
                    <p class="mt-2"><?= substr($single_blog['blog_details'], 0, 250) ?>...</p>
                  </div>
                </td>
                <td>
                  <div class="action text-center">
                    <a href="webpages/blog_page/my_blog_edit.php?id=<?= $single_blog['id'] ?>" class=" btn btn-sm btn-info mt-5">Edit</a>
                    <button value="webpages/blog_page/my_blog_delete.php?id=<?= $single_blog['id'] ?>" class="btn btn-sm btn-danger delete_btn mt-2">Delete</button>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div><!-- br-pagebody -->

  <?php
  require_once('../../footer.php');
  require_once('../../status.php')
  ?>