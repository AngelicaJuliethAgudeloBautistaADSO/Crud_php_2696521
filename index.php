<?php

require_once(__DIR__ . "/libs/Database.php");
require_once(__DIR__ . "/libs/modelo.php");
include_once("clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection();
$aprendiz = new Aprendiz($conection);



// $aprendiz->store([
//     'firts_name' => 'Paola',
//     'last_name' => 'Lambis',
//     'email' => 'paola21@gmail.com',
//     'phone' => '3202974010',
//     'dni' => 109221122
// ]);

// $results = $aprendiz->getAll();
// // $results = $aprendiz->getById(5);

// var_dump($results);

// $result = $aprendiz->getById(4
// );
// echo"<pre>";
// print_r($result);
// echo"<pre>";

$aprendiz->update(4, [
    'addres' => 'Sena Giron',
    'user_account' => 2696521
]);

$aprendiz->delete(2);