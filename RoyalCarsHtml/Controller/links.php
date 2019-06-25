<?php

class links extends tools
{
    private $urlToView;
    private $database;

    public function __construct()
    {
        $this->database = new database();
        $this->urlToView = $this->getHost() . 'View/';
    }

    public function getPageUrl($url)
    {
        return  $this->getHost() . $url;
    }


}