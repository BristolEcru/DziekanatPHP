<?php
require('C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php');
class AccaModel extends StudentController
{
    public $id_acca;
    public $acca;
    public $id_subject;
    public function __construct()
    {
    }
    // public function __construct($id_acca, $acca, $id_subject) {
    //     $this->id_acca = $id_acca;
    //     $this->acca = $acca;
    //     $this->id_subject = $id_subject;
    // }
    public function getAccas()
    {

        $sql = "SELECT * from acca";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $result = array();
        while ($row = $statement->fetch()) {
            $result[] = $row;
        }
        return $result;
    }
    public function getAccasBySubjects($id_subject)
    {

        $sql = "SELECT * FROM acca WHERE id_subject =?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$id_subject]);
        $result = array();
        while ($row = $statement->fetch()) {
            $result[] = $row;
        }
        return $result;
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