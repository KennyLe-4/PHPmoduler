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

Oppgavene 1-3 er gjennomført nedenfor og er kommentert der det er nødvendig. 
Testene er kjørt på test.php filen. 
Det er lagt til flere funksjoner, som ikke blir brukt - men som jeg syntes var greit å ha. 
*/

$deletedUsers = []; // Array for deleted users
class User {
    public function __construct($fname, $lname) { // Constructor that prints out: full name, username, register date
        $this->fname = $fname;
        $this->lname = $lname;

            echo "Your full name is: " . $this->getName();  // Get getName function 
            echo "<br>";

    
            echo "Your username is: " . $this->user_id =  substr($fname, 0,2) . substr($lname, 0,2) . rand(0,50); // Get the first 2 letters in lname and fname and then add random nubmers to the username. // Displays username. 
            echo "<br>";

            echo "You got registred: " . $this->registerDate = date("Y/m/d"); // Get the register date // Todays date
            echo "<br>";
    }


    // Opg 3. Lag også en destruktor for denne klassen som lagrer  brukernavnene til slettede brukere i en matrise
    // This destructor saves the usernames for deleted user in the array. 

    public function __destruct() { 
        $deleteUsers[] = $this->get_userID(); // Puts deleted users in the array: $deleteUsers[]
        echo "<pre>";
        echo "Saved deleted users in this array: "; 
        print_r($deleteUsers);
        echo "</pre>";
    }

    // Opg 3. Oppdater  Bruker-klassen  slik  at  klasseegenskapene  brukernavn  og  registreringsdato  er  protected. 
    // Properties
    private $fname; //firstname 
    private $lname; //lastname
    protected $user_id; // username
    private $admin; // admin
    protected $registerDate; // register date
    
// Methods 
public function getName() {
    return $this->fname . " " . $this->lname; 
}

protected function access() {
    return $this->admin() ? "Admin" : "User";
    
}

private function admin() {
    return $this->admin === true;
    }

public function get_userID() { // Henter username, vet ikke om den trengs
    return $this->user_id; 
}

public function get_registerDate() { // Function for registerDate
    return $this->registerDate; 
}

}

/* Inherited from user
 * Child class
 * Constructor is not inherited, made new one with modification getName function. 
*/ 
class Student extends User {
    protected $course; 

    public function __construct($fname, $lname, $course) { // Constructor that displays: first name, last name, course and register date.

        $this->fname = $fname;
        $this->lname = $lname;
        $this->course = $course;
        
           echo "Your full name is: " . $this->getName();
           echo "<br>";

    
            echo "Your username is: " . $this->user_id = substr($lname, 0,2) . substr($fname, 0,2) . rand(0,50); // Get the first 2 letters in fname and lname and then add random numbers to the username. // Inherted from parent function "fullName". 
            echo "<br>";

            echo "You are studying: " . $this->getCourse();
            echo "<br>";


            echo "You got registred: " . $this->registerDate = date("Y/m/d"); // Get the register date // Todays date
            echo "<br>";
        }
    
    /*
    * Opg 2. 
    * Lag  en  klasse  Student  som  arver  en  klasseegenskap  og en klassemetode fra klassen Bruker. Lag en 
    * klassemetode i Student-klassen som overstyrer Bruker-klassen. 
    */

    final function getName() // final function is used to override inhertiance from parentclass (User).
    {
        return $this->fname . " " . $this->lname . " - you are registred as a student."; // Display fullName function + "you are registred as a student".
    } 
    
    public function getCourse() { // Get course method
        return $this->course;
    }

    public function getAccess() // This method gives you access to the protected method "access", from the child class - Student. 
    { 
        return $this->access(); 
    } 

}
