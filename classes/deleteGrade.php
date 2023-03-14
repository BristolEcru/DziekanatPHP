<?php

include 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';


if (isset($_POST["id_grade"])) {

    $id_grade = $_POST["id_grade"];

    $grade = new GradeModel();
    $grade->deleteGrade($id_grade);

}
header("location: ListOfStudentsView.php");