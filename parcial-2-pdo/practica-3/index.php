<?php
    /**configuracion */
    $host = "localhost";
    $db = "escuela";
    $user = "root";
    $pass = "";
    $charset = "utf8mb4";
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    /*CONEXION PDO (con excepciones) */
    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]);
    } catch (PDOException $e) {
        die("Error de conexion: " . $e->getMessage());
    }
    /*Mensajes ara mostrar en pantalla*/
     $mensaje = "";
     $detalle = "";
     /*Procesar Formulario*/
     if ($_SERVER["REQUEST_METHOD"] === "POST") {
        //Datos del formulario
        $nombre = trim($_POST["nombre"] ?? "");
        $apellido = trim($_POST["apellido"] ?? "");
        $correo = trim($_POST["correo"] ?? "");
        //Checkbox: simular el error
        $simularError = isset($_POST["simular_error"]);
        // Validacion minima (didactica)
        if ($nombre === "" || $apellido === "" || $correo === "") {
            $mensaje = "⚠️ Todos los campos son obligatorios.";
        } else {
            try {
                //1) iniciar transaccion 
                $pdo->beginTransaction();

                //2) Insertar alumno (CREATE)
                $sqlAlumno = "INSERT INTO alumnos (nombre, apellido, correo)
                VALUES (:nombre, :apellido, :correo)";
                $stmtAlumno = $pdo->prepare($sqlAlumno);
                $stmtAlumno->execute([
                    "nombre" => $nombre,
                    "apellido" => $apellido,
                    "correo" => $correo
                ]);
                $idAlumno = (int)$pdo->lastInsertId();

                //3) Inserta log
                //Si se marca simular error forzams una falla controlada
                if ($simularError) {
                    //forzamos rollback con una excepcion intencional
                    throw new Exception("Simulacion de error activada: se fuerza rollback.");   
                } else {
                    $sqlLog = "INSERT INTO logs_alumnos (idAlumno, accion)
                    VALUES (:idAlumno, :accion)";
                    $stmtLog = $pdo->prepare($sqlLog);
                    $stmtLog->execute([
                        "idAlumno" => $idAlumno,
                        "accion" => "ALTA_ALUMNO"
                    ]);
                }
                $pdo->commit();
                $mensaje = "✅ Transaccion confirmada (COMMIT). Alumno registrado con ID: $idAlumno";
            } catch (Exception $e) {
                //Si algo falla, revertir TODO
                if ($pdo->inTransaction()) {
                    $pdo->rollBack();
                }
                $mensaje = "❌ Ocurrió un error. Trancción revertida (ROLLBACK).";
                $detalle = $e->getMessage();
            }
        }
     }


?>