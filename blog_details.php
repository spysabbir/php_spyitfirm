<?php
$blog = true;
require_once('header.php');
$id = $_GET['id'];
$select_query = "SELECT * FROM blogs WHERE id= $id";
$single_blog = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query));
?>

<!-- Banner Start -->
<section id="banner">
    <div class="banner_slider">
        <div class="banner_item" style="background-image: url(assets/images/<?= spy_sabbir_update('theme_default', 'main_banner_photo'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="banner_text">
                            <h1><?= $single_blog['blog_headline'] ?></h1>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $single_blog['blog_headline'] ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Blog Details Start Done -->
<section id="blog_details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_details_item">
                    <h3><?= $single_blog['blog_headline'] ?></h3>
                    <p>News Update Time: <?= date("Y-M-d", strtotime($single_blog['blog_uploaded_date'])); ?></p>
                    <img class="w-100 img-fluid" src="assets/images/blog/<?= $single_blog['blog_cover_photo'] ?>" alt="Graphic Design Banner">
                    <p><?= $single_blog['blog_details'] ?></p>
                    <div class="share_post">
                        <h5>Share this post on social media.</h5>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details End -->

<?php
require_once('footer.php');
?>