<?php

include 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';

if (isset($_POST["submit"])) {
    $id = $_POST["id_grade"];
    $id = $_POST["grade"];




    $newStudent = new StudentController();


    header("location: ListOfStudentsView.php");
}