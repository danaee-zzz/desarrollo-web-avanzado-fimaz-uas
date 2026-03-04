<?php
class Usuario {
    private $nombre;
    private $correo;
    
    function __construct($nombre, $correo) 
    {
        $this->nombre=$nombre;
        $this->correo=$correo;
    }
    function getNombre() {
        return $this->nombre;
    }
    function getCorreo() {
        return $this->correo;
    }
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function setCorreo($correo) {
        $this->correo = $correo;
    }
}
?>