<?php
session_start();
require_once "../../db.php";

$submit_ability = true;

if (!$_POST['fun_fact_icon_name']) {
    $_SESSION['fun_fact_icon_name_error'] = "Please Select your service icon name";
    $submit_ability = false;
} else {
    $_SESSION['old_fun_fact_icon_name'] = $_POST['fun_fact_icon_name'];
}
if (!$_POST['fun_fact_title']) {
    $_SESSION['fun_fact_title_error'] = "Please Select your service icon name";
    $submit_ability = false;
} else {
    $_SESSION['old_fun_fact_title'] = $_POST['fun_fact_title'];
}
if (!$_POST['fun_fact_qty']) {
    $_SESSION['fun_fact_qty_error'] = "Please Select your service icon name";
    $submit_ability = false;
} else {
    $_SESSION['old_fun_fact_qty'] = $_POST['fun_fact_qty'];
}

if ($submit_ability) {

    $fun_fact_icon_name = $_POST['fun_fact_icon_name'];
    $fun_fact_title = $_POST['fun_fact_title'];
    $fun_fact_qty = $_POST['fun_fact_qty'];

    $insert_db = spy_sabbir_insert("fun_facts", "fun_fact_icon_name, fun_fact_title, fun_fact_qty", "'$fun_fact_icon_name', '$fun_fact_title', '$fun_fact_qty'");
    $_SESSION['add_status'] = "Clients Added Successfully!";
    unset($_SESSION['old_fun_fact_icon_name']);
    unset($_SESSION['old_fun_fact_title']);
    unset($_SESSION['old_fun_fact_qty']);
    header('location: fun_fact.php');
} else {
    $_SESSION['missing_status'] = "Services details missing! Please fill in the required information.";
    header('location: fun_fact.php');
}
?>