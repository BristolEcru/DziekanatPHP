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
        $indeks = $_GET['indeks'];
        $student1 = new StudentController();
        $student = $student1->grabStudent($indeks);
        $sub = new SubjectModel();
        $subjects = array();
        $subjects = $sub->getSubjects($student['semestr']);
        $acca1 = new AccaModel();
        $accas = array();
        $accas = $acca1->getAccas($subjects['id_subject']);
        $grade1 = new GradeModel();
        $grades = array();
        $grades = $grade1->getGrades((int) $student['id'], (int) $subjects['id_subject']);
        var_dump($grades);
        echo "przerwa";
        var_dump((int) $student['id'], (int) $subjects['id_subject']);
        
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
						
                        <div>
                    <form action="EditStudentView.php" method="POST" style="display: inline-block;">
                        <input type="hidden" name="indeks" value="' . $student['indeks'] . '">
                        <button type="submit"> Edytuj </button>
                   </form>
                       
                                <form action="deleteStudent.php" method="POST" style="display: inline-block;">
                                     <input type="hidden" name="indeks" value="' . $student['indeks'] . '">
                                     <button type="submit"> Usuń </button>
                                </form>
                                <form action="Grades\FormNewGradeView.php" method="POST" style="display: inline-block;">
                                <input type="hidden" name="indeks" value="' . $student['indeks'] . '">
                                <button type="submit"> Dodaj ocenę </button>
                           </form>
                    </div>
						</td>
					</tr>
                </tbody>

            </table>

        </section>

        <section>
            <h2>Lista ocen</h2>

            <table>
                <thead>
                    <tr>
                        <th>Semestr</th>
                        <th>Przedmiot</th>
                        <th>Oceny</th>
                        <th>Wystawione przez</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' . $student['semestr'] . '</td>
                        <td>' . $subjects['subject'] . ' </td>
                        
                        <td>
                        <?php foreach ($grades as $grade): ?>
                            <?php echo $grade['grade'] . ", "; ?>
                        <?php endforeach; ?>
                    </td>
                    


                         
                        <td>' . $accas['acca'] . '</td>
                    </tr>
                   
                    
                </tbody>
            </table>
        </section>
        ';
        ?>
    </main>
    <footer>
        <p>Copyright © 2023 Dziekanat</p>
    </footer>