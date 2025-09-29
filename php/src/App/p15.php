<?php
namespace App;
    class Persona {
        private const LIMIT_EDAT = 65;
        private $nom;
        private $cognom;
        private $edat;

        public function __construct($nom, $cognom, $edat = 25) {
            $this->nom = $nom;
            $this->cognom = $cognom;
            $this->edat = $edat;
        }

        public function getNom() {
            return $this->nom;
        }

        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function getCognom() {
            return $this->cognom;
        }

        public function setCognom($cognom) {
            $this->cognom = $cognom;
        }

        public function getEdat() {
            return $this->edat;
        }

        public function setEdat($edat) {
            if (is_int($edat) && $edat >= 0) {
                $this->edat = $edat;
            } else {
                throw new InvalidArgumentException("L'edat ha de ser un nombre enter no negatiu.");
            }
        }

        public function __toString() {
            return "Nom: " . $this->nom . ", Cognom: " . $this->cognom . ", Edat: " . $this->edat;
        }

        public function getNomComplet() {
            return "El nom es " . $this->nom . " " . $this->cognom;
        }

        public function estaJubilat(){
            return $this->edat >= self::LIMIT_EDAT;
        }
    }
?>