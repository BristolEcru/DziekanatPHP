<?php
require 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';
?>

<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>Dziekanat</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<header>
		<h1>Dziekanat</h1>
		<nav>
			<ul>
				<li><a href="#">Strona główna</a></li>
				<li><a href="classes/ListOfStudentsView.php">Studenci</a></li>
				<li><a href="#">Semestry</a></li>
				<li><a href="#">Oceny</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section>
			<a href="classes/ListOfStudentsView.php"><button>
					<h2>Lista studentów</h2>
				</button></a>


			<a href="classes/FormNewStudentView.php"> <button>
					<h2>Dodaj studenta</h2>
				</button></a>

		</section>
		<section>

			<br>
			<hr> <br>
			<h2>Wykładowcy i przedmioty</h2>
			<table>
				<thead>
					<tr>
						<th>Przedmiot</th>
						<th>Semestr</th>
						<th>Prowadzący</th>

					</tr>
				</thead>

				<tbody>
					<?php


					$acca1 = new AccaModel();
					$sub1 = new SubjectModel();

					$accas = $acca1->getAccas();
					$subjects = $sub1->getSubjects();


					for ($i = 0; $i < count($accas); $i++) {
						echo '<tr> 
						<td>' . $subjects[$i]['subject'] . ' </td>
						<td>' . $subjects[$i]['id_term'] . '</td>
						<td> ' . $accas[$i]['acca'] . '</td>
						</tr>';
					}
					;


					?>
				</tbody>
			</table>

		</section>
	</main>
	<footer>
		<p>Copyright © 2023 Dziekanat</p>
	</footer>