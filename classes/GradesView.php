<?php
require 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php';

if (isset($_POST["indeks"])) {
    $indeks = $_POST["indeks"];
    $id_student = $_POST["id"];

    $id_subject = $_POST["id_subject"];
    $id_term = $_POST["id_term"];


    $student1 = new StudentController();
    $student = $student1->grabStudent($indeks);

    $grade1 = new GradeModel();
    $grades = array();
    $grades = $grade1->getGrades($student['id'], $id_subject);
    for ($i = 0; $i < count($grades); $i++) {

    }

    // $subjects = array();
    // $subjects = $sub->getSubjectsInTerm($id_term);

    // $acca1 = new AccaModel();
    // $accas = array();
    // $accas = $acca1->getAccasBySubjects($subjects[0]['id_subject']);
    // foreach ($subjects as $subject) {
    //     $accas = $acca1->getAccasBySubjects($subject['id_subject']);

    // }
    ?>
    <!DOCTYPE html>
    <html lang="pl">

    <head>
        <meta charset="UTF-8">
        <title>Dziekanat</title>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>

        <main>
            <section>
                <h2>Lista ocen</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Ocena</th>
                            <th>Data wystawienia</th>
                            <th>Kto wystawił</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($grades as $grade) { ?>
                            <tr>
                                <td>
                                    <?php echo $grade["grade"]; ?>
                                </td>
                                <td>
                                    <?php echo $grade["date"]; ?>
                                </td>
                                <td>
                                    <?php echo $grade["id_acca"]; ?>
                                </td>
                                <td>
                                    <div>
                                        <form action="EditGradeView.php" method="POST" style="display: inline-block;">
                                            <input type="hidden" name="id_grade" value="<?php echo ($grade["id_grade"]); ?>">
                                            <input type="hidden" name="grade" value="<?php echo ($grade["grade"]); ?>">
                                            <button type="submit"> Edytuj </button>
                                        </form>
                                        <form action="deleteGrade.php" method="POST" style="display: inline-block;">
                                            <input type="hidden" name="id_grade" value="<?php echo ($grade["id_grade"]); ?>">
                                            <button type="submit"> Usuń </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
        </main>
    </body>

<?php } ?>