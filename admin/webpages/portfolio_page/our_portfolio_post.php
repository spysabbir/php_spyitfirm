<?php
session_start();
require_once "../../db.php";

$submit_ability = true;

if (!$_POST['portfolio_name']) {
    $_SESSION['portfolio_name_error'] = "Please fill up portfolio name";
    $submit_ability = false;
} else {
    $_SESSION['old_portfolio_name'] = $_POST['portfolio_name'];
}

if(!$_POST['portfolio_category_name']) {
    $_SESSION['portfolio_category_name_error'] = "Please select portfolio category name";
    $submit_ability = false;
} else {
    $_SESSION['old_portfolio_category_name'] = $_POST['portfolio_category_name'];
}

if (!$_POST['live_portfolio_link']) {
    $_SESSION['live_portfolio_link_error'] = "Please fill up live portfolio link";
    $submit_ability = false;
} else {
    $_SESSION['old_live_portfolio_link'] = $_POST['live_portfolio_link'];
}
if (!$_POST['portfolio_details']) {
    $_SESSION['portfolio_details_error'] = "Please fill up portfolio details";
    $submit_ability = false;
} else {
    $_SESSION['old_portfolio_details'] = $_POST['portfolio_details'];
}

// portfolio_cover_photo
$allowed_image_extension = array("png", "jpg", "jpeg", "gif");
$file_extension1 = pathinfo($_FILES["portfolio_cover_photo"]["name"], PATHINFO_EXTENSION);

if (!$_FILES['portfolio_cover_photo']['name']) {
    $_SESSION['portfolio_cover_photo_error'] = "Please choose your portfolio cover photo";
    $submit_ability = false;
} elseif (!in_array($file_extension1, $allowed_image_extension)) {
    $_SESSION['portfolio_cover_photo_error'] = "Please choose Jpg, Png or Jpeg images";
    $submit_ability = false;
} elseif ($_FILES["portfolio_cover_photo"]["size"] > 2000000) {
    $_SESSION['portfolio_cover_photo_error'] = "Please choose Image size exceeds 2MB";
    $submit_ability = false;
}

// portfolio_banner_photo
$allowed_image_extension = array("png", "jpg", "jpeg", "gif");
$file_extension2 = pathinfo($_FILES["portfolio_banner_photo"]["name"], PATHINFO_EXTENSION);

if (!$_FILES['portfolio_banner_photo']['name']) {
    $_SESSION['portfolio_banner_photo_error'] = "Please choose your portfolio cover photo";
    $submit_ability = false;
} elseif (!in_array($file_extension2, $allowed_image_extension)) {
    $_SESSION['portfolio_banner_photo_error'] = "Please choose Jpg, Png or Jpeg images";
    $submit_ability = false;
} elseif ($_FILES["portfolio_banner_photo"]["size"] > 2000000) {
    $_SESSION['portfolio_banner_photo_error'] = "Please choose Image size exceeds 2MB";
    $submit_ability = false;
}

if($submit_ability){
    // Photo Upload Start
    $uploaded_photo1 = $_FILES['portfolio_cover_photo'];
    $after_explode1 = explode('.', $uploaded_photo1['name']);
    $new_photo_name1 = rand().time().".".end($after_explode1);
    $uploaded_photo_temporary_location1 = $uploaded_photo1['tmp_name'];
    $new_location1 = '../../../assets/images/portfolio/'.$new_photo_name1;
    move_uploaded_file($uploaded_photo_temporary_location1, $new_location1);
    // Photo Upload End

    // Photo Upload Start
    $uploaded_photo2 = $_FILES['portfolio_banner_photo'];
    $after_explode2 = explode('.', $uploaded_photo2['name']);
    $new_photo_name2 = rand().time().".".end($after_explode2);
    $uploaded_photo_temporary_location2 = $uploaded_photo2['tmp_name'];
    $new_location2 = '../../../assets/images/portfolio/'.$new_photo_name2;
    move_uploaded_file($uploaded_photo_temporary_location2, $new_location2);
    // Photo Upload End

    $portfolio_name = $_POST['portfolio_name'];
    $designation = $_POST['designation'];
    $portfolio_category_name = $_POST['portfolio_category_name'];
    $live_portfolio_link = $_POST['live_portfolio_link'];
    $portfolio_details = htmlspecialchars($_POST['portfolio_details'], ENT_QUOTES);

    $insert_db = spy_sabbir_insert("portfolios", "portfolio_name, portfolio_category_name, live_portfolio_link, portfolio_details, portfolio_cover_photo, portfolio_banner_photo", "'$portfolio_name', '$portfolio_category_name', '$live_portfolio_link', '$portfolio_details', '$new_photo_name1', '$new_photo_name2'");
    $_SESSION['add_status'] = "Portfolio Added Successfully!";
    unset($_SESSION['old_portfolio_name']);
    unset($_SESSION['old_portfolio_category_name']);
    unset($_SESSION['old_live_portfolio_link']);
    unset($_SESSION['old_portfolio_details']);
    header('location: our_portfolio.php');
}else{
    $_SESSION['missing_status'] = "Portfolio details missing! Please fill in the required information.";
    header('location: our_portfolio.php');
}
?>