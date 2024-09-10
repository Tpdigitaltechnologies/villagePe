<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/snuff/default/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2024 07:41:32 GMT -->

<head>

<?php require_once('header_css.php'); ?>
    <?php require_once('website_details.php'); ?>
    <title>Contact Us | <?php echo $company_title; ?></title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>

<body>

    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('header_bar.php') ?>


    <div class="page-banner-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <img src="assets/images/page-banner/banner.png" alt="image">
                        <div class="banner-shape">
                            <img src="assets/images/page-banner/shape.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-information-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>Contact Information</span>
                <h2>We're More Than International Payments, Get In Touch</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-information-card">
                        <div class="icon">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <h3>Address:</h3>
                        <p>Gmaxepay Fintech Solutions Pvt Ltd 3rd floor, No 60/417, NKS Prime Metro Station, 20th Main Rd Below Rajaji Nagar 1st Block, 1st N Block Rajajinagar, Bengaluru Karnataka 560010</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-information-card">
                        <div class="icon">
                            <i class="ri-mail-line"></i>
                        </div>
                        <h3>Email Address:</h3>
                        <p><a><span class="__cf_email__" data-cfemail="3f575a5353507f4c514a5959115c5052">gmaxepay@gmail.com</span></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-information-card">
                        <div class="icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <h3>For Support:</h3>
                        <p><a href="tel:8062179126">+91 8062179126</a></p>
                        <h3>For Sales:</h3>
                        <p><a href="tel:8088651844">
                        +91 8088651844 </a></p>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="contact-information-card">
                        <div class="icon">
                            <i class="ri-printer-line"></i>
                        </div>
                        <h3>For Sales:</h3>
                        <p><a href="tel:8088651844">+91 8088651844</a></p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


    <div class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Contact Information</span>
                <h2>Fill In Your Information And We'll Be In Touch As Soon As We Can</h2>
            </div>
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>How Did You Find Us?</label>
                            <select class="form-select">
                                <option selected>Advertisement</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Your Name *</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Eg: Thomas Adison" required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="example@snuff.com" required data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number" required data-error="Please enter your number" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="msg_subject" id="msg_subject" placeholder="Enter your subject" class="form-control" required data-error="Please enter your subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea name="message" class="form-control" id="message" placeholder="Type your message" cols="30" rows="6" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    I agree to the <a href="terms-of-service.php">terms</a> and <a href="privacy-policy.php">privacy policy</a>
                                </label>
                                <div class="help-block with-errors gridCheck-error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="send-btn">
                            <button type="submit" class="default-btn">Submit Now</button>
                        </div>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php require_once('footer.php'); ?>


    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
    </div>


    <?php require_once('footer_script.php'); ?>
</body>

<!-- Mirrored from templates.hibootstrap.com/snuff/default/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2024 07:41:34 GMT -->

</html>