<?php 

require_once(__DIR__ . "/../../libs/Database.php");
require_once(__DIR__ . "/../../libs/modelo.php");
include_once("../../clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection();
$instructor = new Instructor($conection);
$lista = $instructor->getAll();

?>