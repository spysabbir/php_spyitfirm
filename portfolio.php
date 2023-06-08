<?php
$portfolio = true;
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
                            <h1>Portfolio</h1>
                            <p>This is our mine of work. We provide heigh quality services to our clients.
                                You can see our portfolio from the below.</p>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

<!-- Our Portfolio Start Done -->
<section id="portfolio">
    <div class="container">
        <div class="section_title">
            <h2>Our <span>Portfolio</span></h2>
            <p>Portfolio is your ideal, most advanced and easy to use free creative Portfolio.</p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="filters text-center">
                    <ul>
                        <li><a href="#" data-filter=".graphic_design">Graphic Design</a></li>
                        <li><a href="#" data-filter=".web_design">Web Design</a></li>
                        <li class="active mx-2"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".web_development">Web Development</a></li>
                        <li><a href="#" data-filter=".digital_marketing">Digital Marketing</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row isotope-container justify-content-center">

                    <?php foreach (spy_sabbir_number_of('portfolios', 16) as $single_portfolio) : ?>
                        <div class="col-lg-3 col-md-6 isotope-item <?= $single_portfolio['portfolio_category_name'] ?>">
                            <div class="portfolio_item ">
                                <div class="image-box">
                                    <div class="overlay-container">
                                        <img src="assets/images/portfolio/<?= $single_portfolio['portfolio_cover_photo'] ?>" alt="GYM Website Design">
                                        <a class="overlay" data-toggle="modal" data-target="#project-<?= $single_portfolio['id'] ?>">
                                            <i class="fa fa-search-plus"></i>
                                            <span><?= $single_portfolio['portfolio_name'] ?></span>
                                        </a>
                                    </div>
                                    <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-<?= $single_portfolio['id'] ?>"><?= $single_portfolio['portfolio_category_name'] ?></a>
                                </div>
                                <div class="modal fade" id="project-<?= $single_portfolio['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="project-<?= $single_portfolio['id'] ?>-label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="project-<?= $single_portfolio['id'] ?>-label"><?= strtoupper($single_portfolio['portfolio_category_name']) ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3><?= $single_portfolio['portfolio_name'] ?></h3>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 order-lg-1 order-md-2 order-sm-2 order-2">

                                                        <p><?= $single_portfolio['portfolio_details'] ?></p>

                                                        <a href="<?= $single_portfolio['live_portfolio_link'] ?>">View Project</a>

                                                    </div>
                                                    <div class="col-lg-6 col-md-12 order-lg-2 order-md-1 order-sm-1 order1">
                                                        <img src="assets/images/portfolio/<?= $single_portfolio['portfolio_banner_photo'] ?>" alt="GYM Website Design">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Portfolio end -->

<?php
require_once('footer.php');
?>