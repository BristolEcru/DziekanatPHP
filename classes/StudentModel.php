<?php
require( 'C:\xampp\htdocs\DziekanatPHP\includes\autoloader.php');
class StudentModel extends Dbh
{
    public $id;
    public $imie;
    public $nazwisko;
    public $indeks;
    public $semestr;

      

    public function __construct(){}
    // public function __construct($imie, $nazwisko, $indeks, $semestr)
    // {
    //     $this->imie = $imie;
    //     $this->nazwisko = $nazwisko;
    //     $this->indeks = $indeks;
    //     $this->semestr = $semestr;
    // }

    
    public function getStudents()
    {
        $sql = "SELECT * FROM students";
        $statement = $this->connect()->query($sql);
        $students = array();
        while($row = $statement->fetch())
        {
            $students[]=$row;
        // echo $row['imie'].$row['nazwisko'].'<br/>';
        }
        return $students;
    }
    public function getStudent($indeks)
    {
        $this->indeks=$indeks;
        $sql= "SELECT * from students where indeks = ?";
        $statement = $this-> connect()->prepare($sql);
        $statement->execute([$indeks]);

        $result = $statement->fetchAll();
        return $result[0];
    }
    public function setStudent($imie, $nazwisko, $indeks, $semestr)
    {
        $sql = "INSERT into students (imie, nazwisko, indeks, semestr) values (?,?,?,?)";
        $statement = $this-> connect()->prepare($sql);
        $statement->execute([$imie, $nazwisko, $indeks, $semestr]);

    }
public function deleteStudent($indeks)
{
    $this->indeks=$indeks;
    $sql="DELETE from students where indeks=?";
    $statement = $this->connect()->prepare($sql);
    $statement->execute([$indeks]);
    
}
    
public function editStudent($id, $imie, $nazwisko, $indeks, $semestr)
{
    $this->id=$id;
    $sql= "UPDATE students SET imie = ?, nazwisko = ?, indeks = ?, semestr = ? WHERE id = ? ";
    $statement = $this-> connect()->prepare($sql);
    $statement->execute([$imie, $nazwisko, $indeks, $semestr, $id]);
}

}

//var_dump($Student);

