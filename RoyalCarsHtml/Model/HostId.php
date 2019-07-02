<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 27-6-2019
 * Time: 23:39
 */

new HostId();

class HostId extends tools
{
    public function __construct()
    {
        echo "<input id='host' style='display: none' value='" . $this->getHost() . "'>";
    }
}