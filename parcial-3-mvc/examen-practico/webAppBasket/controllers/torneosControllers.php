<?php
    require_once(__DIR__ . "/../models/torneosModels.php");
    class torneosControllers {
        private $model;
        public function __construct() {
            $this->model = new torneosModel();
        }
        public function saveTorneo ($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2,
            $premio3, $otroPremio, $usuario, $contrasena) {
        $id = $this->model->insert($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2,
            $premio3, $otroPremio, $usuario, $contrasena );

        return ($id!=false) ? header("Location: admin.php") : header("Location: frmTorneos.php");

        }
    //metodo read del modelo del torneo
    public function readTorneo() {
        return ($this->model->read()) ? $this->model->read() : false;
    }
    }
?>