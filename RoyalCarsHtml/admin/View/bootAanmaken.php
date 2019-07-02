<?php
$item = new adminItems();
$tool = new tools();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Validation :: w3layouts</title>
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
    <!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />-->
    <!-- Custom Theme files -->
    <link href="<?php echo $tools->getHostAdmin() ?>css/style.css" rel='stylesheet' type='text/css'/>
    <link href="<?php echo $tools->getHostAdmin() ?>css/font-awesome.css" rel="stylesheet">
    <script src="<?php echo $tools->getHostAdmin() ?>js/jquery.min.js"></script>
    <script src="<?php echo $tools->getHostAdmin() ?>js/bootstrap.min.js"></script>

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
            <h1><a class="navbar-brand" href="<?php echo $tool->getHostAdmin() ?>">Minimal</a></h1>
        </div>
        <div class=" border-bottom">
            <div class="full-left">


                <div class="clearfix"></div>
            </div>


            <!-- Brand and toggle get grouped for better mobile display -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php echo $item->headerUser($_SESSION['user']); ?>
            <div class="clearfix">

            </div>

            <nav>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <?php echo $item->sideMenu(); ?>
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
                            <span>Validation</span>
                        </h2>
                    </div>
                    <!--//banner-->
                    <!--grid-->
                    <div class="validation-system">

                        <div class="validation-form">
                            <!---->

                            <form method="post">
                                <div class="vali-form">
                                    <div class="col-md-6 form-group1">
                                        <label class="control-label">Jacht Model</label>
                                        <input type="text" name="model" class="form-control"/>
                                    </div>
                                    <div class="col-md-6 form-group1 form-last">
                                        <label class="control-label">Haven</label><br>
                                        <select name="haven">
                                            <option value="Haven 1">Haven 1</option>
                                            <option value="Haven 2">Haven 2</option>
                                            <option value="Haven 3">Haven 3</option>
                                        </select>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-md-12 form-group1 group-mail">
                                    <label class="control-label">Foto's</label>
                                    <input type="text" placeholder="Foto's" required="foto" name="foto">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 form-group1 group-mail">
                                    <label class="control-label">Beschrijving</label>

                                    <textarea placeholder="beschrijving" name="beschrijving"
                                              class="form-control"></textarea>
                                    <label class="control-label">Bouwjaar</label><br>
                                    <input type="text" placeholder="Bouwjaar" required="" name="bouwjaar">
                                    <label class="control-label">Prijs</label><br>
                                    <input type="text" placeholder="Prijs" name="prijs">
                                    <br><br>
                                    <input type="submit" name="submit" class="btn btn-info" value="Submit"/>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                    <br><br>
                                    <span class="text-success">
                     <?php
                     if (isset($success_message)) {
                         echo $success_message;
                     }
                     ?>  
                     </span>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 form-group2 group-mail">
                                    <br>


                                    <div class="clearfix"></div>

                                    <div class="col-md-12 form-group">


                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>

                            <!---->
                        </div>

                    </div>
                    <!--//grid-->
                    <!---->
                    <div class="copy">
                        <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/"
                                                                                    target="_blank">W3layouts</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </nav>
</div>
<!---->
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->

</body>
</html>

