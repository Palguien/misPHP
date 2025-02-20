<?php
//Clase Cuenta
class Cuenta{
    private $titular;
    private $saldo;
    private $cantidad;

    public function __construct($titular, $saldo, $cantidad){
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->cantidad = $cantidad;
    }

    //Getters y setters
    public function getTitular(): string {
        return $this->titular;
    }

    public function setTitular(string $nombre): void {
        $this->titular = $nombre;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void {
        $this->saldo = $saldo;
    }

    public function getCantidad(): float {
        return $this->cantidad;
    }

    public function setCantidad(float $cantidad): void {
        $this->cantidad = $cantidad;
    }
}

?>
