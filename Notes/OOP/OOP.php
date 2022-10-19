<?php 

class Bruker {
    public $fnavn;
    public $enavn;
    protected $bnavn;
    private $admin;

    public function fullt_navn() {
    return $this->fnavn . "" . $this->enavn;
    }

    protected function tilgang() {
    return $this->admin() ? "Admin" : "Medlem";
    }
    private function admin() {
    return $this->admin === true;
    }
    }

$b = new Bruker; // Lager objekt av klassen bruker 

$b->fnavn = "Kenny Le"; // Setter verdi til attributt 

echo $b->fnavn; // Skriver ut verdi 












?> 

