<?php
require_once 'Usuario.php';

class Alumno extends Usuario{
    private $matricula;

    function __construct($nombre, $correo , $matricula)
    {   
        parent::__construct($nombre, $correo);
        $this->matricula = $matricula;
    }

    function getMatricula(){
        return $this->matricula;
    }

    function getRol(){
        return 'Alumno';
    }

}


?>