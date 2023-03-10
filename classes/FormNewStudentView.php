
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
                <form action="createNewStudent.php" method="POST">
                    <input type="hidden" name="wyslano" id="wyslano" value="1">
                    <hr>
                
                    <h4 style="bold">Wpisz dane nowego studenta: </h4>
                    <hr>
                    <div class="form-group"> <label for="imie">Imię:</label>
                        <input type="text" class="form-control" id="imie" name="imie" placeholder="Imię Studenta">
                    </div>
                    <div class="form-group">
                        <label for="nazwisko" >Nazwisko: </label>
                        <input type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Nazwisko Studenta">
                    </div>

                    <div class="form-group">
                        <label for="indeks"> Nr indeksu: </label>
                        <input type="text" class="form-control" id="indeks" name="indeks" placeholder="Numer indeksu">
                    </div>
                    <div class="form-group">
                        <label for="semestr">Semestr:</label>
                        <input type="text" class="form-control" id="semestr" name="semestr" placeholder="Aktualny semestr">
                    </div>
</br>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" width="">Zatwierdź wprowadzone dane</button>
                </form>
            </div>
        </div>
    </div>
</body>


</html>