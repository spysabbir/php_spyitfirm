<?php
$home =  true;
require_once('header.php');
?>

<!-- Banner Start Done -->
<section id="banner">
    <div class="banner_slider">
        <?php foreach (spy_sabbir_all('sliders') as $single_slider) : ?>
            <div class="banner_item banner_item_home" style="background-image: url(assets/images/slider/<?= $single_slider['slider_banner_img'] ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="banner_text text-center">
                                <h4><?= $single_slider['slider_content_subtitle'] ?></h4>
                                <h1><?= $single_slider['slider_content_title'] ?></h1>
                                <p><?= $single_slider['slider_details'] ?></p>
                                <div class="banner_btn">
                                    <a href="<?= $single_slider['slider_btn_link'] ?>"><?= $single_slider['slider_btn_name'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- Banner End -->

<!-- About Us Start -->
<section id="about">
    <div class="container">
        <div class="section_title">
            <h2>About <span>Us</span></h2>
            <p>Spy It Firm is the Outsourcing firm based on Freelance & Outsourcing.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about_img">
                    <img class="img-fluid" src="assets/images/about_bg_2.jpg" alt="profile bg 2">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about_content">
                    <p><?= spy_sabbir_update('theme_default', 'company_about_details'); ?></p>
                    <a href="about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us End -->

<!-- Our Services Start Done -->
<section id="our_services">
    <div class="container">
        <div class="section_title">
            <h2>Our <span>Services</span></h2>
            <p>The main objective of Spy It Firm is to provide high quality services to our valuable clients and
                achieving their full satisfaction.</p>
        </div>
        <div class="row">
            <?php foreach (spy_sabbir_all('services') as $single_service) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our_services_item">
                        <h2><i class="fa <?= $single_service['service_icon_name'] ?>"></i></h2>
                        <!-- <h2><i class="fas <?= $single_service['service_icon_name'] ?>"></i></h2> -->
                        <h3><?= $single_service['services_name'] ?></h3>
                        <p><?= substr($single_service['services_details'], 0, 80) ?>...</p>
                        <a href="services-details.php?id=<?= $single_service['id'] ?>">Read More...</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Our Services End -->

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

<!-- Latest Project Start -->
<section id="latest_project">
    <div class="container">
        <div class="section_title">
            <h2>latest <span>project</span></h2>
            <p>Latest project abstract for final project. These idea and topics for Clients.</p>
        </div>
        <div class="row justify-content-center latest_project_slider">
            <div class="col-lg-4 col-md-6">
                <div class="project_item">
                    <img class="w-100 img-fluid" src="assets/images/project/project_02.jpg" alt="project 1">
                    <h5>Graphic Design</h5>
                    <p>Completed Date : 30 Jan 2021</p>
                    <div class="project_content">
                        <div class="title">
                            <ul>
                                <li><a href="#"><i class="fas fa-link"></i></a></li>
                                <li>Graphic Design</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="project_item">
                    <img class="w-100 img-fluid" src="assets/images/project/project_01.jpg" alt="project 2">
                    <h5>Web Design</h5>
                    <p>Completed Date : 15 Jan 2021</p>
                    <div class="project_content">
                        <div class="title">
                            <ul>
                                <li><a href="https://7etouch.com/"><i class="fas fa-link"></i></a></li>
                                <li>Web Design</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="project_item">
                    <img class="w-100 img-fluid" src="assets/images/project/coming-soon.jpg" alt="project 4">
                    <h5>Web Development</h5>
                    <p>Completed Date : - - -</p>
                    <div class="project_content">
                        <div class="title">
                            <ul>
                                <li><a href="#"><i class="fas fa-link"></i></a></li>
                                <li>Web Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="project_item">
                    <img class="w-100 img-fluid" src="assets/images/project/project_03.png" alt="project 3">
                    <h5>Digital Marketing</h5>
                    <p>Completed Date : 15 Feb 2021</p>
                    <div class="project_content">
                        <div class="title">
                            <ul>
                                <li><a href="#"><i class="fas fa-link"></i></a></li>
                                <li>Digital Marketing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Project End -->

<!-- Fun Fact Start Done -->
<section id="fun_fact" style="background-image: url(assets/images/counter_bg.jpg);">
    <div class="container">
        <div class="row">
            <?php foreach (spy_sabbir_all('fun_facts') as $single_fun_fact) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter_item">
                        <i class="fa <?= $single_fun_fact['fun_fact_icon_name'] ?>"></i>
                        <span class="counter_up"><?= $single_fun_fact['fun_fact_qty'] ?></span>
                        <h4><?= $single_fun_fact['fun_fact_title'] ?></h4>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Fun Fact End -->

<!-- Client Testimonial Start Done -->
<section id="testimonial">
    <div class="container">
        <div class="section_title">
            <h2>Client <span> Testimonial</span></h2>
            <p>This slide is perfact for product descriptions.</p>
        </div>
        <div class="row testimonial_slide">
            <?php foreach (spy_sabbir_all('client_testimonials') as $single_client_testimonials) : ?>
                <div class="col-lg-12">
                    <div class="testimonial_item">
                        <h5> <?= $single_client_testimonials['client_name'] ?> <span>(<?= $single_client_testimonials['client_address'] ?>)</span></h5>
                        <h6><?= $single_client_testimonials['client_details'] ?></h6>
                        <p> <sup><i class="fas fa-quote-left"></i></sup> <?= $single_client_testimonials['client_comments'] ?> <sub><i class="fas fa-quote-right"></i></sub> </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row slider_nav m-auto">
            <?php foreach (spy_sabbir_all('client_testimonials') as $single_client_testimonials) : ?>
                <div class="col-lg-2">
                    <div class="testimonial_slider_photo">
                        <img class="w-100 img-fluid" src="assets/images/client_testimonials/<?= $single_client_testimonials['project_logo_img'] ?>" alt="Client 1">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Client Testimonial End -->

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

<!-- Latest Blog Start Done -->
<section id="latest_blog">
    <div class="container">
        <div class="section_title">
            <h2>latest <span>Blog</span></h2>
            <p>Makes a good blog in working time.</p>
        </div>
        <div class="row blog_slider">
            <?php foreach (spy_sabbir_number_of('blogs', 5) as $single_blog) : ?>
                <div class="col-lg-4">
                    <div class="blog_item">
                        <div class="blog_img">
                            <a href="blog_details.php?id=<?= $single_blog['id'] ?>"><img class="w-100 img-fluid" src="assets/images/blog/<?= $single_blog['blog_cover_photo'] ?>" alt="What is the required computer
                                    configuration?"></a>
                        </div>
                        <div class="blog_content">
                            <a href=""><i class="far fa-calendar-check"></i><?= date("Y-M-d", strtotime($single_blog['blog_uploaded_date'])); ?></a>
                            <a href="blog_details.php?id=<?= $single_blog['id'] ?>">
                                <h4><?= $single_blog['blog_headline'] ?></h4>
                            </a>
                            <p><?= substr($single_blog['blog_details'], 0, 100) ?></p>
                            <a class="blog-btn" href="blog_details.php?id=<?= $single_blog['id'] ?>">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Latest Blog End -->

<!-- Our Amazing Clients Start Done -->
<section id="clients">
    <div class="container">
        <div class="section_title">
            <h2>Our <span>Amazing Clients</span></h2>
            <p>We are working with successfully. </p>
        </div>
        <div class="row clients_slider">
            <?php foreach (spy_sabbir_number_of('clients', 7) as $single_client) : ?>
                <div class="col-lg-2 col-md-3">
                    <div class="item">
                        <div class="img">
                            <img src="assets/images/clients/<?= $single_client['project_logo_img'] ?>" alt="clients 1">
                            <a href="<?= $single_client['project_link'] ?>" class="link"><?= strtoupper($single_client['clients_name']) ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Our Amazing Clients End -->

<?php
require_once('footer.php');
?>