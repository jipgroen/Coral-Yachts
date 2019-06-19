<?php

class items
{
    private $tools;

    public function __construct()
    {
        $this->tools = new tools();
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
                              <a class="d-inline-block" href="'.$this->tools->getHost().'boot/'.$id.'"><img src="assets/images/' . $url . '" class="img-fluid d-block m-auto" alt=""></a>
                            </div>
                            <div class="r-best-offer-content">
                              <a href="'.$this->tools->getHost().'boot/'.$id.'"><b>' . $naam . '</b> ' . $this->yachtAanbodCounter . '</a>
                              <p>Start at <b>' . $prijs . ' USD</b> per day</p>
                            </div>
                            <div class="r-offer-rewst-this">
                              <a href="'.$this->tools->getHost().'boot/'.$id.'"><span class="text-uppercase">Reserveer deze boot</span></a>
                            </div>
                          </div>
                        </div>
                      </div>
        ';

        return $item;
    }

    function locatieAanbod($naam, $locatie)
    {

        return '<option value="'. $naam .'">'. $naam .' ('.$locatie.')</option>';
    }

}
