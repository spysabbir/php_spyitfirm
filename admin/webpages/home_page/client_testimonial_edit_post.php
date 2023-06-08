
<?php
session_start();
require_once "../../db.php";

if ($_FILES['client_testimonials_new_cover_photo']['name']) {
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/client_testimonials/" . $_POST['client_testimonials_old_photo_name'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['client_testimonials_new_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/client_testimonials/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query

    $client_testimonials_old_photo_name = $_POST['client_testimonials_old_photo_name'];
    $update_query = "UPDATE client_testimonials SET project_logo_img = '$new_photo_name' WHERE project_logo_img = '$client_testimonials_old_photo_name'";
    mysqli_query(connect_to_db(), $update_query);
}

$client_testimonials_id = $_POST['client_testimonials_id'];
$client_name = $_POST['client_name'];
$client_details = $_POST['client_details'];
$client_address = $_POST['client_address'];
$client_comments = $_POST['client_comments'];
$update_query = "UPDATE client_testimonials SET client_name = '$client_name', client_details = '$client_details', client_address = '$client_address', client_comments = '$client_comments'  WHERE id = '$client_testimonials_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Client Edit Successfully!";
header('location: client_testimonial.php');

?>