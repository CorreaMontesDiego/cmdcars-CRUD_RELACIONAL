<?php

include "../config/conexion.php";

$nombreM = $_POST['nombreM'];

$sql = "INSERT INTO tbl_estado(nombreEstado)
    VALUES ('$nombreM')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
