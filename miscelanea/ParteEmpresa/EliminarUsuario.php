<?php

include("ConexionEmpleado.php");

$EliminarUsuario = "ALTER TABLE usuarios DELETE WHERE id =".$_REQUEST["id"];
$QueryDelete = mysqli_query($Conexion, $EliminarUsuario);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>