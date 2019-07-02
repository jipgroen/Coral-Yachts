<?php

class user
{
    private $naam;
    private $userNaam;
    private $wachtwoord;
    private $id;
    private $database;

    public function __construct()
    {
        $this->database = new database();
        $this->id = $this->userNaam = $this->wachtwoord = $this->naam = '';
    }

    public function login($userNaam, $wachtwoord)
    {
        $items = array('id', 'naam');

        $response = $this->database->getWhere('user', $items, 'userNaam', '=', "'".$userNaam . "'" . " AND wachtwoord = '" . $wachtwoord . "'");

        if ($response->num_rows > 0) {
            while ($row = $response->fetch_assoc()) {
                $this->id = $row['id'];
                $this->naam = $row['naam'];

                $this->userNaam = $userNaam;
                $this->wachtwoord = $wachtwoord;
            }

            return true;
        } else {
            return false;
        }

    }


    public function createUser($naam, $userNaam, $wachtwoord)
    {
        $this->naam = $naam;
        $this->userNaam = $userNaam;
        $this->wachtwoord = $wachtwoord;
    }

    public function logOut()
    {
        $this->id = $this->userNaam = $this->wachtwoord = $this->naam = '';
    }

    public function loggedIn()
    {
        if ($this->id == '') {
            return false;
        } else {
            return true;
        }
    }

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->naam;
    }
}