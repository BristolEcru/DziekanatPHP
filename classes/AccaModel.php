<?php
require('C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php');
class AccaModel extends StudentController
{
    private $id_acca;
    private string $acca;
    private $id_subject;
    public function __construct()
    {
    }
    // public function __construct($id_acca, $acca, $id_subject) {
    //     $this->id_acca = $id_acca;
    //     $this->acca = $acca;
    //     $this->id_subject = $id_subject;
    // }
    public function getAccas($id_subject)
    {
        $this->id_subject = $id_subject;
        $sql = "SELECT * from acca where id_subject = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$id_subject]);

        $result = $statement->fetchAll();
        return $result[0];
    }
    public function getIdAcca()
    {
        return $this->id_acca;
    }

    public function setIdAcca($id_acca)
    {
        $this->id_acca = $id_acca;
    }

    public function getAcca()
    {
        return $this->acca;
    }

    public function setAcca($acca)
    {
        $this->acca = $acca;
    }

    public function getIdSubject()
    {
        return $this->id_subject;
    }

    public function setIdSubject($id_subject)
    {
        $this->id_subject = $id_subject;
    }
}