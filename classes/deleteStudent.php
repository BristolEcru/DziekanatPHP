<?php

include 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';


if(isset($_POST["indeks"])) {   
    
    $indeks= $_POST["indeks"];

    $newStudent = new StudentController();
    var_dump($indeks);
    $newStudent->removeStudent($indeks);
    
    header("location: ListOfStudentsView.php");
    
}
