
<?php
session_start();
require_once "../../db.php";

if ($_FILES['new_team_member_photo']['name']) {
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/team_member/" . $_POST['old_team_member_photo'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['new_team_member_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/team_member/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $old_team_member_photo = $_POST['old_team_member_photo'];
    $update_query = "UPDATE team_members SET team_member_photo = '$new_photo_name' WHERE team_member_photo = '$old_team_member_photo'";
    mysqli_query(connect_to_db(), $update_query);
}

$team_member_id = $_POST['team_member_id'];
$team_member_name = $_POST['team_member_name'];
$team_member_designation = $_POST['team_member_designation'];
$team_member_facebook_link = $_POST['team_member_facebook_link'];
$team_member_twitter_link = $_POST['team_member_twitter_link'];
$team_member_instaggram_link = $_POST['team_member_instaggram_link'];
$team_member_linkedin_link = $_POST['team_member_linkedin_link'];

$update_query = "UPDATE team_members SET team_member_name = '$team_member_name', team_member_designation = '$team_member_designation', team_member_facebook_link = '$team_member_facebook_link', team_member_twitter_link = '$team_member_twitter_link', team_member_instaggram_link = '$team_member_instaggram_link', team_member_linkedin_link = '$team_member_linkedin_link' WHERE id = '$team_member_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Team Member Edit Successfully!";
header('location: our_team.php');

?>