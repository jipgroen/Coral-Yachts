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

    public function getPageUrl($id)
    {
        $items = array('page');
        $response = $this->database->getWhere('pages', $items, 'id', '=', $id);
        $url = '';

        if ($response->num_rows > 0) {
            while ($row = $response->fetch_assoc()) {
                $url = $row['page'];
            }
        }

        return $this->getHost() . $url;
    }


}