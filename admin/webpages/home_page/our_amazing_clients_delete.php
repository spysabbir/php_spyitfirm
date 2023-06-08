<?php
session_start();
require_once "../../db.php";


// Client Delete
spy_sabbir_delete_with_photo("clients", "id", $_GET['id'], "clients", "project_logo_img");
$_SESSION['deleted_status'] = "Client Deleted Successfully!";
header('location: our_amazing_clients.php');

?>