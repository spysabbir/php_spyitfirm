<base href="../../">
<?php
$home_page = true;
$our_amazing_clients = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item">Webpages</span>
            <span class="breadcrumb-item">Home Page</span>
            <a class="breadcrumb-item" href="webpages/home_page/our_amazing_clients.php">Our Amazing Clients</a>
            <span class="breadcrumb-item active">Our Amazing Clients Edit</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Edit Amazing Clients</h4>
        <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">Edit Amazing Clients</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <form method="POST" action="webpages/home_page/our_amazing_clients_edit_post.php" enctype="multipart/form-data" id="edit_form">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Clients Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="clients_name" placeholder="Enter Blog Headline" value="<?= spy_sabbir_single_select('clients', $_GET['id'])['clients_name'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Clients Project link: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="project_link" placeholder="Enter Blog Headline" value="<?= spy_sabbir_single_select('clients', $_GET['id'])['project_link'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <!-- col-6 -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Clients New Photo: <span class="tx-danger">*</span></label>
                                        <input class="form-control mb-2" type="file" name="clients_new_cover_photo" onchange="readURL(this);">
                                        <small>Photo Size 640*520 px</small><br>
                                        <img class="hidden img-thumbnail" id="clients_new_cover_photo" src="#" alt="Clients Photo" />
                                        <script>
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        $('#clients_new_cover_photo').attr('src', e.target.result);
                                                    };
                                                    $('#clients_new_cover_photo').removeClass('hidden');
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Clients Old Photo: <span class="tx-danger">*</span></label>
                                        <input type="hidden" name="clients_old_photo_name" class="form-control" value="<?= spy_sabbir_single_select('clients', $_GET['id'])['project_logo_img'] ?>">
                                        <input type="hidden" name="client_id" class="form-control" value="<?= $_GET['id'] ?>">
                                        <img width="100" height="100" class="img-thumbnail" src="../assets/images/clients/<?= spy_sabbir_single_select('clients', $_GET['id'])['project_logo_img'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Services</a>
                        <a class="btn btn-danger mg-r-5 text-white" href=" webpages/home_page/our_amazing_clients.php">Cancel</a>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div>
    </div>

    <div class="br-pagebody">


    </div><!-- br-pagebody -->

    <?php
    require_once('../../footer.php');
    require_once('../../status.php')
    ?>