<?php
session_start();
require_once('admin/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BMFDR2LBK1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-BMFDR2LBK1');
    </script>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="description" content="<?= spy_sabbir_update('theme_default', 'company_about_details'); ?>">
    <meta name="keywords" content="Spy It Firm, Spy It, Spy, It Firm, Graphic Design, Professional Graphic Design, Web Design, Web Development, Web Design & Development, Digital Marketing">
    <meta name="author" content="Md Sabbir Ahammed">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title><?= spy_sabbir_update('theme_default', 'company_name'); ?> | Global it Services Company.</title>
    <!-- Canonical URLs -->
    <link rel="canonical" href="https://spyitfirm.com" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/icon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-5.14.0.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/fonts/my-icons-collection/font/flaticon.css">
    <!-- Main stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <!-- Top Header Start -->
    <section id="top_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="top_header_item">
                        <ul>
                            <li><a href="tel:<?= spy_sabbir_update('theme_default', 'company_phone_number'); ?>"><i class="fas fa-phone-alt"></i> <?= spy_sabbir_update('theme_default', 'company_phone_number'); ?></a></li>
                            <li><a href="mailto:<?= spy_sabbir_update('theme_default', 'company_email_address'); ?>"><i class="far fa-envelope"></i>
                                    <?= spy_sabbir_update('theme_default', 'company_email_address'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="top_header_item open_item">
                        <span> <i class="fas fa-calendar-day"></i>24 Hours 7 Days Services</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="top_header_item social_icon">
                        <ul>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'twitter_link'); ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'instagram_link'); ?>"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'linkedin_link'); ?>"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'pinterest_link'); ?>"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'youtube_link'); ?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Header End -->

    <!-- Header Start -->
    <header id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">

                <a class="navbar-brand" href="index.php"><img src="assets/images/<?= spy_sabbir_update('theme_default', 'logo_photo'); ?>" alt="SPY IT FIRM"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?= (isset($home)) ? 'active' : '' ?>">
                            <a class="nav-link" href="index.php">Home </a>
                        </li>
                        <li class="nav-item <?= (isset($about)) ? 'active' : '' ?>">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item <?= (isset($services)) ? 'active' : '' ?>">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item <?= (isset($portfolio)) ? 'active' : '' ?>">
                            <a class="nav-link" href="portfolio.php">Portfolio</a>
                        </li>
                        <li class="nav-item <?= (isset($blog)) ? 'active' : '' ?>">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item <?= (isset($contact)) ? 'active' : '' ?>">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header End -->