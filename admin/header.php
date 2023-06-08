<?php
session_start();
require_once "db.php";
if (!isset($_SESSION['signin_status'])) {
    header("location: notallowed.php");
}
$count_query1 = "SELECT COUNT(*) AS total_unread_message FROM contacts_messages WHERE status = 'unread'";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="<?= spy_sabbir_update('theme_default', 'company_name'); ?>">

    <title><?= spy_sabbir_update('theme_default', 'company_name'); ?> | Admin Panel</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="lib/chartist/chartist.css" rel="stylesheet">
    <!--  -->
    <link href="lib/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="lib/datatables/buttons/css/buttons.dataTables.min.css" rel="stylesheet">
    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">


    <!-- Bracket CSS -->
    <link rel="stylesheet" href="css/bracket.css">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span><?= spy_sabbir_update('theme_default', 'company_name'); ?><span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <div class="br-sideleft-menu">

            <label class="sidebar-label pd-x-15 mg-y-10 tx-info op-9">Navigation</label>
            <a href="dashboard.php" class="br-menu-link <?= (isset($dashboard)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-bar-chart tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="../index.php" target="_blank" class="br-menu-link <?= (isset($index)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-edge tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Landing</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <label class="sidebar-label pd-x-15 mg-y-10 tx-info op-9">Webpages</label>
            <a href="webpages/theme_default.php" class="br-menu-link <?= (isset($theme_default)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-hourglass-half tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Theme Default</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="#" class="br-menu-link <?= (isset($home_page)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-home tx-26" aria-hidden="true"></i>
                    <span class="menu-item-label">Home Page</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="webpages/home_page/slider.php" class="nav-link <?= (isset($slider)) ? 'active' : '' ?>">Slider</a></li>
                <li class="nav-item"><a href="webpages/home_page/fun_fact.php" class="nav-link <?= (isset($fun_fact)) ? 'active' : '' ?>">Fun Fact</a></li>
                <li class="nav-item"><a href="webpages/home_page/client_testimonial.php" class="nav-link <?= (isset($client_testimonial)) ? 'active' : '' ?>">Client Testimonial</a></li>
                <li class="nav-item"><a href="webpages/home_page/our_amazing_clients.php" class="nav-link <?= (isset($our_amazing_clients)) ? 'active' : '' ?>">Our Amazing Clients</a></li>
            </ul>

            <a href="#" class="br-menu-link <?= (isset($about_page)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-info tx-28" aria-hidden="true"></i>
                    <span class="menu-item-label">About Page</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="webpages/about_page/company_profile.php" class="nav-link <?= (isset($company_profile)) ? 'active' : '' ?>">Company Profile</a></li>
                <li class="nav-item"><a href="webpages/about_page/company_overview.php" class="nav-link <?= (isset($company_overview)) ? 'active' : '' ?>">Company Overview</a></li>
                <li class="nav-item"><a href="webpages/about_page/our_team.php" class="nav-link <?= (isset($our_team)) ? 'active' : '' ?>">Our Team</a></li>
            </ul>

            <a href="#" class="br-menu-link <?= (isset($services_page)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-cogs tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Services Page</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="webpages/services_page/creative_services.php" class="nav-link <?= (isset($creative_services)) ? 'active' : '' ?>">Creative Services</a></li>
                <li class="nav-item"><a href="webpages/services_page/our_working_process.php" class="nav-link <?= (isset($our_working_process)) ? 'active' : '' ?>">Our Working Process</a></li>
                <li class="nav-item"><a href="webpages/services_page/why_choose_us.php" class="nav-link <?= (isset($why_choose_us)) ? 'active' : '' ?>">Why Choose Us</a></li>
            </ul>

            <a href="#" class="br-menu-link <?= (isset($portfolio_page)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-briefcase tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Portfolio Page</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="webpages/portfolio_page/our_portfolio.php" class="nav-link <?= (isset($our_portfolio)) ? 'active' : '' ?>">Our Portfolio</a></li>
            </ul>

            <a href="#" class="br-menu-link <?= (isset($blog_page)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-newspaper-o tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Blog Page</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="webpages/blog_page/my_blog.php" class="nav-link <?= (isset($my_blog)) ? 'active' : '' ?>">My Blog</a></li>
            </ul>

            <a href="#" class="br-menu-link <?= (isset($contact_page)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-envelope-open-o tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">Contact Page</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="webpages/contact_page/contact_details.php" class="nav-link <?= (isset($contact_details)) ? 'active' : '' ?>">Contact Details</a></li>
                <li class="nav-item"><a href="webpages/contact_page/contact_message.php" class="nav-link <?= (isset($contact_message)) ? 'active' : '' ?>">Contact Message</a></li>
            </ul>
            <a href="webpages/subscriber_list.php" class="br-menu-link <?= (isset($subscriber_list)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-at tx-22" aria-hidden="true"></i>
                    <span class="menu-item-label">Subscriber List</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <label class="sidebar-label pd-x-15 mg-y-10 tx-info op-9">Admin</label>

            <a href="#" class="br-menu-link <?= (isset($user)) ? 'active' : '' ?>">
                <div class="br-menu-item">
                    <i class="fa fa-users tx-20" aria-hidden="true"></i>
                    <span class="menu-item-label">User</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="admin/create_user.php" class="nav-link <?= (isset($create_user)) ? 'active' : '' ?>">Create User</a></li>
                <li class="nav-item"><a href="admin/view_user.php" class="nav-link <?= (isset($view_user)) ? 'active' : '' ?>">User List</a></li>
            </ul>
        </div><!-- br-sideleft-menu -->
        <label class="sidebar-label p-2 m-3 text-center bg-info op-9"><?= spy_sabbir_update('theme_default', 'company_name'); ?></label>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a>
            </div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- br-header-left -->
        <div class="br-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                        <i class="icon ion-ios-email-outline tx-24"><small class="text-danger"><sup><?= mysqli_fetch_assoc(mysqli_query(connect_to_db(), $count_query1))['total_unread_message'] ?></sup></small></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                        <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                            <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                        </div><!-- d-flex -->

                        <div class="media-list">
                            <?php foreach (spy_sabbir_number_of('contacts_messages', 5) as $single_contacts_messages) : ?>
                                <!-- loop starts here -->
                                <a href="webpages/contact_page/contact_message_details.php?id=<?= $single_contacts_messages['id'] ?>" class="media-list-link <?= ($single_contacts_messages['status'] == 'unread') ? "bg-dark" : "bg-light" ?>">
                                    <div class="media pd-x-20 pd-y-15">
                                        <div class="media-body">
                                            <div class="d-flex align-items-center justify-content-between mg-b-5">
                                                <h6 class="mg-b-0 tx-medium tx-gray-800 tx-14"><?= ucwords(strtolower($single_contacts_messages["full_name"])) ?></h6>
                                                <span class="tx-11 tx-gray-500"><?= date("d-M-Y h:i:sa", strtotime($single_contacts_messages['message_sending_date'])); ?></span>
                                            </div><!-- d-flex -->
                                            <p class="tx-14 mg-b-0 text-info"><?= $single_contacts_messages['subject'] ?></p>
                                            <p class="tx-12 mg-b-0"><?= substr($single_contacts_messages['message'], 0, 75) ?>...</p>
                                        </div>
                                    </div><!-- media -->
                                </a>
                                <!-- loop ends here -->
                            <?php endforeach; ?>
                            <div class="pd-y-10 tx-center bd-t">
                                <a href="webpages/contact_page/contact_message.php" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                            </div>
                        </div><!-- media-list -->
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name hidden-md-down"><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?></span>
                        <img src="img/<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['profile_img'] ?>" class="wd-32 rounded-circle" alt="">
                        <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="profile.php"><i class="icon ion-ios-person"></i> View Profile</a></li>
                            <li><a href="signout.php"><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
        </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->
