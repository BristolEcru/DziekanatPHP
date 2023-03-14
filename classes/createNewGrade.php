<?php

include 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';

if (isset($_POST["submit"])) {
    $grade = $_POST["grade"];
    $id_subject = $_POST["id_subject"];
    $id_student = $_POST["id_student"];
    $id_term = $_POST["id_term"];
    $acca1 = new AccaModel();
    $accas = array();
    $accas = $acca1->getAccasBySubjects($id_subject);
    $id_acca = $accas[0]['id_acca'];
    $grade1 = new GradeModel();
    $grade1->addGrade($grade, $id_student, $id_subject, $id_term, $id_acca);

    header("location: ../classes/ListOfStudentsView.php");
}