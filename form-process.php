<!DOCTYPE html>
<html>
<head> 
  <title>Formulario</title>
</head>
<body>
  <?php
    $server = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bd = "taller mecanico";

    $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) 
    or die ("Error en la conexion");

    $Nombre_completo = $_POST['Nombre_completo'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Modelo = $_POST['Modelo'];
    $Ano = $_POST['Ano'];
    $Servicio = $_POST['Servicio'];

    $insertar = "INSERT into citas values ('$Nombre_completo', '$Telefono', '$Direccion', '$Modelo', '$Ano', '$Servicio')";
    $resultado = mysqli_query($conexion, $insertar)
    or die ("Error al insertar datos. :) ");

    mysqli_close($conexion);
    echo "Datos insertados correctamente. "

    
   ?>
</body>
</html>