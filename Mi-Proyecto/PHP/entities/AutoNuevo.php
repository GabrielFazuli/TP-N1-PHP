<?php

require_once 'Vehiculo.php';
require_once 'Radio.php';

class AutoNuevo extends Vehiculo {
    public function __construct($color, $marca, $modelo, $precio = null) {
        parent::__construct($color, $marca, $modelo, $precio);
        $this->radio = new Radio("Default", 100); 
    }
}