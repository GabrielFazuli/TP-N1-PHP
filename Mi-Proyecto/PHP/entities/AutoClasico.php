<?php

require_once 'Vehiculo.php';

class AutoClasico extends Vehiculo {
    public function __construct($color, $marca, $modelo, $precio = null) {
        parent::__construct($color, $marca, $modelo, $precio);
    }
}
