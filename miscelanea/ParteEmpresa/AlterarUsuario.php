<?php

$ID = $_REQUEST['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../Estilos/estilos_empresa/login_empleados.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>

    <!--FORMULARIO DE REGISTRO-->
    <form action="EditarUsuario.php" method="post" class="form">
        <!--TITULO DEL FORMULARIO-->
        <h2 class="form_title">Editar Usuario</h2>

        <!--CONTENEDOR DEL FORMULARIO-->
        <div class="form_container">
            <!--DIV DEL NOMBRE-->
            <div class="form_group">
                <!--NOMBRE-->
                <input class="form_input" type="text" name="nombre" placeholder=" ">
                <label for="nombre" class="form_label">Nombre:</label>
                <span class="form_line"></span>
            </div>
            
            <!--DIV DEL TELEFONO-->
            <div class="form_group">
                <!--TELEFONO-->
                <input class="form_input" type="text" name="telefono" placeholder=" " maxlength="10">
                <label for="telefono" class="form_label">Telefono:</label>
                <span class="form_line"></span>
            </div>

            <!--DIV DEL CORREO-->
            <div class="form_group">
                <!--CORREO-->
                <input class="form_input" type="text" name="correo" placeholder=" ">
                <label for="correo" class="form_label">Correo:</label>
                <span class="form_line"></span>
            </div>
            
            <!--DIV DEL USUARIO-->
            <div class="form_group">
                <!--USUARIO-->
                <input class="form_input" type="text" name="usuario" placeholder=" ">
                <label for="usuario" class="form_label">Usuario:</label>
                <span class="form_line"></span>
            </div>
    
            <!--DIV DE LA CONTRASEÑA-->
            <div class="form_group">
                <!--CONTRASEÑA-->
                <input class="form_input" type="password" name="password" placeholder=" ">
                <label for="password" class="form_label">Contraseña:</label>
                <span class="form_line"></span>
            </div>

            <!--DIV DE LA FECHA DE NACIMIENTO-->
            <div class="form_group">
                <!--FECHA DE NACIMIENTO-->
                <input class="form_input" type="date" name="nacimiento">
                <span class="form_line"></span>
            </div>
    
            <input type="hidden" name="id" value="<?php echo $ID ?>">

            <!--BOTON-->
            <input type="submit" class="form_submit" value="Registrase">

        </div>
    </form>

</body>
</html>
