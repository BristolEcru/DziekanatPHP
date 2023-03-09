<?php

include 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';

if(isset($_POST["submit"])) {   
    $imie= $_POST["imie"];
    $nazwisko= $_POST["nazwisko"];
    $indeks= $_POST["indeks"];
    $semestr= $_POST["semestr"];

    var_dump($imie, $nazwisko, $indeks, $semestr); // wyświetlanie wartości zmiennych

    $newStudent = new StudentController();
    $newStudent->createStudent($imie, $nazwisko, $indeks, $semestr);

    header("location: ListOfStudentsView.php");
}
