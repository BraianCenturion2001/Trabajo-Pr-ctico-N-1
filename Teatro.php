<?php

class Teatro{
    private $nombre;
    private $direccion;
    private $arregloFunciones;

    public function __construct($name, $dire, $nf1, $nf2, $nf3, $nf4, $pf1, $pf2, $pf3, $pf4){
        $this->nombre = $name;
        $this->direccion = $dire;
        $this->arregloFunciones = array();
        $this->arregloFunciones[1] = array(
            "nombre" => $nf1,
            "precio" => $pf1
        );
        $this->arregloFunciones[2] = array(
            "nombre" => $nf2,
            "precio" => $pf2
        );
        $this->arregloFunciones[3] = array(
            "nombre" => $nf3,
            "precio" => $pf3
        );
        $this->arregloFunciones[4] = array(
            "nombre" => $nf4,
            "precio" => $pf4
        );
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getArregloFunciones(){
        return $this->arregloFunciones;
    }

    public function setNombre($n){
        $this->nombre = $n;
    }
    public function setDireccion($d){
        $this->direccion = $d;
    }
    public function setArregloFuncionesNombre($id, $nombre){
        $this->arregloFunciones[$id]["nombre"] = $nombre;
    }
    public function setArregloFuncionesPrecio($id, $precio){
        $this->arregloFunciones[$id]["precio"] = $precio;
    }

    public function cargarNombre(){
        echo "NOMBRE ACTUAL DEL TEATRO: ".$this->getNombre();
    }
    public function cargarDireccion(){
        echo "ACTUAL DIRECCIÓN DEL TEATRO: ".$this->getDireccion();
    }
    public function verNombreFuncion($id){
        $arreglo = $this->getArregloFunciones();
        $respuesta = "EL NOMBRE DE LA FUNCIÓN ".$id." ES: ".$arreglo[$id]["nombre"]."\n";
        return $respuesta;
    }
    public function verPrecioFuncion($id){
        $arreglo = $this->getArregloFunciones();
        $respuesta = "EL VALOR DE LA FUNCIÓN ".$id." ES: ".$arreglo[$id]["precio"]."\n";
        return $respuesta;
    }

    public function cambiarNombre($new_name){
        $this->setNombre($new_name);
    }
    public function cambiarDireccion($new_dire){
        $this->setNombre($new_dire);
    }
    public function cambiarNombreFuncion($id, $new_namef){
        $this->setArregloFuncionesNombre($id, $new_namef);
    }
    public function cambiarPrecioFuncion($id, $new_pf){
        $this->setArregloFuncionesPrecio($id, $new_pf);
    }
}

?>