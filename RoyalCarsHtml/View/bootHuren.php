<?php
include "C:/xampp\htdocs\yacht\RoyalCarsHtml\Model/boot.php";
$data = new getData();
$item = new items();

$url = explode("/", $_GET['url']);
$bootId = $url[1];

$database = new database();
$items = $database->checkId($bootId, "yacht", "id");

if ($items->num_rows == 1) {

    $boot = new boot($bootId);
    ?>


    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <?php echo $item->headerTag($url[0]) ?>
    </head>
    <body>
    <div class="r-wrapper">
        <?php echo $item->Header(); ?>
        <section class="r-car-info-wrapper">
            <div class="container">
                <div class="r-car-info-header clearfix">
                    <div class="r-car-top-info">
                        <div class="r-car-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="r-rating-text"> CAR RATING: 5/5 </span>
                        </div>
                        <h2 class="r-car-name"><?php echo $boot->getMerk(); ?>
                            <span><?php echo $boot->getModel(); ?></span></h2>
                    </div>

                    <div class="r-car-offer">
                        <div class="r-offer-cost">
                            <span class="fa fa-eur r-currency"></span> <?php echo $boot->getPrijs(); ?>
                            <small>Per Dag</small>
                        </div>
                        <span class="r-tax-info"> INCLUDED TAXES & CHECKUP </span>
                    </div>
                </div> <!-- /r-car-info-header -->

                <div class="r-car-whole-info">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                            <div class="r-car-product-carousel-wrapper">
                                <div class="r-car-product-carousel owl-carousel" data-slider-id="r-product-slider"
                                     id="productSlider">
                                    <?php
                                    foreach ($boot->getFotos() as $foto) {
                                        ?>
                                        <div class="item">
                                            <img src="<?php echo $database->getHost() ?>assets/images/<?php echo $foto ?>"
                                                 alt="" class="img-fluid"/>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>

                                <ul class="owl-thumbs r-car-product-carousel-thumb" data-slider-id="r-product-slider">

                                    <?php
                                    foreach ($boot->getFotos() as $foto) {
                                        ?>
                                        <li class="owl-thumb-item"><img
                                                    src="<?php echo $database->getHost() ?>assets/images/<?php echo $foto ?>"
                                                    alt=""
                                                    class="img-fluid"/></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div> <!-- /r-car-product-carousel-wrapper -->
                        </div>

                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="r-car-info-content">
                                <span class="r-reg-year">Registered <?php echo $boot->getBouwjaar(); ?></span>
                                <h2 class="r-product-name"> <?php echo $boot->getMerk(); ?>
                                    <span><?php echo $boot->getModel(); ?></span></h2>
                                <p class="r-product-description"><?php echo $boot->getBeschrijving(); ?></p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Make Lamborghini</td>
                                            <td>Style SUV Premium</td>
                                        </tr>
                                        <tr>
                                            <td>Model M-Class Sport</td>
                                            <td>Engine V-6 Cylinder</td>
                                        </tr>
                                        <tr>
                                            <td>Kilometer 42.000 KM</td>
                                            <td>Fuel Type Gasoline</td>
                                        </tr>
                                        <tr>
                                            <td>Body Type Sedan Sport</td>
                                            <td>5 Years Service Include</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /r-car-info-content -->
                        </div>
                    </div>
                </div> <!-- /r-car-whole-info -->

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="r-product-testimonial-wrapper">
                            <h4>Testimonials</h4>
                            <div class="owl-carousel" id="productTestimonial">
                                <div class="r-testimonial-box">
                                    "We know the difference is in the details and that’s why our car rental services, in
                                    the tourism and business."
                                </div>
                                <div class="r-testimonial-box">
                                    "We know the difference is in the details and that’s why our car rental services, in
                                    the tourism and business."
                                </div>
                                <div class="r-testimonial-box">
                                    "We know the difference is in the details and that’s why our car rental services, in
                                    the tourism and business."
                                </div>
                            </div>
                        </div>

                        <div class="r-product-discount">
                            <span class="r-discount">DISCOUNT 50%</span>
                            <p class="r-discount-content"> Special Offers For <strong>Black Friday.</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="r-site-default-accordion">
                            <div class="r-accordion-header">
                                <h2 class="r-accordion-heading">Booking Detail</h2>
                                <i class="fa fa-angle-up"></i>
                            </div>
                            <div class="r-accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Locatie</label>
                                                <div class="input-group">
                                                    <select class="form-control" id="current-location">
                                                        <?php echo $data->getLocaties($boot->getLocatie()); ?>
                                                    </select>
                                                    <span class="input-group-addon"><i
                                                                class="fa fa-map-marker"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Drop Off Address</label>
                                                <div class="input-group">
                                                    <select class="form-control" id="new-location">
                                                        <?php echo $data->getLocaties($boot->getLocatie(), true); ?>
                                                    </select>
                                                    <span class="input-group-addon"><i
                                                                class="fa fa-map-marker"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Begin datum </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="dd.mm.yy"
                                                           id="begin-datum"/>
                                                    <span class="input-group-addon"><i
                                                                class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Eind datum </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="dd.mm.yy"
                                                           id="eind-datum"/>
                                                    <span class="input-group-addon"><i
                                                                class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="r-site-default-accordion">
                            <div class="r-accordion-header">
                                <h2 class="r-accordion-heading">Extra & Fees</h2>
                                <i class="fa fa-angle-up"></i>
                            </div>
                            <div class="r-accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <ul class="r-fee-list">
                                                <?php
                                                foreach ($boot->getServices() as $service) {
                                                    ?>
                                                    <li class="clearfix r-site-checkbox">
                                                        <label>
                                                            <?php echo $service[0] ?>
                                                            <span class="r-extra-fee"> $ <?php echo $service[1] ?></span>
                                                            <input value="<?php echo $service[2] ?>"
                                                                   type="checkbox" class="extras"/>
                                                            <span class="r-site-checkbox-icon"> <i
                                                                        class="fa fa-check-square"></i> </span>
                                                        </label>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <ul class="r-fee-list">

                                            </ul>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                        <div class="r-site-default-accordion">
                            <div class="r-accordion-header">
                                <h2 class="r-accordion-heading">Persoonsgegevens</h2>
                                <i class="fa fa-angle-up"></i>
                            </div>
                            <div class="r-accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="r-site-checkbox">
                                                    <label>
                                                        Meneer
                                                        <input type="radio" class="gender" name="gender" value="m"/>
                                                        <span class="r-site-checkbox-icon"> <i
                                                                    class="fa fa-check-square"></i> </span>
                                                    </label>
                                                    <label>
                                                        Mevrouw
                                                        <input type="radio" class="gender" name="gender" value="v"/>
                                                        <span class="r-site-checkbox-icon"> <i
                                                                    class="fa fa-check-square"></i> </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Voornaam</label>
                                                <input type="text" class="form-control" id="voornaam"
                                                       placeholder="Voornaam"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Achternaam</label>
                                                <input type="text" class="form-control" id="achternaam"
                                                       placeholder="Achternaam"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Email adress</label>
                                                <input type="text" class="form-control" id="email"
                                                       placeholder="Voorbeeld@gmail.com"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Telefoonnummer</label>
                                                <input type="text" class="form-control" placeholder="" id="telefoon"/>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>

                        <div class="r-site-default-accordion">
                            <div class="r-accordion-header">
                                <h2 class="r-accordion-heading">Betaalmethodes</h2>
                                <i class="fa fa-angle-up"></i>
                            </div>
                            <div class="r-accordion-body">
                                <form>
                                    <div class="r-payment-options">

                                        <?php
                                        $items = array('naam', 'id');
                                        $response = $database->get('betaalmogelijkheden', $items);
                                        foreach ($response

                                                 as $betaalmogelijkheden) {
                                            ?>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="r-site-checkbox">
                                                        <label>
                                                            <input value="<?php echo $betaalmogelijkheden['id'] ?>"
                                                                   type="radio" name="betaal-methode"
                                                                   class="betaal-methode"/>
                                                            <span class="r-site-checkbox-icon"> <i
                                                                        class="fa fa-check-square"></i> </span>
                                                            <span class="r-site-checkbox-text"><?php echo $betaalmogelijkheden['naam'] ?></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="r-site-default-accordion">
                            <div class="r-accordion-header">
                                <h2 class="r-accordion-heading">Extra informatie</h2>
                                <i class="fa fa-angle-up"></i>
                            </div>
                            <div class="r-accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="extra-gegevens" class="form-control" placeholder="Extra gegevens"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="r-booking-form-submission">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="r-site-checkbox">
                                        <label>
                                            <input type="checkbox"/>
                                            <span class="r-site-checkbox-icon"> <i
                                                        class="fa fa-check-square"></i> </span>
                                            <span class="r-site-checkbox-text">I accept all informations & payment eyc</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 r-submission-btn-wrapper">
                                    <input type="reset" class="btn-default" value="Cancel This"/>
                                    <input type="submit" class="btn-primary" value="Reserve Now"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section> <!-- /r-car-info -->

        <section id="r-get-in-touch">
            <div class="r-get-in-touch">
                <div class="container">
                    <div class="r-get-header">
                        <span>CONTACT US NOW</span>
                        <h2>Keep <b>In Touch.</b></h2>
                    </div>
                    <div class="r-get-form">
                        <form action="#">
                            <div class="clearfix">
                                <div class="form-group"><input type="text" placeholder="User name"></div>
                                <div class="form-group"><input type="email" placeholder="Email Address"></div>
                            </div>
                            <div class="form-group"><input type="email" placeholder="Title Message"></div>
                            <div class="form-group">
                                <textarea placeholder="Message"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-full">SEND MESSAGE NOW</button>
                            </div>
                        </form>
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
                                    We know the difference is in the details and that’s why our car rental services, in
                                    the tourism and business industry, stand out for their quality.
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
    <script src="<?php echo $database->getHost() ?>assets/js/jquery.min.js"></script>

    <!-- JQUERY:: BOOTSTRAP.JS -->
    <script src="<?php echo $database->getHost() ?>assets/js/tether.min.js"></script>
    <script src="<?php echo $database->getHost() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $database->getHost() ?>assets/js/plugins/owl/owl.carousel.min.js"></script>
    <script src="<?php echo $database->getHost() ?>assets/js/plugins/owl/owl.carousel2.thumbs.js"></script>
    <script src="<?php echo $database->getHost() ?>assets/js/custom.js"></script>


    </body>
    </html>

    <?php
} else {
    include "C:/xampp\htdocs\yacht\RoyalCarsHtml\View/notFound.php";
}