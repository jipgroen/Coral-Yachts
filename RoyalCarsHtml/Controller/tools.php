<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 11-6-2019
 * Time: 13:27
 */


class tools
{
    public function getHost()
    {
        return $urlIndex = "http://$_SERVER[HTTP_HOST]/yacht/RoyalCarsHtml/";
    }

    public function getHostAdmin()
    {
        return $this->getHost() . "admin/";
    }

    public function printHeader()
    {
        return $html = ' <header>
          <div class="r-header r-header-inner r-header-strip-01">
            <div class="r-header-strip r-header-strip-01">
              <div class="container">
                <div class="row clearfix">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="r-logo">
                      <a href="index.html" class="d-inline-block"><img src="' . $this->getHost() . 'assets/images/logo_small.png" class="img-fluid d-block" alt=""></a>
                    </div>
                    <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="r-nav-section float-right">
                      <nav>
                        <ul>
                          <li>
                            <a href="index.html">HOME</a>
                          </li>
                          <li>
                            <a href="about.html">OVER ONS</a>
                          </li>
                          <li>
                            <a href="car-listing.html">BOTEN</a>
                          </li>
                          <li><a href="gallery.html">RESERVEREN</a></li>
                          <li><a href="drivers.html">CONTACT</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           

          </div>
        </header> ';
    }

    function arrayToString($array, $haakjes)
    {
        if ($haakjes) {
            $itemString = "";
            foreach ($array as $item) {
                $itemString .= "'" . $item . "', ";
            }
            $itemString = substr($itemString, 0, -2);

            return $itemString;
        } else {
            $itemString = "";
            foreach ($array as $item) {
                $itemString .= $item . ", ";
            }
            $itemString = substr($itemString, 0, -2);

            return $itemString;
        }
    }

    public function returnToLogin()
    {
        header("location: " . $this->getHost() . "admin/login");
    }

    public function returnAdmin()
    {
        header("location: " . $this->getHost() . "admin/");
    }

    function splitString($string)
    {
        return explode(",", $string);
    }

    function arrayToStringForJoin($array, $haakjes, $table)
    {
        if ($haakjes) {
            $itemString = "";
            foreach ($array as $item) {
                $itemString .= "'" . $table . "." . $item . "', ";
            }
            $itemString = substr($itemString, 0, -2);

            return $itemString;
        } else {
            $itemString = "";
            foreach ($array as $item) {
                $itemString .= $table . "." . $item . ", ";
            }
            $itemString = substr($itemString, 0, -2);

            return $itemString;
        }
    }

}