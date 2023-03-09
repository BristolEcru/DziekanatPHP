<?php
	require 'C:\xampp\htdocs\PHP_NTW_1_DZIEKANAT\includes\autoloader.php';
	
?>

<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>Dziekanat</title>
	<link rel="stylesheet" href="../style.css">
</head>

<body>
	
	<header>
		<h1>Dziekanat</h1>
		<nav>
			<ul>
				<li><a href="../index.php">Strona główna</a></li>
				<li><a href="#">Studenci</a></li>
				<li><a href="#">Semestry</a></li>
				<li><a href="#">Oceny</a></li>
			</ul>
		</nav>
	</header>
	<main>

		<section>
			<h2>Lista studentów</h2>
			<a href="FormNewStudentView.php"><button>Dodaj studenta</button></a>

		
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
					<?php
	$student1 = new StudentModel();
	$students= $student1->getStudents();
				foreach ($students as $student) {
					echo '<tr>
						<td>'.$student['indeks'].'</td>
						<td>'.$student['imie'] . ' ' . $student['nazwisko'] . '</td>
						<td>'.$student['semestr'].'</td>
						<td>
						
							<a href="StudentView.php?indeks='.$student['indeks'].'"><button> Szczegóły studenta </button></a>
							<button>Edytuj</button>
							<button>Usuń</button>
						</td>
					</tr>';
				}
				
				?>
				</tbody>
			
			</table>
	
		</section>
		
	</main>
	<footer>
		<p>Copyright © 2023 Dziekanat</p>
	</footer>