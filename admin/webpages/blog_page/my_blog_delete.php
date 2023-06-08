<?php
session_start();
require_once "../../db.php";

// Blog Delete
spy_sabbir_delete_with_photo("blogs", "id", $_GET['id'], "blog", "blog_cover_photo");
$_SESSION['deleted_status'] = "Blog Deleted Successfully!";
header('location: my_blog.php');


?>