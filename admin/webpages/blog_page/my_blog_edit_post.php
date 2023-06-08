
<?php 
session_start();
    require_once "../../db.php";

    if($_FILES['blog_new_cover_photo']['name']){
        // Photo Delate
        $link = $_SERVER['DOCUMENT_ROOT']."/Spy_IT_Firm/assets/images/blog/".$_POST['blog_old_photo_name'];
        unlink($link);
        // Photo Upload Start
        $uploaded_photo = $_FILES['blog_new_cover_photo'];
        $after_explode = explode('.', $uploaded_photo['name']);
        $new_photo_name = rand().time().".".end($after_explode);
        $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
        $new_location = '../../../assets/images/blog/' . $new_photo_name;
        move_uploaded_file($uploaded_photo_temporary_location, $new_location);
        // Update Query
        $blog_old_photo_name = $_POST['blog_old_photo_name'];
        $update_query = "UPDATE blogs SET blog_cover_photo = '$new_photo_name' WHERE blog_cover_photo = '$blog_old_photo_name'";
        mysqli_query(connect_to_db(), $update_query);
    }

        $blog_headline = $_POST['blog_headline'];
        $blog_id = $_POST['blog_id'];
        $blog_details = $_POST['blog_details'];
        $update_query = "UPDATE blogs SET blog_headline = '$blog_headline', blog_details = '$blog_details' WHERE id = '$blog_id'";
        mysqli_query(connect_to_db(), $update_query);
        $_SESSION['edit_status'] = "blog Edit Successfully!";
        header('location: my_blog.php');

?>