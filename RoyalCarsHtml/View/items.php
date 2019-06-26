<?php

class items
{
    private $tools;
    private $links;

    public function __construct()
    {
        $this->tools = new tools();
        $this->links = new links();
    }

    public $yachtAanbodCounter = 0;

    function yachtAanbod($naam, $plaatsen, $prijs, $url, $id)
    {
        $this->yachtAanbodCounter++;
        $item = '
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="r-best-offer-single">
                          <div class="r-best-offer-in">
                            <div class="r-offer-img">
                              <a class="d-inline-block" href="' . $this->tools->getHost() . 'boot/' . $id . '"><img src="assets/images/' . $url . '" class="img-fluid d-block m-auto" alt=""></a>
                            </div>
                            <div class="r-best-offer-content">
                              <a href="' . $this->tools->getHost() . 'boot/' . $id . '"><b>' . $naam . '</b> ' . $this->yachtAanbodCounter . '</a>
                              <p>Start at <b>' . $prijs . ' USD</b> per day</p>
                            </div>
                            <div class="r-offer-rewst-this">
                              <a href="' . $this->tools->getHost() . 'boot/' . $id . '"><span class="text-uppercase">Reserveer deze boot</span></a>
                            </div>
                          </div>
                        </div>
                      </div>
        ';

        return $item;
    }

    function locatieAanbod($naam, $locatie)
    {

        return '<option value="' . $naam . '">' . $naam . ' (' . $locatie . ')</option>';
    }

    function Header($header = false)
    {

        if ($header) {
            $html = '<header>
        <div class="r-header r-header-inner r-header-strip-01">
            <div class="r-header-strip r-header-strip-01">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="r-logo">
                                <a href="' . $this->links->getHost() . '" class="d-inline-block"><img src="' . $this->links->getHost() . 'assets/images/logo_small.png" class="img-fluid d-block" alt=""></a>
                            </div>
                            <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="r-header-action float-right">
                                <a href="login-register.html"> <img src="' . $this->links->getHost() . 'assets/images/icon-lock.png" alt=""/> <span>Login</span></a>
                                 
                            </div>
                            
                            <div class="r-nav-section float-right">
                            
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="' . $this->links->getHost() . '">HOME</a>
                                        </li>
                                        <li>
                                            <a href="' . $this->links->getPageUrl(1) . '">OVER ONS</a>
                                        </li>
                                        <li>
                                            <a href="' . $this->links->getPageUrl(4) . '">BOTEN</a>
                                        </li>
                                        <li><a href="' . $this->links->getPageUrl(6) . '">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="r-slider owl-carousel" id="defaultHomeSlider">
                <div class="r-slider-item">
                    <img src="assets/images/slide1.jpg" class="img-fluid d-block m-auto" alt="">
                    <div class="container">
                        <div class="r-slider-top-content">
                            <h1 class="animated fadeInDown">Kia Rio <span>z</span></h1>
                            <h4 class="animated fadeInLeft">FOR RENT <strong>$50</strong> PER DAY</h4>
                            <a href="#" class="btn btn-outlined animated fadeInUp"> Reserve Now </a>
                        </div>
                    </div>
                </div>
                <div class="r-slider-item">
                    <img src="assets/images/slide2.jpg" class="img-fluid d-block m-auto" alt="">
                    <div class="container">
                        <div class="r-slider-top-content">
                            <h1>BMW <span>3</span></h1>
                            <h4>FOR RENT <strong>$150</strong> PER DAY</h4>
                            <a href="#" class="btn btn-outlined"> Reserve Now </a>
                        </div>
                    </div>
                </div>
                <div class="r-slider-item">
                    <img src="assets/images/slide3.jpg" class="img-fluid d-block m-auto" alt="">
                    <div class="container">
                        <div class="r-slider-top-content">
                            <h1>Audi <span>A4</span></h1>
                            <h4>FOR RENT <strong>$100</strong> PER DAY</h4>
                            <a href="#" class="btn btn-outlined"> Reserve Now </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>';
        } else {
            $html = '<header>
        <div class="r-header r-header-inner">
            <div class="r-header-strip">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="r-logo">
                                <a href="' . $this->links->getHost() . '" class="d-inline-block"><img src="' . $this->links->getHost() . 'assets/images/logo_small.png"
                                                                                 class="img-fluid d-block" alt=""></a>
                            </div>
                            <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="r-header-action float-right">
                                <a href="login-register.html"> <img src="' . $this->links->getHost() . 'assets/images/icon-lock.png" alt=""/> <span>Login</span></a>
                            </div>
                            <div class="r-nav-section float-right">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="' . $this->links->getHost() . '">HOME</a>
                                        </li>
                                        <li>
                                            <a href="' . $this->links->getPageUrl(1) . '">OVER ONS</a>
                                        </li>
                                        <li>
                                            <a href="' . $this->links->getPageUrl(4) . '">BOTEN</a>
                                        </li>
                                        <li><a href="' . $this->links->getPageUrl(6) . '">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="r-header-inner-banner">
                <div class="r-header-in-over">
                    <h1>Coral Yachts<b> Boten.</b></h1>
                    <div class="r-breadcrum">
                        <ul>
                            <li><a href="index.html">HOME</a></li>
                            <li><span>BOTEN</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>';
        }

        return $html;
    }

    function headerTag($title)
    {
        return '<!-- PAGE TITLE -->
        <title>' . $title . '</title>

        <!-- META-DATA -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- FAVICON -->
        <link rel="shortcut icon" href="' . $this->tools->getHost() . 'assets/images/beeldmerk.png">

        <!-- CSS:: FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!-- CSS:: ANIMATE -->
        <link rel="stylesheet" type="text/css"
              href="' . $this->tools->getHost() . 'assets/css/plugins/animate/animate.css">

        <!-- CSS:: MAIN -->
        <link rel="stylesheet" type="text/css" href="' . $this->tools->getHost() . 'assets/css/main.css">
        <link rel="stylesheet" type="text/css" id="r-color-roller" href="' . $this->tools->getHost() . 'assets/color-files/color-08.css">';
    }

}
