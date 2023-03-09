<?php

class StudentController extends StudentModel 
{

    public function __construct(){}

public function grabStudent($indeks)
{
return $this->getStudent($indeks);

}
public function createStudent($imie, $nazwisko, $indeks, $semestr)
{
    $this->setStudent($imie, $nazwisko, $indeks, $semestr);
}

public function removeStudent($indeks)
{
    $this->deleteStudent($indeks);
}

public function getId() {
    return $this->id;
  }
  
  public function getImie() {
    return $this->imie;
  }
  
  public function getNazwisko() {
    return $this->nazwisko;
  }
  public function getIndeks() {
    return $this->indeks;
  }
  
  public function getSemestr() {
    return $this->semestr;
  }

public function emptyInput()
    {
        $result=false;
        if(empty($this->imie)|| empty( $this->nazwisko) || empty( $this->indeks) || empty($this->semestr))
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
    }

    public function invalidInput()
    {
        $result=false;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->imie) || !preg_match("/^[a-zA-Z0-9]*$/",$this->nazwisko) || !preg_match("/^[0-9]*$/",$this->indeks)||!preg_match("/^[0-9]*$/",$this->semestr))
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
    }
}