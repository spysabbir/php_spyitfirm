<?php
session_start();
require_once('../db.php');

$signup_ability = true;
if(!$_POST['full_name']){
    $_SESSION['full_name_error'] = "Please fill up your full name.";
    $signup_ability = false;
}else{
    $_SESSION['old_full_name'] = $_POST['full_name'];
}
if(!$_POST['email_address']){
    $_SESSION['email_address_error'] = "Please fill up your email address.";
    $signup_ability = false;
}else{
    $_SESSION['old_email_address'] = $_POST['email_address'];
}

if (!isset($_POST['gender'])) {
    $_SESSION['gender_error'] = "Please select your gender.";
    $signup_ability = false;
} else {
    $_SESSION['old_gender'] = $_POST['gender'];
}

if (!$_POST['designation']) {
    $_SESSION['designation_error'] = "Please select your designation.";
    $signup_ability = false;
} else {
    $_SESSION['old_designation'] = $_POST['designation'];
}

if (!empty($_POST["password"]) && $_POST["password"] != "") {
    if (strlen($_POST["password"]) <= '8') {
        $_SESSION['password_error'] = "Your Password Must Contain At Least 8 Digits !.";
        $signup_ability = false;
    } elseif (!preg_match("#[0-9]+#", $_POST["password"])) {
        $_SESSION['password_error'] = "Your Password Must Contain At Least 1 Number !.";
        $signup_ability = false;
    } elseif (!preg_match("#[A-Z]+#", $_POST["password"])) {
        $_SESSION['password_error'] = "Your Password Must Contain At Least 1 Capital Letter !.";
        $signup_ability = false;
    } elseif (!preg_match("#[a-z]+#", $_POST["password"])) {
        $_SESSION['password_error'] = "Your Password Must Contain At Least 1 Lowercase Letter !.";
        $signup_ability = false;
    } elseif (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
        $_SESSION['password_error'] = "Your Password Must Contain At Least 1 Special Character !.";
        $signup_ability = false;
    }
} else {
    $_SESSION['password_error'] = "Please fill up your password.";
    $signup_ability = false;
}

if(!$_POST['confirm_password']){
    $_SESSION['confirm_password_error'] = "Please fill up your confirm password.";
    $signup_ability = false;
}else{
    if ($_POST['password'] != $_POST['confirm_password']) {
        $_SESSION['password_match_error'] = "Your password & confirm password not match.";
        $signup_ability = false;
    }
}

if($signup_ability){

    $full_name = $_POST['full_name'];
    $email_address = $_POST['email_address'];
    $gender = $_POST['gender'];
    $designation = $_POST['designation'];
    $password = md5($_POST['password']);

    $email_address_check_query = "SELECT COUNT(*) AS email_check FROM users WHERE email_address = '$email_address'";
    if (mysqli_fetch_assoc(mysqli_query(connect_to_db(), $email_address_check_query))['email_check'] == 1) {
        $_SESSION['same_email_check_error'] = "This Email Already Taken";
        header('location: create_user.php');
    }else{

        date_default_timezone_set('Asia/Dhaka');
        $current_date_time = date('Y-m-d H:i:s');
        
        $insert_query = "INSERT INTO users (full_name, email_address, gender, designation, password, created_at) VALUES ( '$full_name', '$email_address', '$gender', '$designation', '$password', '$current_date_time')";
        mysqli_query(connect_to_db(), $insert_query);

        $_SESSION['successfully_status'] = "Account created Successfully";

        unset($_SESSION['old_full_name']);
        unset($_SESSION['old_email_address']);
        unset($_SESSION['old_gender']);
        unset($_SESSION['old_designation']);
        header('location: view_user.php');
    }
}
else{
    header('location: create_user.php');
    $_SESSION['error_status'] = "Somthing Is wrong. Account not created!";

}
?>