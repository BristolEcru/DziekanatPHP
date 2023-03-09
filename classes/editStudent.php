<?php

include 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';

if(isset($_POST["submit"])) {  
    $id= $_POST["id"];
 
    $imie= $_POST["imie"];
    $nazwisko= $_POST["nazwisko"];
    $indeks= $_POST["indeks"];
    $semestr= $_POST["semestr"];

    var_dump($imie, $nazwisko, $indeks, $semestr); // wyświetlanie wartości zmiennych

    $newStudent = new StudentController();
    $newStudent->changeStudent($id, $imie, $nazwisko, $indeks, $semestr);

    header("location: ListOfStudentsView.php");
}
