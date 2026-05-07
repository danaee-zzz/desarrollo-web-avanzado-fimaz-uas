<?php
    require_once("../models/torneosModels.php");
    class torneosControllers {
        private $model;
        public function __construct() {
            $this->model = new torneosModel();
        }
        public function saveTorneo ($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2,
            $premio3, $usuario, $contrasena) {
        $id = $this->model->insert($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2,
            $premio3, $usuario, $contrasena );
        return ($id!=false) ? header("Location: main.php") : header("Location: frmTorneos.php");

        }
    }
?>