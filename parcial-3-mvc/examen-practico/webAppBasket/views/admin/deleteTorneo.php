<?php
    require_once("../../controllers/torneosControllers.php");
    $objTorneosController = new torneosControllers();
    $objTorneosController->delete($_GET['id']);
?>