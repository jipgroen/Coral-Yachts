<?php
$tools = new tools();
$items = new adminItems();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="<?php echo $tools->getHostAdmin() ?>css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href="<?php echo $tools->getHostAdmin() ?>css/style.css" rel='stylesheet' type='text/css'/>
    <link href="<?php echo $tools->getHostAdmin() ?>css/font-awesome.css" rel="stylesheet">
    <script src="<?php echo $tools->getHostAdmin() ?>js/jquery.min.js"></script>
    <!-- Mainly scripts -->
    <script src="<?php echo $tools->getHostAdmin() ?>js/jquery.metisMenu.js"></script>
    <script src="<?php echo $tools->getHostAdmin() ?>js/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <link href="<?php echo $tools->getHostAdmin() ?>css/custom.css" rel="stylesheet">
    <script src="<?php echo $tools->getHostAdmin() ?>js/custom.js"></script>
    <script src="<?php echo $tools->getHostAdmin() ?>js/screenfull.js"></script>
    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }


            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });


        });
    </script>

    <!----->

    <!--pie-chart--->
    <script src="<?php echo $tools->getHostAdmin() ?>js/pie-chart.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
    <!--skycons-icons-->
    <script src="<?php echo $tools->getHostAdmin() ?>js/skycons.js"></script>
    <!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

    <!----->
    <nav class="navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="<?php echo $tools->getHostAdmin()?>">Coral Yachts</a></h1>
        </div>
        <div class=" border-bottom">
            <div class="full-left">
                <section class="full-top">
                </section>
                <div class="clearfix"></div>
            </div>


            <!-- Brand and toggle get grouped for better mobile display -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php echo $items->headerUser($_SESSION['user']); ?>
            <!-- /.navbar-collapse -->
            <div class="clearfix">

            </div>
            <nav>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <?php echo $items->sideMenu();?>
                    </div>
                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="content-main">

                    <!--banner-->
                    <div class="banner">

                        <h2>
                            <a href="index.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                            <span>Beschikbaarheid</span>
                        </h2>
                    </div>
                    <!--//banner-->
                    <!--content-->
                    <div class="content-top">


                        <div class="col-md-4 ">
                            <div class="content-top-1">
                                <div class="col-md-6 top-content">
                                    <h5>Aantal boten verhuurd</h5>
                                    <label>...</label>
                                </div>
                                <div class="col-md-6 top-content1">
                                    <div id="demo-pie-1" class="pie-title-center" data-percent="25"><span
                                                class="pie-value"></span></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="content-top-1">
                                <div class="col-md-6 top-content">
                                    <h5>Aantal boten beschikbaar</h5>
                                    <label>...</label>
                                </div>
                                <div class="col-md-6 top-content1">
                                    <div id="demo-pie-2" class="pie-title-center" data-percent="50"><span
                                                class="pie-value"></span></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!---->
                <!----->
                <div class="copy">
                    <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/"
                                                                                target="_blank">W3layouts</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!---->
        <!--scrolling js-->
        <script src="<?php echo $tools->getHostAdmin() ?>js/jquery.nicescroll.js"></script>
        <script src="<?php echo $tools->getHostAdmin() ?>js/scripts.js"></script>
        <!--//scrolling js-->
        <script src="<?php echo $tools->getHostAdmin() ?>js/bootstrap.min.js"></script>
</body>
</html>

