<?php

require_once 'Vehiculo.php';

class Bondi extends Vehiculo {
    public function __construct($color, $marca, $modelo, $precio = null) {
        parent::__construct($color, $marca, $modelo, $precio);
    }
}
