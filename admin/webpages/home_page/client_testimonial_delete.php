<?php
session_start();
require_once "../../db.php";


// Client Delete
spy_sabbir_delete_with_photo("client_testimonials", "id", $_GET['id'], "client_testimonials", "project_logo_img");
$_SESSION['deleted_status'] = "Client Deleted Successfully!";
header('location: client_testimonial.php');
?>