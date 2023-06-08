
<?php
session_start();
require_once "../../db.php";



if ($_FILES['portfolio_new_cover_photo']['name']) {
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/portfolio/" . $_POST['portfolio_old_photo_name'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['portfolio_new_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/portfolio/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $portfolio_old_photo_name = $_POST['portfolio_old_photo_name'];
    $update_query = "UPDATE portfolios SET portfolio_cover_photo = '$new_photo_name' WHERE portfolio_cover_photo = '$portfolio_old_photo_name'";
    mysqli_query(connect_to_db(), $update_query);
}
if ($_FILES['portfolio_new_banner_photo']['name']) {
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/portfolio/" . $_POST['portfolio_old_banner_photo'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['portfolio_new_banner_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/portfolio/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $portfolio_old_banner_photo = $_POST['portfolio_old_banner_photo'];
    $update_query = "UPDATE portfolios SET portfolio_banner_photo = '$new_photo_name' WHERE portfolio_banner_photo = '$portfolio_old_banner_photo'";
    mysqli_query(connect_to_db(), $update_query);
}

$portfolio_name = $_POST['portfolio_name'];
$portfolio_category_name = $_POST['portfolio_category_name'];
$live_portfolio_link = $_POST['live_portfolio_link'];
$portfolio_id = $_POST['portfolio_id'];
$portfolio_details = $_POST['portfolio_details'];
$update_query = "UPDATE portfolios SET portfolio_name = '$portfolio_name', portfolio_category_name= '$portfolio_category_name', live_portfolio_link = '$live_portfolio_link',  portfolio_details = '$portfolio_details' WHERE id = '$portfolio_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Portfolio Edit Successfully!";
header('location: our_portfolio.php');
?>