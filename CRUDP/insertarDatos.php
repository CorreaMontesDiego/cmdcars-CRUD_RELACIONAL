<?php

include "../config/conexion.php";
$estado = $_POST['estadoP'];
$sucursal = $_POST['sucursalP'];
$marca = $_POST['marcaP'];
$modelo = $_POST['modeloP'];
$anio = $_POST['anioP'];
$vin = $_POST['vinP'];
$precio = $_POST['precioP'];

$sql = "INSERT INTO tbl_vehiculo(estadoid,sucursalid,marca,modelo,anio,vin,precio)
    VALUES ('$estado','$sucursal','$marca','$modelo','$anio','$vin','$precio')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
