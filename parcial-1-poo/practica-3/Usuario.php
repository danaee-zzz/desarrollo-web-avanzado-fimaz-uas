<?php
class Usuario {
    private $nombre;
    private $correo;

    function __construct() {
        
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
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $this->correo = $correo;
        } else {
            echo "La dirección de correo '$correo' no es válida.";
        }
    }
}
?>