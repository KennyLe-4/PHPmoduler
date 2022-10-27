<?php 
/*
Opg 1. Lag  en  klasse  Bruker  med  klasseegenskaper  for  fornavn,  etternavn,  brukernavn  og  registreringsdato. 
Legg til to klassemetoder for klassen. 

Opg 2. Lag  en  klasse  Student  som  arver  en  klasseegenskap  og  en  klassemetode  fra  klassen  Bruker.  Lag  en 
klassemetode i Student-klassen som overstyrer Bruker-klassen. 

Opg 3. Oppdater  Bruker-klassen  slik  at  klasseegenskapene  brukernavn  og  registreringsdato  er  protected. 
Oppdater  Bruker-klassen  med konstruktor hvor brukernavn blir  generert tilfeldig og registreringsdato 
blir lagret automatisk. Lag også en destruktor for denne klassen som lagrer  brukernavnene til slettede 
brukere i en matrise. Opprett to objekter basert på Student-klassen og kjør en metode på denne klassen 
som  viser  navn,  brukernavn  og  registreringsdato  for  de  to  studentene.  Slett  deretter  begge  Student-
objektene og skriv ut begge brukernavnene til de slettede studentene (ved å bruke matrisen). 

*/

class User {
    public function __construct($username, $registerDate)
    {
        $this->username = $username; 
        $this->registerDate = $registerDate; 
        
        // konstruktor hvor brukernavn blir  generert tilfeldig og registreringsdato blir lagret automatisk
    }
    public $fname; //firstname 
    public $lname; //lastname
    protected $username; // username
    private $admin; // admin
    protected $registerDate; // register date


public function fullName() {
    return $this->fname . "" . $this->lname; 
}

protected function access() {
    return $this->admin() ? "Admin" : "User";
    
}

private function admin() {
    return $this->admin === true;
    }

}


class Student extends User {
    protected $studentID;
    public $course; 
    final function fullName() // final function is used to override inhertiance from parentclass (User). 
    {
        return $this->fname . " " . $this->lname . " is a student ";
    } 
    
    public function getCourse() {
        return $this->course;
    }

    public function getAccess() // This method gives you access to the protected method "access" from the child class - Student. 
    { 
        return $this->access(); 
    } 
    
}


$user = new User; // Make object of the class "User"

$user->fname = "Kenny "; // Set value to attribute 

$user->lname = "Le"; // Set value to attribute 

echo $user->fullName() . "<br>"; // Print out function "fullName" which is: Kenny Le




$s = new Student; // Make object of the class "Student"

$s->fname = "Kamila"; // Set value to attribute

$s->lname = "Lee"; // Set value to attribute

$s->course = " computer science"; // Set valute to attribute 


echo $s->fullName() . "and are studying" . $s->getCourse(); // Prints out the function "fullName" which is overried in the child class "Student". Displays: Kamila Lee er student. 




    










?>