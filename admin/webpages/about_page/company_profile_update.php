<?php
session_start();
require_once('../../db.php');


if($_FILES['new_company_profile_photo']['name']){
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/".$_POST['old_company_profile_photo'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['new_company_profile_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand().time().".".end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/'.$new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);

    $old_company_profile_photo = $_POST['old_company_profile_photo'];
    $update_query = "UPDATE company_profiles SET default_item_value = '$new_photo_name' WHERE default_item_value = '$old_company_profile_photo'";
    mysqli_query(connect_to_db(), $update_query);

};


foreach($_POST as $default_item_name => $default_item_value){
    $update_query = "UPDATE company_profiles SET default_item_value = '$default_item_value' WHERE  default_item_name = '$default_item_name'";
    mysqli_query(connect_to_db(), $update_query);
}
$_SESSION['add_status'] = "Company Profile Upload Successfully!";
header('location: company_profile.php');
?>