<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/snuff/default/features.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2024 07:42:00 GMT -->

<head>
    <?php require_once('header_css.php'); ?>
    <?php require_once('website_details.php'); ?>
    <title>Services | <?php echo $company_title; ?></title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <style>
        .single-global-transfers-card .icon img {
    max-width: 60px; /* Adjust the size as needed */
    height: auto;
    display: inline-block;
}
.payment-height {
    height: 237px;
}
        .payment .icon img {
    max-width: 100px; /* Adjust the size as needed */
}

@media (max-width: 768px) { /* For smaller screens (tablets and phones) */
    .single-global-transfers-card .icon img {
        max-width: 50px; /* Adjust the size for smaller screens */
    }
    .payment .icon img {
    max-width: 80px; /* Adjust the size as needed */
}
}

@media (max-width: 576px) { /* For extra small screens (mobile devices) */
    .single-global-transfers-card .icon img {
        max-width: 40px; /* Even smaller for mobile devices */
    }
    .payment .icon img {
    max-width: 70px; /* Adjust the size as needed */
}
}
.vertical{
    width: 100%;
    height: 1px;
    background-color: #5D7079;
    margin-bottom: 10px;
}
.single-global-transfers-card p{
    text-align: center;
}
    </style>
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
                        <h2>Our Services</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>Our Services</li>
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

    <!-- Money transfer -->
    <div class="global-transfers-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <!-- <span>Money Transfer</span> -->
                <h2>Our Services</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="icon">
                            <!-- <i class="flaticon-envelope"></i> -->
                             <img src="./assets/images/service/credit-card.png" alt="">
                        </div>
                        <h3>Aadhaar Consent</h3>
                        <!-- <p>Customers can transfer cash to anyone by specifying their bank details right at your doorstep</p> -->
                        <!-- <a href="protecting-your-money.html" class="global-btn">Send Money</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <div class="icon">
                            <img src="./assets/images/service/online-transfer.png" alt="">
                        </div>
                        <h3>Money Transfer</h3>
                        <!-- <p>Assure your customers that their money is safe using our transaction assurance option</p> -->
                        <!-- <a href="getting-started.html" class="global-btn">Get Started</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <div class="icon">
                            <!-- <i class="flaticon-income"></i> -->
                             <img src="./assets/images/service/dollar.png" alt="">
                        </div>
                        <h3>AePS Cashout</h3>
                        <!-- <p>Print transaction-receipt for your customers to give them a sense of safety &nbsp; &nbsp;</p> -->
                        <!-- <a href="help-center.html" class="global-btn">Available Accounts</a> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="icon">
                            <!-- <i class="flaticon-envelope"></i> -->
                             <img src="./assets/images/service/recharge.png" alt="">
                        </div>
                        <h3>Recharge & Bill Payment</h3>
                        <!-- <p>Customers can transfer cash to anyone by specifying their bank details right at your doorstep</p> -->
                        <!-- <a href="protecting-your-money.html" class="global-btn">Send Money</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <div class="icon">
                            <img src="./assets/images/service/boat.png" alt="">
                        </div>
                        <h3>Indo-Nepal Transfer</h3>
                        <!-- <p>Assure your customers that their money is safe using our transaction assurance option</p> -->
                        <!-- <a href="getting-started.html" class="global-btn">Get Started</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <div class="icon">
                            <!-- <i class="flaticon-income"></i> -->
                             <img src="./assets/images/service/qr-code.png" alt="">
                        </div>
                        <h3>QR Payment</h3>
                        <!-- <p>Print transaction-receipt for your customers to give them a sense of safety &nbsp; &nbsp;</p> -->
                        <!-- <a href="help-center.html" class="global-btn">Available Accounts</a> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="icon">
                            <!-- <i class="flaticon-envelope"></i> -->
                             <img src="./assets/images/service/aadhaar-pay.png" alt="">
                        </div>
                        <h3>Aadhaar Pay</h3>
                        <!-- <p>Customers can transfer cash to anyone by specifying their bank details right at your doorstep</p> -->
                        <!-- <a href="protecting-your-money.html" class="global-btn">Send Money</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <div class="icon">
                            <img src="./assets/images/service/cms.png" alt="">
                        </div>
                        <h3>CMS</h3>
                        <!-- <p>Assure your customers that their money is safe using our transaction assurance option</p> -->
                        <!-- <a href="getting-started.html" class="global-btn">Get Started</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <div class="icon">
                            <!-- <i class="flaticon-income"></i> -->
                             <img src="./assets/images/service/refund.png" alt="">
                        </div>
                        <h3>Credit Card Bill Payment</h3>
                        <!-- <p>Print transaction-receipt for your customers to give them a sense of safety &nbsp; &nbsp;</p> -->
                        <!-- <a href="help-center.html" class="global-btn">Available Accounts</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cash Withdrawal -->
    <!-- <div class="global-transfers-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>Cash Withdrawal</span>
                <h2>Aadhar banking (AePS) Turns your shop into an ATM</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <h3>Easy Cash Withdrawal</h3>
                        <p>Aadhaar Banking (AePS) allows you to turn your shop into an ATM and lets your customers withdraw cash using their fingerprint. <br></br></p>
                        <a href="protecting-your-money.html" class="global-btn">Send Money</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <h3>Easy Cash Deposit</h3>
                        <p>Aadhar banking (AePS) also allows you to turn your shop into a cash deposit machine. Your customers can then deposit cash at your shop with ease.</p>
                        <a href="protecting-your-money.html" class="global-btn">Send Money</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-money-transfer"></i>
                        </div>
                        <h3>Quick Fund Transfer</h3>
                        <p>With Aadhar banking (AePS) you will never have to go to a Bank or an ATM and you will not need a debit card also. Just transfer funds using your fingerprint.</p>
                        <a href="getting-started.html" class="global-btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-income"></i>
                        </div>
                        <h3>Instant Balance-inquiry</h3>
                        <p>Aadhar banking (AePS) allows your customers to check their bank balance at your shop instantly. <br></br><br></p>
                        <a href="help-center.html" class="global-btn">Available Accounts</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Bill Utility -->
    <div class="global-transfers-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <!-- <span>Utility & Bill Payment</span> -->
                <h2>Collection</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card payment-height" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="icon">
                          <img src="./assets/images/service/qr-code.png" alt="">
                        </div>
                        <h3>QR Payment</h3>
                        <div class="vertical"></div>
                        <p>A Static QR code will allow end customers to make payments through.</br></p>
                        <!-- <a href="protecting-your-money.html" class="global-btn">Send Money</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card payment-height" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="icon">
                        <img src="./assets/images/service/pay-u.png" alt="">
                        </div>
                        <h3>Via Debit/Credit Card (Instant Settlement)</h3>
                        <div class="vertical"></div>
                        <p>Load E-value using your Debit/Credit Card</p>
                        <!-- <a href="protecting-your-money.html" class="global-btn">Send Money</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card payment payment-height" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <div class="icon">
                        <img src="./assets/images/service/nimbble.png" alt="">
                        </div>
                        <h3>Payment Gateway</h3>
                        <div class="vertical"></div>
                        <p>Load E-value via Credit/Debit Card,Networking,QR</p>
                        <!-- <a href="getting-started.html" class="global-btn">Get Started</a> -->
                    </div>
                </div>
     
            </div>
        </div>
    </div>

    <!-- Sell Insurance -->
    <!-- <div class="global-transfers-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>Sell Insurance</span>
                <h2>Become an Insurance Agent</h2>
                <p>Help your customers secure their lives by becoming an insurance agent. No, not the kind of agent who bothers people by going to their houses only to tell them they could die, but the kind who people themselves approach for their insurance needs.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <h3>Sell exclusive and affordable insurance policies</h3>
                        <p>Aadhaar Banking (AePS) allows you to turn your shop into an ATM and lets your customers withdraw cash using their fingerprint. <br></br></p>
                        <a href="protecting-your-money.html" class="global-btn">Send Money</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-money-transfer"></i>
                        </div>
                        <h3>Make premium payment for your customers</h3>
                        <p>With Aadhar banking (AePS) you will never have to go to a Bank or an ATM and you will not need a debit card also. Just transfer funds using your fingerprint.</p>
                        <a href="getting-started.html" class="global-btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-income"></i>
                        </div>
                        <h3>Get cashback for every insurance/premium sold</h3>
                        <p>Aadhar banking (AePS) allows your customers to check their bank balance at your shop instantly. <br></br><br></p>
                        <a href="help-center.html" class="global-btn">Available Accounts</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Sell Insurance -->
    <!-- <div class="global-transfers-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>Indo-Nepal Money Transfer</span>
                <h2>Easy money transfer from India to Nepal</h2>
                <p>Indo-Nepal Money Transfer is a simple and highly secure direct money transferability for your customers to transfer money to Nepal. No Indian bank account is needed and no need to visit banks.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <h3>Easy Cash transfer</h3>
                        <p>Let customers transfer money to any bank account in Nepal by paying in cash</p>
                        <a href="protecting-your-money.html" class="global-btn">Send Money</a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-income"></i>
                        </div>
                        <h3>Transaction receipt</h3>
                        <p>Print transaction-receipt for your customers to give them a sense of safety</p>
                        <a href="help-center.html" class="global-btn">Available Accounts</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Business Loan -->
    <!-- <div class="global-transfers-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>FLEXIBLE TENURE</span>
                <h2>Easy money transfer from India to Nepal</h2>
                <p>Indo-Nepal Money Transfer is a simple and highly secure direct money transferability for your customers to transfer money to Nepal. No Indian bank account is needed and no need to visit banks.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <h3>Easy Cash transfer</h3>
                        <p>Let customers transfer money to any bank account in Nepal by paying in cash</p>
                        <a href="protecting-your-money.html" class="global-btn">Send Money</a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single-global-transfers-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <div class="icon">
                            <i class="flaticon-income"></i>
                        </div>
                        <h3>Transaction receipt</h3>
                        <p>Print transaction-receipt for your customers to give them a sense of safety</p>
                        <a href="help-center.html" class="global-btn">Available Accounts</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="faq-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="faq-item" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="faq-content">
                            <span>Frequently Ask Questions</span>
                            <h3>Let’s Answer Some Of Your Questions Or Frequently Asked Questions</h3>
                        </div>
                        <div class="faq-accordion">
                            <div class="accordion" id="FaqAccordion">
                                <div class="accordion-item">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What Is A Multi-Currency Account And How Does It Work?
                                    </button>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#FaqAccordion">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nibh felis tortor viverra pulvinar nibh tincidunt pellentesque dolor. Sem lectus magna metus sit felis, ipsum, et. Auctor tellus id nunc nibh felis aliquam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What Happened To The Borderless Account?
                                    </button>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nibh felis tortor viverra pulvinar nibh tincidunt pellentesque dolor. Sem lectus magna metus sit felis, ipsum, et. Auctor tellus id nunc nibh felis aliquam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can I Hold Multiple Currencies In A Snuff Account?
                                    </button>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nibh felis tortor viverra pulvinar nibh tincidunt pellentesque dolor. Sem lectus magna metus sit felis, ipsum, et. Auctor tellus id nunc nibh felis aliquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="faq-image" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <img src="assets/images/faq.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-area pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="widget-logo">
                            <img src="assets/images/logo.png" class="black-logo" alt="image">
                            <img src="assets/images/logo-2.png" class="white-logo" alt="image">
                        </div>
                        <p>To get exclusive updates and benefits.</p>
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="email" class="input-newsletter" placeholder="Enter email" name="EMAIL" required autocomplete="off">
                            <button type="submit" class="default-btn">Subscribe</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                        <ul class="widget-social">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/?lang=en" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/signup" target="_blank">
                                    <i class="ri-linkedin-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <h3>Company And Team</h3>
                        <ul class="quick-links">
                            <li><a href="team.html">Company And Team</a></li>
                            <li><a href="blog.html">News And Blog</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="help-center.html">Affiliates And Partnerships</a></li>
                            <li><a href="about-us.html">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <h3>Resources</h3>
                        <ul class="quick-links">
                            <li><a href="help-center.html">Security</a></li>
                            <li><a href="faq.html">FAQ's</a></li>
                            <li><a href="help-center.html">Community</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <h3>Contact Info</h3>
                        <ul class="info-links">
                            <li><span>Location:</span> 27 Division St, 1100. E Denver, CO 80237, USA</li>
                            <li><span>Email:</span> <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#056d6069696a45766b7063632b666a68"><span class="__cf_email__" data-cfemail="dfb7bab3b3b09facb1aab9b9f1bcb0b2">[email&#160;protected]</span></a></li>
                            <li><span>Phone:</span> <a href="tel:44789289524329">+44 7892 8952 4329</a></li>
                            <li><span>Fax:</span> <a href="tel:12129876543">+1-212-9876543</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Snuff All Rights Reserved by
                        <a href="https://hibootstrap.com/" target="_blank">
                            HiBootstrap
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/ScrollMagic.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/snuff/default/features.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2024 07:42:00 GMT -->

</html>