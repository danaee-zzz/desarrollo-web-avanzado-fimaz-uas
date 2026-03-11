<?php

class Usuario
{
    protected $nombre;
    protected $correo;

    function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Correo no valido: ".$correo."", 1);
        }

        $this->correo = $correo;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getCorreo(){
        return $this->correo;
    }
}
