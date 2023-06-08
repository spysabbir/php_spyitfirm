<?php
session_start();
require_once "../../db.php";

// Service Delete
spy_sabbir_delete_with_photo("working_process", "id", $_GET['id'], "working_process", "process_cover_photo");
$_SESSION['deleted_status'] = "Working Process Deleted Successfully!";
header('location: our_working_process.php');
?>