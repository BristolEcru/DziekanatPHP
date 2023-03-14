<?php
require 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';
?>
<?php

if (isset($_POST["id_grade"])) {
    $indeks = $_POST["id_grade"];
    $indeks = $_POST["grade"];

    $grade1 = new GradeModel();
    if (isset($_POST["id_grade"]) && isset($_POST["grade"])) {
        $id_grade = $_POST["id_grade"];
        $grade = $_POST["grade"];

        $grade1 = new GradeModel();
        $grade1->editGrade($id_grade, $grade);
    }

    $grade1->editGrade($id_grade, $grade);
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="editGrade.php" method="POST">

                    <input type="hidden" name="wyslano" id="wyslano" value="1">

                    <div class="form-group">
                        <label for="indeks"> Ocena: </label>
                        <input type="text" class="form-control" id="grade" name="grade" value="<?php echo $grade; ?>">
                    </div>

                    </br>
                    <button type="submit" name="submit" class="btn btn-primary">Zatwierdź wprowadzone dane</button>
                </form>
            </div>
        </div>
    </div>
</body>


</html>