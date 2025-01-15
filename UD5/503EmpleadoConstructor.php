<?php

class Empleado {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nom, string $ape, float $sue = 1000){
        $this->nombre=$nom;
        $this->apellidos=$ape;
        $this->sueldo=$sue;
    }

    public function setNombre(string $nom){
        $this->nombre=$nom;
    }

    public function setApellidos(string $ape){
        $this->apellidos=$ape;
    }

    public function setSueldo(float $sue){
        $this->sueldo=$sue;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getSueldo(){
        return $this->sueldo;
    }

    public function getNombreCompleto(){
        return $this->nombre." ".$this->apellidos;
    }

    public function debePagarImpuestos(){
        if($this->sueldo > 1500){
            return true;
        }else{
            return false;
        }   
    }

    //Telefonos

    public function anyadirTelefono(int $telefono){
        $array = $this->telefonos;
        array_push($array, $telefono);
        $this->telefonos=$array;
    }

    public function listarTelefonos(){
        $array = $this->telefonos;
        foreach ($array as $telefono) {
            echo "$telefono ";
        }
    }

    public function vaciarTelefonos(){
        $this->telefonos=[];
    }
}

?>