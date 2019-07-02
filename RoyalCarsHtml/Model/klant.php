<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 27-6-2019
 * Time: 23:55
 */

class klant
{
    private $voornaam;
    private $achternaam;
    private $email;
    private $telefoon;
    private $gender;
    private $id;
    private $database;

    public function __construct($voornaam, $achternaam, $email, $telefoon, $gender)
    {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->email = $email;
        $this->telefoon = $telefoon;
        $this->gender = $gender;
    }

    public function addToDatabase()
    {
        $data = array('voornaam', 'achternaam', 'email', 'telefoon', 'gender');
        $values = array($this->voornaam, $this->achternaam, $this->email, $this->telefoon, $this->gender);
        $this->database = new database();

        $this->id = $this->database->insert('klant', $data, $values);
    }

    public function getId()
    {
        return $this->id;
    }
}