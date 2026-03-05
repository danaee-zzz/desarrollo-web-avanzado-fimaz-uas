<?php
class Usuario {
    private $nombre;
    private $correo;

    function __construct($nombre,  $correo) {
        $this->nombre= $nombre;
        $this->validarCorreo($correo);
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
    function validarCorreo($correo) {
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $this->correo = $correo;
        } else {
            throw new Exception("Correo electrónico no válido");
        }
    }
}
?>