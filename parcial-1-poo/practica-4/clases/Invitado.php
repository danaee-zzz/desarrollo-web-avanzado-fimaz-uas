<?php
require_once 'Usuario.php';

class Invitado extends Usuario {
    private $empresa;

    function __construct($nombre, $correo, $empresa)
    {
        parent::__construct($nombre, $correo);
        $this->empresa = $empresa;
    }


    function getEmpresa(){
        return $this->empresa;
    }

    function getRol(){
        return 'Invitado';
    }

}

?>