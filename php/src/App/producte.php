<?php
namespace App;
use InvalidArgumentException;

//clase producte amb nom y preu
class Producte {
    private $nom;
    private $preu;
    public function __construct($nom, $preu) {
        $this->nom = $nom;
        $this->preu = $preu;
    }
    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function getPreu() {
        return $this->preu;
    }
    public function setPreu($preu) {
        if (is_numeric($preu) && $preu >= 0) {
            $this->preu = $preu;
        } else {
            throw new InvalidArgumentException("El preu ha de ser un nombre no negatiu.");
        }
    }
    public function __toString() {
        return $this->nom . " - " . $this->preu;
    }
}