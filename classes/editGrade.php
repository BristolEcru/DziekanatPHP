<?php

include 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';


if (isset($_POST["submit"])) {
    $id_grade = $_POST["id_grade"];
    $grade = $_POST["grade"];

    $grade1 = new GradeModel();
    $grade1->editGrade($id_grade, $grade);
    var_dump($id_grade);
    var_dump($grade);
}

header("location: ListOfStudentsView.php");