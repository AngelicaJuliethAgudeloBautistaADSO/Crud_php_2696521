<?php

require_once(__DIR__."/../libs/Database.php");
require_once(__DIR__."/../libs/Modelo.php");
include_once("../clases/Aprendiz.php");


$database = new Database();
$conection = $database->getConection();
$aprendiz = new Aprendiz($conection);

$id = $_REQUEST['id'];

$nombre = isset($_POST['first_name']) ? 
($_POST['first_name'] != "" ? $_POST['first_name'] : false) :
false;

$Apellido= isset($_POST['last_name']) ? 
($_POST['last_name'] != "" ? $_POST['last_name'] : false) :
false;


$Fecha_Nacimiento = isset($_POST['birthdate']) ? 
($_POST['birthdate'] != "" ? $_POST['birthdate'] : false) :
false;


$correo= isset($_POST['email']) ? 
($_POST['email'] != "" ? $_POST['email'] : false) :
false;


$celular = isset($_POST['phone']) ? 
($_POST['phone'] != "" ? $_POST['phone'] : false) :
false;


$Cedula = isset($_POST['dni']) ? 
($_POST['dni'] != "" ? $_POST['dni'] : false) :
false;

$cuenta = isset($_POST['user_account']) ? ($_POST['user_account'] != "" ? $_POST['user_account'] : false) :'';

$promedio= isset($_POST['average']) ? ($_POST['average'] != "" ? $_POST['average'] : false) : '';

$aprendiz->update($id,[
    'first_name' => $nombre,
    'last_name' => $Apellido,
    'birthdate' => $Fecha_Nacimiento,
    'email' => $correo,
    'phone' => $celular,
    'dni' => $Cedula,
    'user_account' => $cuenta,
    'average' => $promedio   
]);

header('location: listar.php');

?>