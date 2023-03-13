<?php
require 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';

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
                    <hr>

                    <h4 style="bold">Wpisz ocenę: </h4>
                    <hr>
                    <div class="form-group">
                        <label for="subject">Przedmiot:</label>
                        <select class="form-control" id="subject" name="subject">
                            <option value="matematyka">Matematyka</option>
                            <option value="fizyka">Fizyka</option>
                            <option value="chemia">Chemia</option>
                            <option value="biologia">Biologia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="acca">Profesor:</label>
                        <select class="form-control" id="acca" name="acca">
                            <option value="Kowalski">Jan Kowalski</option>
                            <option value="Nowak">Adam Nowak</option>
                            <option value="Malinowska">Anna Malinowska</option>
                            <option value="Kaczmarek">Tomasz Kaczmarek</option>
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