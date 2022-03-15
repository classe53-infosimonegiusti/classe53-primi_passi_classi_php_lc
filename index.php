<?php

class Automobile {

    public $marca;
    public $modello;
    public $cilindrata;
    public $alimentazione;
    public $velocita = 0;

    public function __construct($marca, $modello) {
        $this->marca = $marca;
        $this->modello = $modello;
    }

    public function setCilindrata($cilindrata) {

        if (is_numeric($cilindrata) && $cilindrata > 0) {
            $this->cilindrata = $cilindrata;
        } else {
            echo "Valore non valido!";
        }
        
    }

    public function accelera($incremento) {
        if (is_numeric($incremento)) {
            $this->velocita += $incremento;
        } else {
            echo "Valore non valido!";
        }
    }

    public function frena() {

        $this->velocita -= 5;

        if ($this->velocita < 0) {
            $this->velocita = 0;
        }

    }

}


$fiatPanda = new Automobile('Fiat', 'Panda');
$fiatPanda->setCilindrata(1300);
$fiatPanda->accelera(30);
$fiatPanda->accelera('prova');
echo $fiatPanda->velocita;

