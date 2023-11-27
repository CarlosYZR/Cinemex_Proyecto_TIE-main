<?php

include("ConexionEmpleado.php");

$Usuario = $_POST['usuario'];
$Pass = $_POST['password'];

//GUARDANDO UN QUERY EN UNA VARIABLE PARA VALIDARLA DESPUES
$Validacion = "SELECT * FROM empleados WHERE usuario = '$Usuario' AND pass = '$Pass' ";

//SE REALIZA EL QUERY
$result = $Conexion->query($Validacion);

//DE VERIFICA QUE SEA VERDADERO LOS DATOS RECION INGRESADOS
if ($result->num_rows > 0){
?> 

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="../..\Estilos\estilos_empresa\StylesIndexEmpleado.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
    </head>
    <body>
        <!--ESTE ES EL HEADER-->
        <div class="header">

            <!--OPCION DE LISTAR USUARIOS-->
            <div class="list_users">
                <a href="ListarUsuarios.php">Listar Usuarios &ensp; | &ensp; </a>
            </div>

            <div class="ventas" >
                <a href="#">Vender</a>
            </div>

        </div>

    </body>
    </html>
   

<?php
}else{
    echo 'Usuario y/o contraseña no validos';
}

?>