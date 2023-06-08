
<?php
session_start();
require_once "../../db.php";

if ($_FILES['new_why_choose_us_cover_photo']['name']) {
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/choose_us/" . $_POST['old_why_choose_us_cover_photo'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['new_why_choose_us_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/choose_us/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $old_why_choose_us_cover_photo = $_POST['old_why_choose_us_cover_photo'];
    $update_query = "UPDATE choose_us SET why_choose_us_cover_photo = '$new_photo_name' WHERE why_choose_us_cover_photo = '$old_why_choose_us_cover_photo'";
    mysqli_query(connect_to_db(), $update_query);
}

$why_choose_us_id = $_POST['why_choose_us_id'];
$why_choose_us_title = $_POST['why_choose_us_title'];
$why_choose_us_details = $_POST['why_choose_us_details'];

$update_query = "UPDATE choose_us SET why_choose_us_title = '$why_choose_us_title', why_choose_us_details = '$why_choose_us_details' WHERE id = '$why_choose_us_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Why Choose Us Edit Successfully!";
header('location: why_choose_us.php');

?>