<?php
class AutoNuevo extends Vehiculo {
    private $radio;

    public function __construct($color, $marca, $modelo, $precio = null) {
        parent::__construct($color, $marca, $modelo, $precio);
        $this->radio = new Radio("Sony", 150);
    }

    public function cambiarRadio($radio) {
        $this->radio = $radio;
    }

    public function getRadio() {
        return $this->radio;
    }
}
?>