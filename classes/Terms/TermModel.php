<?php
require('C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php');
class Terms
{
    private $id_term;
    private $term;
    public function __construct()
    {
    }
    // public function __construct(){}
    // public function __construct($id_term, $term)
    // {
    //     $this->id_term = $id_term;
    //     $this->term = $term;
    // }

    public function getIdTerm()
    {
        return $this->id_term;
    }

    public function getTerm()
    {
        return $this->term;
    }

    public function setIdTerm($id_term)
    {
        $this->id_term = $id_term;
    }

    public function setTerm($term)
    {
        $this->term = $term;
    }
}