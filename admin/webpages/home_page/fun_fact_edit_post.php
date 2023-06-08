<?php
session_start();
require_once "../../db.php";

$fun_fact_id = $_POST['fun_fact_id'];
$fun_fact_icon_name = $_POST['fun_fact_icon_name'];
$fun_fact_title = $_POST['fun_fact_title'];
$fun_fact_qty = $_POST['fun_fact_qty'];

$update_query = "UPDATE fun_facts SET fun_fact_icon_name = '$fun_fact_icon_name', fun_fact_title = '$fun_fact_title', fun_fact_qty = '$fun_fact_qty' WHERE id = '$fun_fact_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Client Edit Successfully!";
header('location: fun_fact.php');

?>