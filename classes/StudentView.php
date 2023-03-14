<?php
require 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';

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
        <?php
        $indeks = $_GET["indeks"];
        $student1 = new StudentController();
        $student = $student1->grabStudent($indeks);
        $sub = new SubjectModel();
        $subjects = array();
        $subjects = $sub->getSubjectsInTerm($student['semestr']);

        $acca1 = new AccaModel();
        $accas = array();
        $accas = $acca1->getAccasBySubjects($subjects[0]['id_subject']);
        foreach ($subjects as $subject) {
            $accas = $acca1->getAccasBySubjects($subject['id_subject']);
            // Wykorzystaj $accas do dalszych działań
        }


        $grade1 = new GradeModel();
        $grades = array();
        for ($i = 0; $i < count($subjects); $i++) {
            $grades = $grade1->getGrades($student['id'], $subjects[$i]['id_subject']);
        }
        // var_dump($grades);
        // echo "            ";
        // var_dump((int) $student['id'], (int) $subjects['id_subject']);
        
        echo '  <section>
            <h2>Lista studentów</h2>
            <a href="includes/FormNewStudentView.php"><button>Dodaj studenta</button></a>
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
						<td>' . $student['indeks'] . '</td>
						<td>' . $student['imie'] . ' ' . $student['nazwisko'] . '</td>
						<td>' . $student['semestr'] . '</td>
						<td>
                        <div>
                                <form action="EditStudentView.php" method="POST" style="display: inline-block;">
                                    <input type="hidden" name="indeks" value="' . $student['indeks'] . '">
                                    <button type="submit"> Edytuj </button>
                                </form>
                       
                                <form action="deleteStudent.php" method="POST" style="display: inline-block;">
                                     <input type="hidden" name="indeks" value="' . $student['indeks'] . '">
                                     <button type="submit"> Usuń </button>
                                </form>

                                <form action="FormNewGradeView.php" method="GET" style="display: inline-block;">
                                <input type="hidden" name="indeks" value="' . $student['indeks'] . '">
                               
                                <button type="submit" name="submit">Dodaj ocenę</button>

                            </form>
                            
        </div>
        </td>
        </tr>
        </tbody>

        </table>

        </section>
        ';
        ?>
        <section>
            <h2>Lista ocen</h2>

            <table>
                <thead>
                    <tr>
                        <th>Semestr</th>
                        <th>Przedmiot</th>

                        <th>Oceny</th>
                        <th>Wystawione przez</th>
                        <th>Szczegóły ocen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($subjects); $i++) {
                        $accas = $acca1->getAccasBySubjects($subjects[$i]['id_subject']);

                        $grades = $grade1->getGrades($student['id'], $subjects[$i]['id_subject']);

                        echo '<tr>';
                        echo '<td>' . $student['semestr'] . '</td>';
                        echo '<td>' . $subjects[$i]['subject'] . '</td>';

                        echo '<td>';
                        foreach ($grades as $grade) {
                            echo $grade['grade'] . '; ';
                        }
                        echo '</td>';
                        echo '<td>';
                        foreach ($accas as $acca) {
                            echo $acca['acca'] . ' ';
                        }
                        echo '</td>';
                        echo '<td>
						<form action="GradesView.php" method="POST" style="display: inline-block;">
                                     <input type="hidden" name="indeks" value="' . $student['indeks'] . '">
                                     <input type="hidden" name="id" value="' . $student['id'] . '">
                                     <input type="hidden" name="id_subject" value="' . $subjects[$i]['id_subject'] . '">
                                     <input type="hidden" name="id_term" value="' . $student['semestr'] . '">
                                     <button type="submit"> Szczegóły ocen </button>
                                </form>
						</td>';

                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

        </section>

    </main>
    <footer>
        <p>Copyright © 2023 Dziekanat</p>
    </footer>