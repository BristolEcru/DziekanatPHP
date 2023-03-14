<?php
require('C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php');
class SubjectModel extends StudentController
{
    public $id_subject;
    public $subject;
    public $id_term;

    public function __construct()
    {
    }

    // public function __construct($id_subject, $subject, $id_term)
    // {
    //     $this->id_subject = $id_subject;
    //     $this->subject = $subject;
    //     $this->id_term = $id_term;
    // }


    public function getSubjects()
    {

        $sql = "SELECT * from subjects ";
        $statement = $this->connect()->prepare($sql);
        $statement->execute();
        $result = array();
        while ($row = $statement->fetch()) {
            $result[] = $row;
        }

        return $result;
    }
    public function getSubjectsInTerm($term)
    {
        $this->id_term = $term;
        $sql = "SELECT * from subjects where id_term = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$term]);
        $result = array();
        while ($row = $statement->fetch()) {
            $result[] = $row;
        }

        return $result;
    }
    public function setStudent($imie, $nazwisko, $indeks, $semestr)
    {
        $sql = "INSERT into students (imie, nazwisko, indeks, semestr) values (?,?,?,?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$imie, $nazwisko, $indeks, $semestr]);

    }
    public function deleteStudent($indeks)
    {
        $this->indeks = $indeks;
        $sql = "DELETE from students where indeks=?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$indeks]);
    }

    public function editStudent($id, $imie, $nazwisko, $indeks, $semestr)
    {
        $this->id = $id;
        $sql = "UPDATE students SET imie = ?, nazwisko = ?, indeks = ?, semestr = ? WHERE id = ? ";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$imie, $nazwisko, $indeks, $semestr, $id]);
    }

    public function getIdSubject()
    {
        return $this->id_subject;
    }

    public function setIdSubject($id_subject)
    {
        $this->id_subject = $id_subject;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getIdTerm()
    {
        return $this->id_term;
    }

    public function setIdTerm($id_term)
    {
        $this->id_term = $id_term;
    }
}