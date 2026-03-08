<?php
class Usuario {
    protected $nombre;
    protected $correo;
    function __construct($nombre,  $correo) {
        $this->nombre= $nombre;
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $this->correo = $correo;
        } else {
            throw new Exception("Correo electrónico no válido");
        }
    }
    function getNombre() {
        return $this-> nombre;
    }
    function getCorreo() {
        return $this-> correo;
    }

}
?>