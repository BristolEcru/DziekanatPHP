<?php
require('C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php');
class Enrolment
{
    public $id_enrolment;
    public $id_term;
    public $id_student;
    public $id_subject;
    public function __construct()
    {
    }
    // public function __construct($id_term, $id_student, $id_subject)
    // {

    //     $this->id_term = $id_term;
    //     $this->id_student = $id_student;
    //     $this->id_subject = $id_subject;
    // }

    public function getIdEnrolment()
    {
        return $this->id_enrolment;
    }

    public function getIdTerm()
    {
        return $this->id_term;
    }

    public function getIdStudent()
    {
        return $this->id_student;
    }

    public function getIdSubject()
    {
        return $this->id_subject;
    }

    public function setIdEnrolment($id_enrolment)
    {
        $this->id_enrolment = $id_enrolment;
    }

    public function setIdTerm($id_term)
    {
        $this->id_term = $id_term;
    }

    public function setIdStudent($id_student)
    {
        $this->id_student = $id_student;
    }

    public function setIdSubject($id_subject)
    {
        $this->id_subject = $id_subject;
    }
}