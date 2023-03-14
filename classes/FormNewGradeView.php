<?php
require 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';
?>
<?php


// Sprawdzenie, czy formularz został wysłany
if (isset($_GET["submit"])) {
    $indeks = $_GET["indeks"];
    $student1 = new StudentController();
    $student = $student1->grabStudent($indeks);
    $term = $student['semestr'];
    $sub = new SubjectModel();
    $subjects = array();
    $subjects = $sub->getSubjectsInTerm($term);

} else {
    // W przypadku, gdy formularz nie został jeszcze wysłany,
    // wartości pól <input> ustawiane są na puste wartości lub domyślne
    $student = array('id' => '9', 'semestr' => '9');
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
                    <input type="hidden" name="id_student" id="id_student" value="<?php echo $student['id'] ?>">
                    <input type="hidden" name="id_term" id="id_term" value="<?php echo $student['semestr'] ?>">
                    <input type="hidden" name="id_acca" id="id_acca" value="7">
                    ...


                    <hr>

                    <h4 style="bold">Wpisz ocenę: </h4>
                    <hr>


                    <div class="form-group">
                        <label for="id_subject">Przedmiot:</label>
                        <select class="form-control" id="id_subject" name="id_subject">
                            <?php foreach ($subjects as $subject): ?>
                                <option value="<?= $subject["id_subject"] ?>"><?= $subject["subject"] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>




                    <!-- <div class="form-group">
                        <label for="subject">Przedmiot:</label>
                        <select class="form-control" id="id_subject" name="id_subject">
                            <option value="1">Wstęp do programowania</option>
                            <option value="2">Podstawy baz danych</option>
                            <option value="3">Algorytmy i struktury danych</option>
                            <option value="4">Architektura komputerów</option>
                            <option value="5">Sieci komputerowe</option>
                            <option value="6">Systemy wbudowane</option>
                            <option value="7">Programowanie obiektowe</option>
                            <option value="8">Fizyka</option>
                            <option value="9">Programowanie niskopoziomowe</option>
                            <option value="10">Podstawy Javy</option>
                            <option value="11">Java</option>
                            <option value="12">Platforma .NET</option>
                            <option value="13">Mutimedia</option>
                            <option value="14">Projekt</option>
                        </select>
                    </div> -->

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