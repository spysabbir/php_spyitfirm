    <!-- Footer Start-->
    <footer id="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="footer_item ab">
                        <a href="index.php"><img src="assets/images/<?= spy_sabbir_update('theme_default', 'logo_photo'); ?>" alt="Footer Logo"></a>
                        <p>Spy It Firm is the Outsourcing firm based on Freelance & Outsourcing.</p>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> <?= spy_sabbir_update('theme_default', 'company_address'); ?></li>
                            <li><a href="tel:<?= spy_sabbir_update('theme_default', 'company_phone_number'); ?>"><i class="fas fa-phone-alt"></i> <?= spy_sabbir_update('theme_default', 'company_phone_number'); ?></a></li>
                            <li><a href="mailto:<?= spy_sabbir_update('theme_default', 'company_email_address'); ?>"><i class="far fa-envelope"></i>
                                    <?= spy_sabbir_update('theme_default', 'company_email_address'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer_item link">
                        <h3>Quick Links</h3>
                        <div class="link_item">
                            <ul>
                                <li><a href="index.php"><i class="far fa-check-circle"></i>Home</a></li>
                                <li><a href="about.php"><i class="far fa-check-circle"></i>About Us</a></li>
                                <li><a href="services.php"><i class="far fa-check-circle"></i>Services</a></li>
                                <li><a href="portfolio.php"><i class="far fa-check-circle"></i>Portfolio</a></li>
                                <li><a href="blog.php"><i class="far fa-check-circle"></i>Blog</a></li>
                                <li><a href="contact.php"><i class="far fa-check-circle"></i>Contact Us</a></li>
                            </ul>
                            <ul>
                                <li><a href="join-our-team.php"><i class="far fa-check-circle"></i>Join Our Team</a></li>
                                <li><a href="privacy-policy.php"><i class="far fa-check-circle"></i>Privacy Policy</a></li>
                                <li><a href="terms-and-condition.php"><i class="far fa-check-circle"></i>Terms And Conditions</a></li>
                                <li><a href="faqs.php"><i class="far fa-check-circle"></i>Faq's</a></li>
                                <li><a href="sitemap.php"><i class="far fa-check-circle"></i>Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer_item sc">
                        <h3>Subscribe To The Newsletter</h3>
                        <form method="POST" action="subscribe_post.php">
                            <div class="form-group">
                                <input type="email" name="subscriber_email" class="form-control" placeholder="Enter your email" value="<?= (isset($_SESSION['old_email'])) ? $_SESSION['old_email'] : '' ; unset($_SESSION['old_email']) ?>">
                                <button type="submit" class="btn"><i class="far fa-paper-plane"></i></button>
                            </div>
                            <?php if (isset($_SESSION['subscriber_email_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['subscriber_email_error'] ?></small>
                            <?php
                            endif;
                            unset($_SESSION['subscriber_email_error']);
                            ?>
                            <?php if (isset($_SESSION['same_email_check_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['same_email_check_error'] ?></small>
                            <?php
                            endif;
                            unset($_SESSION['same_email_check_error']);
                            ?>
                        </form>
                        <span>Fllow Social Media</span>
                        <ul>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'twitter_link'); ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'instagram_link'); ?>"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'linkedin_link'); ?>"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'pinterest_link'); ?>"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="<?= spy_sabbir_update('theme_default', 'youtube_link'); ?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <span>Our Sister Concern</span>
                        <a href="https://eschool.spyitfirm.com/" target="_blank"><i class="fas fa-university"></i> Spy IT eSchool</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p>All rights reserved &copy; <?= date('Y') ?> | Power By <a href="index.php"><?= spy_sabbir_update('theme_default', 'company_name'); ?></a> </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End-->

    <!-- Top to bottom Start -->
    <div class="top_to">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!-- Top to bottom End -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Counter Up JS -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Isotope JS -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
    <!--  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Security Plugin Code -->
    <!-- <script>
        if (document.layers) {
            document.captureEvents(Event.MOUSEDOWN);
            document.onmousedown = function () {
                return false;
            };
        }
        else {
            document.onmouseup = function (e) {
                if (e != null && e.type == "mouseup") {
                    if (e.which == 2 || e.which == 3) {
                        return false;
                    }
                }
            };
        }
        document.oncontextmenu = function () {
            return false;
        };
    </script> -->

    </body>

    </html>


    <?php
    require_once('status.php');
    ?>