
<?php
	require 'C:\xampp\htdocs\PHP_NTW_1_DZIEKANAT\includes\autoloader.php';

?>
   <?php
                    $indeks = $_GET['indeks'];
                    $student1 = new StudentController();
                    $student = $student1->grabStudent($indeks);

                    // echo '<tr>
					// 	<td>' . $student['indeks'] . '</td>
					// 	<td>' . $student['imie'] . ' ' . $student['nazwisko'] . '</td>
					// 	<td>' . $student['semestr'] . '</td>
						
					// </tr>';
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
                    <p>Edytuj dane studenta: </p>
                    <div class="form-group"> <label for="imie">Imię:</label>
                        <input type="text" class="form-control" id="imie" value="<?php echo $student->getImie(); ?>" name="imie" placeholder="Imię Studenta">
                    </div>
                    <div class="form-group">
                        <label for="nazwisko" >Nazwisko: </label>
                        <input type="text" class="form-control" id="nazwisko" name="nazwisko" value="<?php echo $student->getNazwisko(); ?>" placeholder="Nazwisko Studenta">
                    </div>

                    <div class="form-group">
                        <label for="indeks"> Nr indeksu: </label>
                        <input type="text" class="form-control" id="indeks" name="indeks"  value="<?php echo $student->getIndeks(); ?>" placeholder="Numer indeksu">
                    </div>
                    <div class="form-group">
                        <label for="semestr">Semestr:</label>
                        <input type="text" class="form-control" id="semestr" name="semestr" value="<?php echo $student->getSemestr(); ?>" placeholder="Aktualny semestr">
                    </div>
</br>
                    <button type="submit" name="submit" class="btn btn-primary">Zatwierdź wprowadzone dane</button>
                </form>
            </div>
        </div>
    </div>
</body>


</html>