<?php
$services = true;
require_once('header.php');
?>

<!-- Banner Start -->
<section id="banner">
    <div class="banner_slider">
        <div class="banner_item" style="background-image: url(assets/images/<?= spy_sabbir_update('theme_default', 'main_banner_photo'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="banner_text">
                            <h1>Services</h1>
                            <p>The main objective of Spy It Firm is to provide high quality services to our valuable
                                clients and achieving their full satisfaction.</p>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
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

<!-- Creative Services Start Done -->
<section id="creative_services">
    <div class="container">
        <div class="section_title">
            <h2>Creative <span>Services</span></h2>
            <p>We provide the besr services for our customers.</p>
        </div>
        <div class="row justify-content-center">
            <?php foreach (spy_sabbir_all('services') as $single_service) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service_item">
                        <div class="img_box">
                            <img class="w-100 img-fluid" src="assets/images/services/<?= $single_service['services_cover_photo'] ?>" alt="Professional Graphic Design">
                        </div>
                        <div class="content">
                            <h3><?= $single_service['services_name'] ?></h3>
                            <p><?= substr($single_service['services_details'], 0, 80) ?></p>
                            <a href="services-details.php?id=<?= $single_service['id'] ?>">learn more</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Creative Services End -->

<!-- Tag Line Start -->
<section class="tag_line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p> Let’s Work Together On Your Next Project! </p>
            </div>
        </div>
    </div>
</section>
<!-- Tag Line End -->

<!-- Our Working Process Start Done -->
<section id="process">
    <div class="container">
        <div class="section_title">
            <h2>Our <span>working Process</span></h2>
            <p>Work in progress is the cost of unfinished goods in the manufacturing process</p>
        </div>
        <div class="row process_slider">
            <?php
            $srial_no = 1;
            foreach (spy_sabbir_all('working_process') as $single_working_process) : ?>
                <div class="process_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="process_img">
                                <img class="w-100 img-fluid" src="assets/images/working_process/<?= $single_working_process['process_cover_photo'] ?>" alt="Planning">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="process_content">
                                <span>0<?= $srial_no++ ?>.</span>
                                <h4><?= $single_working_process['process_title'] ?></h4>
                                <p><?= $single_working_process['process_details'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Our Working Process End -->

<!-- Tag Line Start -->
<section class="tag_line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p> We can help build your project ! </p>
            </div>
        </div>
    </div>
</section>
<!-- Tag Line End -->

<!-- Why Choose US Start Done -->
<section id="choose_us">
    <div class="container">
        <div class="section_title">
            <h2>Why <span>Choose Us</span></h2>
            <p>A choice that makes the difference.</p>
        </div>
        <div class="row">
            <?php foreach (spy_sabbir_all('choose_us') as $single_choose_us) : ?>
                <div class="col-lg-4">
                    <div class="choose_item">
                        <img src="assets/images/choose_us/<?= $single_choose_us['why_choose_us_cover_photo'] ?>" alt="Attention to Details">
                        <div class="content">
                            <h4><?= $single_choose_us['why_choose_us_title'] ?></h4>
                            <p><?= $single_choose_us['why_choose_us_details'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Why Choose US End -->

<?php
require_once('footer.php');
?>