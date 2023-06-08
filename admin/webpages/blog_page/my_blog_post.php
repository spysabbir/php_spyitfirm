<?php
session_start();
require_once "../../db.php";

$submit_ability = true;

if (!$_POST['blog_headline']) {
    $_SESSION['blog_headline_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_blog_headline'] = $_POST['blog_headline'];
}
if (!$_POST['blog_details']) {
    $_SESSION['blog_details_error'] = "Please fill up your blog details";
    $submit_ability = false;
} else {
    $_SESSION['old_blog_details'] = $_POST['blog_details'];
}

$allowed_image_extension = array( "png", "jpg", "jpeg", "gif" );
$file_extension = pathinfo($_FILES["blog_cover_photo"]["name"], PATHINFO_EXTENSION);

if (!$_FILES['blog_cover_photo']['name']) {
    $_SESSION['blog_cover_photo_error'] = "Please choose your blog cover photo";
    $submit_ability = false;
}elseif(!in_array($file_extension, $allowed_image_extension)) {
    $_SESSION['blog_cover_photo_error'] = "Please choose Jpg, Png or Jpeg images";
    $submit_ability = false;
}elseif ($_FILES["blog_cover_photo"]["size"] > 2000000) {
    $_SESSION['blog_cover_photo_error'] = "Please choose Image size exceeds 2MB";
    $submit_ability = false;
}


if($submit_ability){
    // Photo Upload Start
    $uploaded_photo = $_FILES['blog_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand().time().".".end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/blog/'.$new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End

    // Date Time
    date_default_timezone_set('Asia/Dhaka');
    $current_date_time = date('Y-m-d H:i:s');

    $blog_headline = $_POST['blog_headline'];
    $blog_details = htmlspecialchars($_POST['blog_details'], ENT_QUOTES);

    $insert_db = spy_sabbir_insert("blogs", "blog_headline, blog_details, blog_cover_photo, blog_uploaded_date", "'$blog_headline', '$blog_details', '$new_photo_name', '$current_date_time'");
    $_SESSION['add_status'] = "blog Added Successfully!";
    unset($_SESSION['old_blog_headline']);
    unset($_SESSION['old_blog_details']);
    unset($_SESSION['old_blog_cover_photo']);
    header('location: my_blog.php');
}else{
    $_SESSION['missing_status'] = "blog details missing! Please fill in the required information.";
    header('location: my_blog.php');
}

?>