<?php
$about = true;
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
                            <h1>About</h1>
                            <p>Welcome to Spy It Firm. Number one source for all things Services. We're dedicated to
                                providing you the very best of Services.</p>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
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

<!-- Company Profile Start Done -->
<section id="company_profile">
    <div class="container">
        <div class="section_title">
            <h2>Company <span>Profile</span></h2>
            <p>Spy It Firm one of the leading IT Services Institutes in Bangladesh.</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="company_profile_content">
                    <h4>Spy It Firm is an Outsourcing firm based on Freelance & Outsourcing.</h4>
                    <p> Spy It Firm started its journey in online outsourcing and service in January 2021. The main
                        objective of Spy It Firm is to provide high-quality services to our valuable clients and
                        achieving their full satisfaction.</p>
                    <ul>
                        <li>Name : <?= spy_sabbir_update('theme_default', 'company_name'); ?></li>
                        <li>Founded In : <?= date("d-M-Y", strtotime(spy_sabbir_update('company_profiles', 'founded'))); ?></li>
                        <li>Team Members : <?= spy_sabbir_update('company_profiles', 'team_member'); ?> Person</li>
                        <li>Phone Number : <a href="tel:<?= spy_sabbir_update('theme_default', 'company_phone_number'); ?>"> <?= spy_sabbir_update('theme_default', 'company_phone_number'); ?></a></li>
                        <li>Email : <a href="mailto:<?= spy_sabbir_update('theme_default', 'company_email_address'); ?>"> <?= spy_sabbir_update('theme_default', 'company_email_address'); ?></a></li>
                        <li>Address : <?= spy_sabbir_update('theme_default', 'company_address'); ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="company_profile_img">
                    <img class="w-100 img-fluid" src="assets/images/<?= spy_sabbir_update('company_profiles', 'company_profile_photo'); ?>" alt="Company Profile">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Company Profile End -->

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

<!-- Company Overview Start Done -->
<section id="company_overview">
    <div class="container">
        <div class="section_title">
            <h2>Company <span> Overview </span></h2>
            <p>We are the makers of Future Leaders!</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4 class="mb-3">Company History</h4>
                <div class=" content">
                    <p><?= spy_sabbir_update('company_overviews', 'company_history'); ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="mb-3">Our Mission and Vision</h4>
                <div class="content">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Our Mission
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <?= spy_sabbir_update('company_overviews', 'company_mission'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Our Vision
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <?= spy_sabbir_update('company_overviews', 'company_vision'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Company Overview End -->

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

<!-- Our Team Start Done -->
<section id="team">
    <div class="container">
        <div class="section_title">
            <h2>Our <span>Team</span></h2>
            <p>We start our outsourcing company on 1st January 2021. Our team has Five young and energetic members.
            </p>
        </div>
        <div class="row justify-content-center team_slider">
            <?php
            foreach (spy_sabbir_all('team_members') as $single_team_member) :
            ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-item">
                        <img class="w-100 img-fluid" src="assets/images/team_member/<?= $single_team_member['team_member_photo'] ?>" alt="All Shahariar">
                        <div class="team-overlay">
                            <div class="item">
                                <h4 class="title"><?= $single_team_member['team_member_name'] ?></h4>
                                <span><?= $single_team_member['team_member_designation'] ?></span>
                                <ul>
                                    <li><a href="<?= $single_team_member['team_member_facebook_link'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?= $single_team_member['team_member_twitter_link'] ?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?= $single_team_member['team_member_instaggram_link'] ?>"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="<?= $single_team_member['team_member_linkedin_link'] ?>"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-overlay-2 text-center">
                            <img src="assets/images/team_member/<?= $single_team_member['team_member_photo'] ?>" alt="All Shahariar">
                            <div class="team_details">
                                <h4 class="title"><?= $single_team_member['team_member_name'] ?></h4>
                                <span><?= $single_team_member['team_member_designation'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Our Team End -->

<?php
require_once('footer.php');
?>