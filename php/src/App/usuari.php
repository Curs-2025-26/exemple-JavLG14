<?php
namespace App;
class usuari {
    private $nom;
    private $email;

    public function __construct($nom, $email) {
        $this->nom = $nom;
        $this->email = $email;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            //throw new InvalidArgumentException("L'email no és vàlid.");
        }
    }

    public function __toString() {
        return "Nom: " . $this->nom . ", Email: " . $this->email;
    }

    public function saluda() {
        return "Hola, sóc " . $this->nom . " i el meu email és " . $this->email;
    }
}