<?php 
ini_set('display_errors', 1); 

require_once '../entities/Vehiculo.php';
echo "Archivo Vehiculo.php cargado correctamente.<br>";

require_once '../entities/AutoClasico.php';
echo "Archivo AutoClasico.php cargado correctamente.<br>";

require_once '../entities/AutoNuevo.php';
echo "Archivo AutoNuevo.php cargado correctamente.<br>";

require_once '../entities/Bondi.php';
echo "Archivo Bondi.php cargado correctamente.<br>";

require_once '../entities/Radio.php';
echo "Archivo Radio.php cargado correctamente.<br>";


$autoClasico = new AutoClasico("Rojo", "Ford", "Mustang", 20000);
$autoNuevo = new AutoNuevo("Azul", "Toyota", "Corolla", 25000);
$bondi = new Bondi("Blanco", "Mercedes", "Sprinter", 50000);

$radio = new Radio("Sony", 150);

$autoClasico->agregarRadio($radio);

echo "Radio en AutoClasico: " . $autoClasico->getRadio()->getMarca() . "<br>";

$autoNuevo->cambiarRadio(new Radio("Pioneer", 200));
echo "Radio cambiada en AutoNuevo: " . $autoNuevo->getRadio()->getMarca() . "<br>";

echo "<h3>Detalles de los Vehículos y Radio:</h3>";
echo "Auto Clásico - Marca: " . $autoClasico->getMarca() . ", Modelo: " . $autoClasico->getModelo() . ", Color: " . $autoClasico->getColor() . ", Precio: $" . $autoClasico->getPrecio() . "<br>";
echo "Auto Nuevo - Marca: " . $autoNuevo->getMarca() . ", Modelo: " . $autoNuevo->getModelo() . ", Color: " . $autoNuevo->getColor() . ", Precio: $" . $autoNuevo->getPrecio() . "<br>";
echo "Bondi - Marca: " . $bondi->getMarca() . ", Modelo: " . $bondi->getModelo() . ", Color: " . $bondi->getColor() . ", Precio: $" . $bondi->getPrecio() . "<br>";
echo "Radio - Marca: " . $radio->getMarca() . ", Potencia: " . $radio->getPotencia() . "W<br>";

?>