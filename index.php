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
			<h2>Lista studentów</h2>

			<table>
				<thead>
					<tr>
						<th>Nr albumu</th>
						<th>Imię i nazwisko</th>
						<th>Semestr</th>
						<th>Akcje</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
					</tr>
					
				</tbody>
			</table>
		<a href="includes/formNewStudent.php">	<button>Dodaj studenta</button></a>
		</section>
		<section>
			<h2>Szczegóły studenta</h2>
			<h3>Michał Karaś Nr albumu: 123456 Semestr: 5</h3>
			<br>
			<h4>Historia semestrów</h4>
			<ul>
				<li>1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
				<li>5</li>
			</ul>
			<h4>Oceny</h4>
			<table>
				<thead>
					<tr>
						<th>Przedmiot</th>
						<th>Ocena</th>
						<th>Data</th>
						<th>Prowadzący</th>
						<th>Akcje</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Matematyka</td>
						<td>5</td>
						<td>2022-02-01</td>
						<td>Jan Gniewosz</td>
						<td>
							<button>Edytuj</button>
							<button>Usuń</button>
						</td>
					</tr>
					<tr>
						<td>Fizyka</td>
						<td>4</td>
						<td>2022-01-15</td>
						<td>Maria Walaszek</td>
						<td>
							<button>Edytuj</button>
							<button>Usuń</button>
						</td>
					</tr>
				</tbody>
			</table>
			<button>Dodaj ocenę</button>
		</section>
	</main>
	<footer>
		<p>Copyright © 2023 Dziekanat</p>
	</footer>