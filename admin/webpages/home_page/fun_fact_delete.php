<?php
session_start();
require_once "../../db.php";


// Client Delete
spy_sabbir_delete("fun_facts", "id", $_GET['id']);
$_SESSION['deleted_status'] = "Client Deleted Successfully!";
header('location: fun_fact.php');
?>