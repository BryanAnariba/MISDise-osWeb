<!DOCTYPE html>
<html lang="en">
<?php
    include("Conexion.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar Usuarios A La Base de Datos</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>

<body>
    <form action="index.html" class="form-box animated fadeInUp">
        <h1 class="form-title">Datos Persona</h1>
        <input type="text" placeholder="Nombre Usuario" autofocus>
        <input type="text" placeholder="Apellido Usuario" autofocus>
        <input type="text" placeholder="Edad Usuario" autofocus>
        <input type="text" placeholder="Carrera Usuario" autofocus>
        <!--input type="password" placeholder="Password"-->
        <button type="submit">
            Insertar Registro
        </button>
    </form>
</body>

</html>