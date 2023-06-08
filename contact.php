<?php
$contact = true;
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
                            <h1>Contact</h1>
                            <p>If you have any questions or comments, please don't hesitate to contact me.</p>
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i>
                                            Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

<!-- Contact Us Start Done -->
<section id="contact">
    <div class="container">
        <div class="section_title">
            <h2>Contact <span>Us</span></h2>
            <p>Feel free to contact us if you have any questions</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form_area">
                    <h4>Send a message</h4>
                    <form method="POST" action="contact_post.php">
                        <div class="form-row">
                            <div class="col-lg-12">
                                <div class="item_box">
                                    <input type="text" class="form-control" name="full_name" placeholder="Name*" value="<?= (isset($_SESSION['old_full_name'])) ? $_SESSION['old_full_name'] : '' ; unset($_SESSION['old_full_name'])?>">
                                </div>
                                <?php if (isset($_SESSION['full_name_error'])) : ?>
                                    <small class="text-danger"><?= $_SESSION['full_name_error'] ?></small>
                                <?php
                                endif;
                                unset($_SESSION['full_name_error']);
                                ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="item_box">
                                    <input type="email" class="form-control" name="email_address" placeholder="Email*" value="<?= (isset($_SESSION['old_email_address'])) ? $_SESSION['old_email_address'] : '' ; unset($_SESSION['old_email_address']) ?>">
                                </div>
                                <?php if (isset($_SESSION['email_address_error'])) : ?>
                                    <small class="text-danger"><?= $_SESSION['email_address_error'] ?></small>
                                <?php
                                endif;
                                unset($_SESSION['email_address_error']);
                                ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="item_box">
                                    <input type="text" class="form-control" name="phone_number" placeholder="Phone*" value="<?= (isset($_SESSION['old_phone_number'])) ? $_SESSION['old_phone_number'] : '' ; unset($_SESSION['old_phone_number'])?>">
                                </div>
                                <?php if (isset($_SESSION['phone_number_error'])) : ?>
                                    <small class="text-danger"><?= $_SESSION['phone_number_error'] ?></small>
                                <?php
                                endif;
                                unset($_SESSION['phone_number_error']);
                                ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="item_box">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject*" value="<?= (isset($_SESSION['old_subject'])) ? $_SESSION['old_subject'] : '' ; unset($_SESSION['old_subject']) ?>">
                                </div>
                                <?php if (isset($_SESSION['subject_error'])) : ?>
                                    <small class="text-danger"><?= $_SESSION['subject_error'] ?></small>
                                <?php
                                endif;
                                unset($_SESSION['subject_error']);
                                ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="item_box">
                                    <textarea rows="4" class="form-control" name="message" placeholder="Message*"><?= (isset($_SESSION['old_message'])) ? $_SESSION['old_message'] : ''; unset($_SESSION['old_message']) ?></textarea>
                                </div>
                                <?php if (isset($_SESSION['message_error'])) : ?>
                                    <small class="text-danger"><?= $_SESSION['message_error'] ?></small>
                                <?php
                                endif;
                                unset($_SESSION['message_error']);
                                ?>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success mt-3">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact_details">
                    <div class="details_item">
                        <h4>Address</h4>
                        <p><i class="fas fa-map-marker-alt"></i> <?= spy_sabbir_update('contact_details', 'company_address'); ?></p>
                    </div>
                    <div class="details_item">
                        <h4>Phone</h4>
                        <p><i class="fas fa-phone-alt"></i> <a href="tel:<?= spy_sabbir_update('contact_details', 'phone_number_one'); ?>"><?= spy_sabbir_update('contact_details', 'phone_number_one'); ?></a>
                        </p>
                        <p><i class="fas fa-phone-alt"></i> <a href="tel:<?= spy_sabbir_update('contact_details', 'phone_number_two'); ?>"><?= spy_sabbir_update('contact_details', 'phone_number_two'); ?></a>
                        </p>
                    </div>
                    <div class="details_item">
                        <h4>E-Mail</h4>
                        <p><i class="far fa-envelope"></i> <a href="mailto:<?= spy_sabbir_update('contact_details', 'email_address_one'); ?>"><?= spy_sabbir_update('contact_details', 'email_address_one'); ?></a>
                        </p>
                        <p><i class="far fa-envelope"></i> <a href="mailto:<?= spy_sabbir_update('contact_details', 'email_address_two'); ?>"><?= spy_sabbir_update('contact_details', 'email_address_two'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us End -->

<!-- Maps Start -->
<section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d363.6607429656433!2d90.35418879097962!3d23.98239500323118!2m3!1f0!2f39.404635688427135!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x3755ddb79e27fe0d%3A0x921575b97de3c49b!2sSPY%20IT%20FIRM!5e1!3m2!1sbn!2sbd!4v1623380568095!5m2!1sbn!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<!-- Maps End -->

<?php
require_once('footer.php');
require_once('status.php');
?>