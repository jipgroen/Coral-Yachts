<?php
$data = new getData();
$item = new items();
$url = explode("/", $_GET['url']);
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <?php echo $item->headerTag($url[0]) ?>
</head>
<body>
<div class="r-wrapper">
    <?php echo $item->Header(); ?>
    <section id="r-contact-part" class="r-contact-part">
        <div class="container clearfix">
            <div class="contact-head">
                <span>OUR OFFICE</span>
                <h2>Contact <b>Royal Cars</b> for<br> More Information. </h2>
            </div>

            <div class="row clearfix">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-contact-address">
                        <div class="head">Main Office</div>
                        <div class="r-contact-img"><img src="assets/images/contact-img01.jpg"
                                                        class="img-fluid d-block m-auto" alt=""></div>
                        <div class="address address-cnt"><i class="fa fa-map-marker"></i><b>300</b> Pennsylvania EV, USA
                        </div>
                        <div class="call address-cnt"><i class="fa fa-phone"></i><b>+100</b>-1212-2000</div>
                        <div class="mail address-cnt"><i class="fa fa-envelope"></i>info@royalcars.com</div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="r-contact-address">
                        <div class="head">Other Office</div>
                        <div class="r-contact-img"><img src="assets/images/contact-img02.jpg"
                                                        class="img-fluid d-block m-auto" alt=""></div>
                        <div class="address address-cnt"><i class="fa fa-map-marker"></i><b>300</b> Pennsylvania EV, USA
                        </div>
                        <div class="call address-cnt"><i class="fa fa-phone"></i><b>+100</b>-1212-2000</div>
                        <div class="mail address-cnt"><i class="fa fa-envelope"></i>info@royalcars.com</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="r-get-in-touch">
        <div class="r-get-in-touch">
            <div class="container">
                <div class="r-get-header">
                    <span>CONTACT US NOW</span>
                    <h2>Keep <b>In Touch.</b></h2>
                </div>
                <div class="r-get-form">
                    <div class="clearfix">
                        <div class="form-group"><input required="" name="userName" id="userName" type="text"
                                                       placeholder="User name"></div>
                        <div class="form-group"><input required="" name="userEmail" id="userEmail" type="email"
                                                       placeholder="Email Address"></div>
                    </div>
                    <div class="form-group"><input type="text" required="" name="subject" id="subject"
                                                   placeholder="Title Message"></div>
                    <div class="form-group">
                        <textarea placeholder="Message" name="content" required="" id="content"></textarea>
                    </div>
                    <div class="text-center">
                        <button onClick="sendContact();" class="btn btn-full">SEND MESSAGE NOW</button>
                    </div>
                    <div class="mt-4 text-uppercase text-white text-center" id="mail-status"></div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="r-footer">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="r-footer-block">
                            <img src="assets/images/footer-logo.png" class="d-block img-fluid" alt="">
                            <p>
                                We know the difference is in the details and that’s why our car rental services, in the
                                tourism and business industry, stand out for their quality.
                            </p>
                            <form action="#">
                                <div class="r-newsletter">
                                    <input type="email" placeholder="Subscribe Newsletter">
                                    <button class="btn"><i class="fa fa-envelope"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="r-footer-block">
                            <div class="r-footer-widget r-footer-phone">
                                <span><i class="fa fa-phone"></i> CALL US ON LINE 1</span>
                                <h5>100.1212.2000</h5>
                            </div>
                            <div class="r-footer-widget r-footer-nav">
                                <h6>USEFUL LINK</h6>
                                <nav>
                                    <ul>
                                        <li><a href="#">Private Policy</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                        <li><a href="#">Copyright Notification</a></li>
                                        <li><a href="#">Register for New Member</a></li>
                                        <li><a href="#">Press Release</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="r-footer-block">
                            <div class="r-footer-widget r-footer-phone">
                                <span><i class="fa fa-phone"></i> CALL US ON LINE 2</span>
                                <h5>100.2424.2000</h5>
                            </div>
                            <div class="r-footer-widget r-footer-nav">
                                <h6>OUR INFO</h6>
                                <nav>
                                    <ul>
                                        <li><a href="#">About Royal Cars</a></li>
                                        <li><a href="#">Our Mission & Strategy</a></li>
                                        <li><a href="#">Our Vision</a></li>
                                        <li><a href="#">Royal Cars Advantages</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="r-footer-block">
                            <div class="r-footer-widget r-footer-map">
                                <a href="#"> <img src="assets/images/icon-footer-map.png" class="icon" alt=''/>
                                    RoyalCars on Map</a>
                            </div>
                            <div class="r-footer-widget r-footer-nav">
                                <h6>ACCOUNT INFORMATION</h6>
                                <nav>
                                    <ul>
                                        <li><a href="#">Login to My Account</a></li>
                                        <li><a href="#">Press Releases</a></li>
                                        <li><a href="#">User Dashboard</a></li>
                                        <li><a href="#">Email Address</a></li>
                                        <li><a href="#">Lorem Ipsum dolorsit</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix r-footer-strip">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        ©2018 Created by jThemes Studio
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i>. <span>Facebook</span></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i>.<span>Twitter</span></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i>.<span>Instagram</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
<!-- JQUERY:: JQUERY.JS -->
<script src="assets/js/jquery.min.js"></script>

<!-- JQUERY:: BOOTSTRAP.JS -->
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- JQUERY:: CUSTOM -->
<script src="assets/js/custom.js"></script>

<script>
    function sendContact() {
        var valid;
        valid = validateContact();
        if (valid) {
            jQuery.ajax({
                url: "contact_mail.php",
                data: 'userName=' + $("#userName").val() + '&userEmail=' + $("#userEmail").val() + '&subject=' + $("#subject").val() + '&content=' + $(content).val(),
                type: "POST",
                success: function (data) {
                    $("#mail-status").html(data);
                },
                error: function () {
                }
            });
        }
    }

    function validateContact() {
        var valid = true;
        if (!$("#userName").val()) {
            valid = false;
        }
        if (!$("#userEmail").val()) {
            valid = false;
        }
        if (!$("#subject").val()) {
            valid = false;
        }
        if (!$("#content").val()) {
            valid = false;
        }
        return valid;
    }
</script>

</body>
</html>
