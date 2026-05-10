<?php
require_once(__DIR__ . "/../config/DataBase.php");
class torneosModel {
    public $PDO;
    public function __construct() {

        $connection = new DataBase();
        $this->PDO = $connection->connect();
    }

    public function insert($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3,
        $otroPremio, $usuario, $contrasena) {

        
        $contrasena = $this->passwordEncrypt($contrasena);
        $statement = $this->PDO->prepare("INSERT INTO torneos VALUES(null, :nombreTorneo, :organizador, :patrocinadores,
                :sede, :categoria, :premio1, :premio2, :premio3, :otroPremio, :usuario,  :contrasena)");

        $statement->bindParam(":nombreTorneo", $nombreTorneo);
        $statement->bindParam(":organizador", $organizador);
        $statement->bindParam(":patrocinadores", $patrocinadores);
        $statement->bindParam(":sede", $sede);
        $statement->bindParam(":categoria", $categoria);
        $statement->bindParam(":premio1", $premio1);
        $statement->bindParam(":premio2", $premio2);
        $statement->bindParam(":premio3", $premio3);
        $statement->bindParam(":otroPremio", $otroPremio);       
        $statement->bindParam(":usuario", $usuario);
        $statement->bindParam(":contrasena", $contrasena);

        return ($statement->execute())
            ? $this->PDO->lastInsertId()
            : false;
    }

    //El administrador creará el torneo y al usuario (organizador).
    //Por lo que al crear su password, buscaremos encriptarla por seguridad.
    //Utilizaremos el método password_hash y password_verify.

    public function passwordEncrypt($password)
    {
        $passwordEncrypted = password_hash($password, PASSWORD_DEFAULT);

        return $passwordEncrypted;
    }

    //Método para verificar si la password introducida
    //corresponde con la encriptada.
    public function passwordDecrypted(
        $passwordEncrypted,
        $passwordCandidate
    ) {

        //Con un shorthand if, verificamos si el password candidato es correcto.
        return (
            password_verify($passwordCandidate, $passwordEncrypted)
        )
            ? true
            : false;
    }
}

?>