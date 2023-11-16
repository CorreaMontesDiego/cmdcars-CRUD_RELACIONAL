<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $estado = $_POST['estadoU'];
    $sucursal = $_POST['sucursalU'];
    $marca = $_POST['marcaU'];
    $modelo = $_POST['modeloU'];
    $anio = $_POST['anioU'];
    $vin = $_POST['vinU'];
    $precio = $_POST['precioU'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE tbl_vehiculo SET estadoid = '$estado',sucursalid = '$sucursal',marca = '$marca',modelo = '$modelo', anio = '$anio', vin = '$vin', precio = '$precio' WHERE idVehiculo = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
