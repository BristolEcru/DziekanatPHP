<?php

include 'C:\xampp\htdocs\PHP_NTW_1_DZIEKANAT\includes\autoloader.php';


if(isset($_POST["indeks"])) {   
    
    $indeks= $_POST["indeks"];

    $newStudent = new StudentController();
    var_dump($indeks);
    $newStudent->removeStudent($indeks);
    
    header("location: ListOfStudentsView.php");
    
}
