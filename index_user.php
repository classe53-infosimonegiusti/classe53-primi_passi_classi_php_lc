<?php

class User {

    public $nome;
    public $cognome;
    public $eta;
    public $email;

    //creo un costruttore che mi imposti nome, cognome ed eta...
    public function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function getFullName() {
        return $this->nome . ' ' . $this->cognome;
    }

    public function setEta($eta) {
        $this->eta = $eta;
    }

    public function getEta() {
        return $this->eta;
    }

    public function setNomeCognome($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

}

// inizializzo un istanza di user per mario
$mario = new User('Mario', 'Rossi', 50);

//imposto il nome, assegnando una stringa alla variabile nome
//$mario->nome = "Mario";  // inutile dopo aver creato il costruttore

//imposto il cognome, assegnando una stringa alla variabile cognome
//$mario->cognome = "Rossi";  // inutile dopo aver creato il costruttore

//imposto l'eta con una funzione setter
$mario->setEta(50);

//imposto l'email assegnando una stringa alla variabile email
$mario->email = 'mario@rossi.it';

//stampo il nome completo richiamando il metodo (funzione) getFullName
echo "<p>" . $mario->getFullName() . "</p>";

//stampo l'eta usando il metodo getEta
echo "<p>L'età è :" . $mario->getEta() . "</p>";


//creo un nuovo oggetto di tipo user per guido...
$guido = new User('Guido', 'Bianchi', 30);
$guido->nome = "Guido";   // inutile dopo aver creato il costruttore
$guido->cognome = "Bianchi";   // inutile dopo aver creato il costruttore
$guido->email = "guido@bianchi.it";

echo "<p>" . $guido->getFullName() . "</p>";
$guido->setNomeCognome('Umberto', 'Neri'); 
$guido->eta = 30;   // inutile dopo aver creato il costruttore
echo "<p>" . $guido->getFullName() . "</p>";
echo "<p>L'età è :" . $guido->getEta() . "</p>";

