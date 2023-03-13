<?php
require 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';
class GradeModel extends StudentController
{
    public $id;
    public float $grade;
    public $date;
    public $id_subject;
    public $id_term;
    public $id_student;
    public $id_acca;
    public function __construct()
    {
    }
    // public function __construct($id, $grade, $date, $id_subject, $id_term, $id_student, $id_acca) {
    //     $this->id = $id;
    //     $this->grade = $grade;
    //     $this->date = $date;
    //     $this->id_subject = $id_subject;
    //     $this->id_term = $id_term;
    //     $this->id_student = $id_student;
    //     $this->id_acca = $id_acca;
    // }

    public function addGrade($grade, $id_student, $id_subject, $id_term)
    {

        $sql = "INSERT INTO grades (grade, id_subject, id_student, id_term ) values (?,?,?,?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$grade, $id_subject, $id_student, $id_term]);
    }
    public function getGrades($id_student, $id_subject)
    {
        $this->id_student = $id_student;
        $this->id_subject = $id_subject;
        $sql = "SELECT * from grades where id_student = ? and id_subject = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$id_student, $id_subject]);

        $result = $statement->fetchAll();
        return $result;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getIdSubject()
    {
        return $this->id_subject;
    }

    public function setIdSubject($id_subject)
    {
        $this->id_subject = $id_subject;
    }

    public function getIdTerm()
    {
        return $this->id_term;
    }

    public function setIdTerm($id_term)
    {
        $this->id_term = $id_term;
    }

    public function getIdStudent()
    {
        return $this->id_student;
    }

    public function setIdStudent($id_student)
    {
        $this->id_student = $id_student;
    }

    public function getIdAcca()
    {
        return $this->id_acca;
    }

    public function setIdAcca($id_acca)
    {
        $this->id_acca = $id_acca;
    }
}