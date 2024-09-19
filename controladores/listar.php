<?php 

require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/modelo.php");
include_once("../clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection();
$aprendiz = new Aprendiz($conection);
$lista = $aprendiz->getAll();

?>

<table border="1">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>fecha_Nacimiento</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Dni</th>
    
    </thead>
    <tbody>
        <?php
        for ($i=0; $i < count($lista); $i++){
        ?>
        <tr>
            <td><?= $lista [$i] ['id']?></td>
            <td><?= $lista [$i] ['first_name']?></td>
            <td><?= $lista [$i] ['last_name']?></td>
            <td><?= $lista [$i] ['birthdate']?></td>
            <td><?= $lista [$i] ['email']?></td>
            <td><?= $lista [$i] ['phone']?></td>
            <td><?= $lista [$i] ['dni']?></td>
            <td>
                <div>
                    <a href="editar.php?id=<?= $lista [$i] ['id']?>">Editar</a>
                </div>
            </td>

        </tr>

        <?php } ?>
    </tbody>
</table>


<?php

$lista = $aprendiz->getAll();
