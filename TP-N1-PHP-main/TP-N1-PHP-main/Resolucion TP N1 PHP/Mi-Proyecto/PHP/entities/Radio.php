<?php
class Radio {
    private $marca;
    private $potencia;

    public function __construct($marca, $potencia) {
        $this->marca = $marca;
        $this->potencia = $potencia;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getPotencia() {
        return $this->potencia;
    }
}
?>