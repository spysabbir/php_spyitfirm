<?php
$services = true;
require_once('header.php');
$id = $_GET['id'];
$select_query = "SELECT * FROM services WHERE id= $id";
$single_service = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query));
?>
<!-- Banner Start -->
<section id="banner">
    <div class="banner_slider">
        <div class="banner_item" style="background-image: url(assets/images/<?= spy_sabbir_update('theme_default', 'main_banner_photo'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 col-sm-12 m-auto">
                        <div class="banner_text">
                            <h1><?= $single_service['services_name'] ?></h1>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i>
                                            Home</a></li>
                                    <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $single_service['services_name'] ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Services Details Start Done -->
<section id="services_details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="services_details_content">
                    <h3><?= $single_service['services_name'] ?></h3>
                    <img class="w-100 img-fluid" src="assets/images/services/<?= $single_service['services_banner_photo'] ?>" alt="Web Design Banner">
                    <h4>About <?= $single_service['services_name'] ?></h4>
                    <p><?= $single_service['services_details'] ?></p>

                    <div class="services-contact text-center mt-5">
                        <h4>Just share all the details of your project and put an order.</h4>
                        <h4><mark>If you have any questions, send me a message.</mark></h4>
                        <a href="contact.php">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Details End -->

<?php
require_once('footer.php');
?>