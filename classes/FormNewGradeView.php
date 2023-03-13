<?php
require 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';
?>
<?php

if (isset($_POST["indeks"])) {
    $indeks = $_POST["indeks"];

    $student1 = new StudentController();
    $student = $student1->grabStudent($indeks);
    $term = $student['semestr'];
    $sub = new SubjectModel();
    $subjects = array();
    $subjects = $sub->getSubjects($term);
    // $acca1 = new AccaModel();
    // $accas = array();
    // $accas = (array) $acca1->getAccas($subjects['id_subject']);

}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="createNewGrade.php" method="POST">
                    <input type="hidden" name="wyslano" id="wyslano" value="1">
                    <input type="hidden" name="id_student" id="id_student" value="<?php $student['id'] ?>">
                    <input type="hidden" name="id_term" id="id_term" value="<?php $student['semestr'] ?>">

                    <hr>

                    <h4 style="bold">Wpisz ocenę: </h4>
                    <hr>
                    <div class="form-group">
                        <label for="subject">Przedmiot:</label>
                        <select class="form-control" id="id_subject" name="id_subject">
                            <option value="1">Wstęp do programowania</option>
                            <option value="2">Podstawy baz danych</option>
                            <option value="3">Algorytmy i struktury danych</option>
                            <option value="4">Architektura komputerów</option>
                            <option value="5">Sieci komputerowe</option>
                            <option value="6">Systemy wbudowane</option>
                            <option value="7">Programowanie obiektowe</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="grade">Ocena:</label>
                        <select class="form-control" id="grade" name="grade">
                            <option value="2.0">2.0</option>
                            <option value="2.5">2.5</option>
                            <option value="3.0">3.0</option>
                            <option value="3.5">3.5</option>
                            <option value="4.0">4.0</option>
                            <option value="4.5">4.5</option>
                            <option value="5.0">5.0</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" width="">Zatwierdź
                        wprowadzone dane</button>
                </form>
            </div>
        </div>
    </div>
</body>



</html>