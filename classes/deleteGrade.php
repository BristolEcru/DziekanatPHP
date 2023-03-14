<?php

include 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';


if (isset($_POST["submit"])) {

    $indeks = $_POST["id_grade"];

    $grade = new GradeModel();
    $grade->deleteGrade($id_grade);

    header("location: ListOfStudentsView.php");

}