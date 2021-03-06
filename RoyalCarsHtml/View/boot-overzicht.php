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
    <section class="r-car-showcase-wrapper">
        <div class="r-best-vehicles">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-8 col-sm-12">
                        <div class="r-car-showcase">
                            <div class="row clearfix r-best-offer-list">
                                <?php
                                echo $data->getYachtAanbod();
                                ?>
                            </div>
                        </div> <!-- /r-car-showcase -->
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /r-car-showcase-wrapper -->

    <footer>
        <div class="r-footer">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="r-footer-block">
                            <img src="assets/images/logo_small.png" class="d-block img-fluid" alt="">
                            <p>
                                We know the difference is in the details and that’s why our car rental services, in the
                                tourism and business industry, stand out for their quality.
                            </p>
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

</body>
</html>
