<?php
class Bondi extends Vehiculo {
    private $radio;

    public function __construct($color, $marca, $modelo, $precio = null) {
        parent::__construct($color, $marca, $modelo, $precio);
    }

    public function agregarRadio($radio) {
        $this->radio = $radio;
    }

    public function getRadio() {
        return $this->radio;
    }
}
?>