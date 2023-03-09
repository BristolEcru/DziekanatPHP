
<?php
	require 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';
?>
      <?php

if(isset($_POST["indeks"])) 
{   
    $indeks= $_POST["indeks"];

    $student1= new StudentController();
    $student=$student1->grabStudent($indeks);

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
                <form action="editStudent.php" method="POST">
          
                    <input type="hidden" name="wyslano" id="wyslano" value="1">
                    <input type="hidden" name="id" id="id" value="<?php $student['id']; ?>">
                    <p>Edytuj dane studenta: </p>
                    <div class="form-group"> <label for="imie">Imię:</label>
                        <input type="text" class="form-control" id="imie" value="<?php echo $student['imie']; ?>" name="imie" >
                    </div>
                    <div class="form-group"> <label for="nazwisko" >Nazwisko: </label>
                        <input type="text" class="form-control" id="nazwisko" name="nazwisko" value="<?php echo $student["nazwisko"]; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="indeks"> Nr indeksu: </label>
                        <input type="text" class="form-control" id="indeks" name="indeks"  value="<?php echo $student['indeks']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="semestr">Semestr:</label>
                        <input type="text" class="form-control" id="semestr" name="semestr" value="<?php echo $student['semestr']; ?>" >
                    </div>
</br>
                    <button type="submit" name="submit" class="btn btn-primary">Zatwierdź wprowadzone dane</button>
                </form>
            </div>
        </div>
    </div>
</body>


</html>