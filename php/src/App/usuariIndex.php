<?php
require_once './../../vendor/autoload.php';
use App\usuari;
$usuari1 = new usuari("Joan", "email@email.com");
echo $usuari1->saluda();