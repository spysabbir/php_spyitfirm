<?php
session_start();
require_once "../../db.php";

// Blog Delete
spy_sabbir_delete_with_photo("team_members", "id", $_GET['id'], "team_member", "team_member_photo");
$_SESSION['deleted_status'] = "Team Member Deleted Successfully!";
header('location: our_team.php');
?>