<?php

class adminItems extends items
{
    private $tools;

    public function __construct()
    {
        $this->tools = new tools();
    }

    function headerUser($user)
    {
        return '<div class="drop-men">
                <ul class=" nav_1">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span
                                    class=" name-caret">' . $user->getNaam() . '<i class="caret"></i></span><img
                                    src="' . $this->tools->getHostAdmin() . 'images/wo.jpg"></a>
                        <ul class="dropdown-menu " role="menu">
                            <li><a href="' . $this->tools->getHostAdmin() . 'loguit"><i class="fa fa-clipboard"></i>Uitloggen</a></li>
                        </ul>
                    </li>

                </ul>
            </div>';
    }

    function sideMenu()
    {
        return '<ul class="nav" id="side-menu">

                            <li>
                                <a href="'.$this->tools->getHostAdmin().'" class=" hvr-bounce-to-right"><i
                                            class="fa fa-dashboard nav_icon "></i><span class="nav-label">Beschikbaarheid</span>
                                </a>
                            </li>
                            <li>
                                <a href="'.$this->tools->getHostAdmin().'reserveringen" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i>
                                    <span class="nav-label">Reserveringen</span> </a>
                                <a href="' . $this->tools->getHostAdmin() . 'bootAanmaken" class=" hvr-bounce-to-right"><i
                                            class="fa fa-inbox nav_icon"></i> <span
                                            class="nav-label">Boten aanmaken</span> </a>

                            </li>
                        </ul>';
    }
}