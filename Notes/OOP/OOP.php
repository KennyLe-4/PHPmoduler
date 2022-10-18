<?php 

class Bruker {
    var $epost;
    public $fnavn;
    public $enavn;
    protected $bnavn;
    private $admin;
}

public function fult_navn() {
    return $this->admin . "" . $this->enavn;
}

protected function tilgang() {

return $this->admin() ? "Admin" : "Medlem";
}

private function admin(){
    return $this->admin === true;
}


$b = new $bruker; // Lager objekt av klassen bruker 

$b->fnavn = "Kenny Le"; // Setter verdi til attributt 

echo $b->fnavn; // Skriver ut verdi 









?> 

