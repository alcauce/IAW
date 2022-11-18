<?php

//información que recibimos

$nombre='no name';
$apellidos='no apellidos';
$sexo="H";

var_dump($_POST);
$nombre=$_POST['nombre'];
$apellidos=$_POST ['apellidos'];
if (isset($_POST['sexo'])) {
    $sexo=$_POST['sexo'];
}
//saludamos al nombre que nos ha dado
if ($sexo=='H'){
    $saludo='Hola señor';
}
elseif ($edad>20) {
    $saludo = 'Hola señora';
}
 else {
    $saludo= "Hola señorita";
}

