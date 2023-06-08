<?php
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
                            <h1>Site Map</h1>
                            <p> Version : 1.1.1 , Last Save : 26-May-2023 , Page Count : 10 </p>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Site Map</li>
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

<!-- Site Map Start -->
<section id="site_map">
    <div class="container">
        <div class="section_title">
            <h2>Site <span>Map</span></h2>
            <p>The hierarchical structure of the html pages in a website.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="site_map_item">
                    <h5><a href="index.php">Home Page</a></h5>
                    <ul>
                        <li><a href="/#about">About Us</a></li>
                        <li><a href="/#our_services">Our Services</a></li>
                        <li><a href="/#latest_project">Latest Project</a></li>
                        <li><a href="/#testimonial">Client Testimonial</a></li>
                        <li><a href="/#latest_blog">Latest Blog</a></li>
                        <li><a href="/#clients">Amazing Clients</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="site_map_item">
                    <h5><a href="about.php">About Page</a></h5>
                    <ul>
                        <li><a href="about.php#company_profile">Company Profile</a></li>
                        <li><a href="about.php#team_leader_say">Leader Say</a></li>
                        <li><a href="about.php#team">Our Team</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="site_map_item">
                    <h5><a href="services.php">Services Page</a></h5>
                    <ul>
                        <li><a href="services.php#creative_services">Our Services</a></li>
                        <li><a href="services/professional-graphic-design-services-details.php">Graphic Design</a></li>
                        <li><a href="services/web-design-and-development-services-details.php">Web Design</a></li>
                        <li><a href="services/cyber-security-services-details.php">Web Development</a></li>
                        <li><a href="services/digital-marketing-services-details.php">Digital Marketing</a></li>
                        <li><a href="services.php#process">Our Working Process</a></li>
                        <li><a href="services.php#choose_us">Why Choose Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="site_map_item">
                    <h5><a href="portfolio.php">Portfolio Page</a></h5>
                    <ul>
                        <li><a href="portfolio.php#portfolio">Our Portfolio</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="site_map_item">
                    <h5><a href="blog.php">Blog Page</a></h5>
                    <ul>
                        <li><a href="blog.php#blog">My Blog</a></li>
                        <li><a href="blog/professional-graphic-design-blog.php">Graphic Design Blog</a></li>
                        <li><a href="blog/web-design-and-development-blog.php">Web Design Blog</a></li>
                        <li><a href="blog/cyber-security-blog.php">Web Development Blog</a></li>
                        <li><a href="blog/digital-marketing-blog.php">Digital Marketing Blog</a></li>
                        <li><a href="blog/others-blog.php">Others Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="site_map_item">
                    <h5><a href="contact.php">Contact Page</a></h5>
                    <ul>
                        <li><a href="contact.php#contact">Contact Us</a></li>
                        <li><a href="contact.php#map">Maps</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="site_map_item">
                    <h5><a href="">Others Page</a></h5>
                    <ul>
                        <li><a href="join-our-team.php">Join Our Team</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="terms-and-condition.php">Terms And Conditions</a></li>
                        <li><a href="faqs.php">Faq's</a></li>
                        <li><a href="sitemap.php">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Site Map End -->

<?php
require_once('footer.php');
?>