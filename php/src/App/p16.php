<?php
require_once 'p15.php';

class Empleados extends Persona {
    //sin revisar!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    private $puesto;
    private $salario;

    public function __construct($nom, $cognom, $edat = 25, $puesto = "Empleado", $salario = 30000) {
        parent::__construct($nom, $cognom, $edat);
        $this->puesto = $puesto;
        $this->salario = $salario;
    }

    public function getPuesto() {
        return $this->puesto;
    }

    public function setPuesto($puesto) {
        $this->puesto = $puesto;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        if (is_numeric($salario) && $salario >= 0) {
            $this->salario = $salario;
        } else {
            throw new InvalidArgumentException("El salari ha de ser un nombre no negatiu.");
        }
    }

    public function __toString() {
        return parent::__toString() . ", Puesto: " . $this->puesto . ", Salario: " . $this->salario;
    }

    public function toHTML(){
        return "<p>" . htmlspecialchars($this->__toString()) . "</p>";
    }
}