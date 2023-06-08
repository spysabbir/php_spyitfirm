<?php
$blog = true;
require_once('header.php');
?>

<!-- Banner Start -->
<section id="banner">
    <div class="banner_slider">
        <div class="banner_item" style="background-image: url(assets/images/<?= spy_sabbir_update('theme_default', 'main_banner_photo'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="banner_text">
                            <h1>Blog</h1>
                            <p>This is our blog. You can see my blog below.</p>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

<!-- My Blog Start Done -->
<section id="blog">
    <div class="container">
        <div class="section_title">
            <h2>My <span>Blog</span></h2>
            <p> You can see the details of the service in this blog and know all of the services.</p>
        </div>
        <div class="row">
            <?php foreach (spy_sabbir_all('blogs') as $single_blog) : ?>
                <div class="col-lg-4">
                    <div class="blog_item">
                        <a href="blog_details.php?id=<?= $single_blog['id'] ?>">
                            <img class="w-100 img-fluid" src="assets/images/blog/<?= $single_blog['blog_cover_photo'] ?>" alt="Do you have any freelancing course in your life?">
                        </a>
                        <div class="content">
                            <div class="date">
                                <span><?= date("d", strtotime($single_blog['blog_uploaded_date'])); ?></span>
                                <h5><?= date("F - Y", strtotime($single_blog['blog_uploaded_date'])); ?></h5>
                            </div>
                            <div class="text">
                                <a href="blog_details.php?id=<?= $single_blog['id'] ?>">
                                    <h4><?= $single_blog['blog_headline'] ?></h4>
                                </a>
                                <p><?= substr($single_blog['blog_details'], 0, 150) ?>...</p>
                                <a class="blog-text-btn" href="blog_details.php?id=<?= $single_blog['id'] ?>">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-lg-3 m-auto">
                <div class="page mt-5">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Prev</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="blog.php">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">
                                    2
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="blog.php">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="blog.php">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- My Blog End -->

<?php
require_once('footer.php');
?>