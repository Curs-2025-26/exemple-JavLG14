<?php
require_once './../../vendor/autoload.php';
use App\Persona;

$persona1 = new Persona("Joan", "Garcia", 30);
$persona2 = new Persona("Maria", "Lopez"); 
echo $persona1 . "<br>";
echo $persona2 . "<br>";
echo $persona1->getNomComplet() . "<br>";
echo $persona1->estaJubilat() ? "Està jubilat" : "No està jubilat";
echo "<br>";
$persona2->setEdat(70);
echo $persona2->estaJubilat() ? "Està jubilat" : "No està jubilat";
?>