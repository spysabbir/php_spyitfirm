
<?php
session_start();
require_once "db.php";

if ($_FILES['profile_new_photo']['name']) {
    // Photo Delate
    echo $link = $_SERVER['DOCUMENT_ROOT'] ."/Spy_IT_Firm/admin/img/". $_POST['profile_old_photo'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['profile_new_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../admin/img/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $profile_old_photo = $_POST['profile_old_photo'];
    $update_query = "UPDATE users SET profile_img = '$new_photo_name' WHERE profile_img = '$profile_old_photo'";
    mysqli_query(connect_to_db(), $update_query);
}

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$user_phone_number = $_POST['user_phone_number'];
$user_gender = $_POST['user_gender'];
$user_date_of_birth = $_POST['user_date_of_birth'];
$about_me = $_POST['about_me'];
$facebook_link = $_POST['facebook_link'];
$twitter_link = $_POST['twitter_link'];
$instagram_link = $_POST['instagram_link'];
$linkedin_link = $_POST['linkedin_link'];


$update_query = "UPDATE users SET full_name = '$user_name', phone_number = '$user_phone_number', gender = '$user_gender', date_of_birth = '$user_date_of_birth', about_me = '$about_me', facebook_profile_link = '$facebook_link', twitter_profile_link = '$twitter_link', instagram_profile_link = '$instagram_link', linkedin_profile_link = '$linkedin_link' WHERE id = '$user_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Profile Edit Successfully!";
header('location: profile.php');

?>