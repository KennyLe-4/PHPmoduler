<?php 

class Bruker {
public $fnavn;
public $enavn;
protected $bnavn;
private $admin;
public function fullt_navn() {
return $this->fnavn . " " . $this->enavn;
}
}
class Student extends Bruker {
public $studentnummer;
}
class Laerer extends Bruker {
    public $avdeling;
    public $stilling; 

    public $salary; 
}

class LeieTaker extends Bruker {
    private $bankkonto;
    public $adresse;
    public $referanser; 
}








?>