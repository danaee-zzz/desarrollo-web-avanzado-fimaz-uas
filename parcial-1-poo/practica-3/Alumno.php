<?php
require_once 'Usuario.php';
class Alumno extends Usuario {
    private $matricula;
    function getMatricula() {
        return $this->matricula;
    }
    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    function getRol() {
        return "Alumno";
    }
}
?>