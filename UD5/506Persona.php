<?php

class Persona{
    private string $nombre;
    private string $apellidos;

    public function __construct(string $nom, string $ape){
        $this->nombre=$nom;
        $this->apellidos=$ape;
    }

    public function setNombre(string $nom){
        $this->nombre=$nom;
    }

    public function setApellidos(string $ape){
        $this->apellidos=$ape;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getNombreCompleto(){
        return $this->nombre." ".$this->apellidos;
    }
}

class Empleado extends Persona {

    private static $sueldoTope = 1500;

    private float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nom, string $ape, float $sue = 1000){
        parent::__construct($nom,$ape);
        $this->sueldo=$sue;
    }

    public function setSueldo(float $sue){
        $this->sueldo=$sue;
    }

    public function getSueldo(){
        return $this->sueldo;
    }

    public static function getSueldoTope(){
        return self::$sueldoTope;
    }
    public static function setSueldoTope(float $sue){
        self::$sueldoTope=$sue;
    }


    public function debePagarImpuestos(){
        if($this->sueldo > Empleado::SUELDO_TOPE){
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