<?php
    //Clase para conectarse a la base de datos
    class DataBase {
        private $host = "localhost";
        private $db = "mvc";
        private $user = "root";
        private $password = "851951";

        public function __construct() {

        }
        //Metodo para conexion a base de datos
        public function connect() {
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->password);
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }

?>