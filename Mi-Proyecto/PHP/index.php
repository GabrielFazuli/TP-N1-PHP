<?php

require_once 'Radio.php';
require_once 'AutoClasico.php';
require_once 'AutoNuevo.php';
require_once 'Bondi.php';

$autoClasico = new AutoClasico("Rojo", "Ford", "Mustang");
$radio1 = new Radio("Sony", 200);

try {
    $autoClasico->agregarRadio($radio1);
    echo "<p>Radio agregado a Auto Clásico: " . $radio1->getMarca() . "</p>";

    $radio2 = new Radio("Panasonic", 150);
    $autoClasico->cambiarRadio($radio2);
    echo "<p>Radio cambiado en Auto Clásico: " . $radio2->getMarca() . "</p>";
} catch (Exception $e) {
    echo "<p>" . $e->getMessage() . "</p>";
}

$autoNuevo = new AutoNuevo("Azul", "Chevrolet", "Camaro");
echo "<p>Auto Nuevo creado con Radio: " . $autoNuevo->getRadio()->getMarca() . "</p>";

$bondi = new Bondi("Verde", "Mercedes", "Sprinter");
try {
    $bondi->agregarRadio($radio1);
    echo "<p>Radio agregado a Bondi: " . $radio1->getMarca() . "</p>";
} catch (Exception $e) {
    echo "<p>" . $e->getMessage() . "</p>";
}

?>