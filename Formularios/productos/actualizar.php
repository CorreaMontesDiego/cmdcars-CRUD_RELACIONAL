<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">VEHICULOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">SUCURSALES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">ESTADOS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR VEHICULO</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM tbl_vehiculo WHERE idVehiculo =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['idVehiculo'] ?>">

                            <!-- TRAER DATOS ESTADO -->
                            <div class="mb-3">
                                <label for="estadoU" class="form-label">Estados</label>
                                <select class="form-select form-select-lg" name="estadoU" id="estadoU">
                                    <option selected disabled>Seleccione un estado</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql1 = "SELECT * FROM tbl_estado WHERE idEstado=" . $row['estadoid'];
                                    $resultado1 = $conexion->query($sql1);
                                    $row1 = $resultado1->fetch_assoc();

                                    echo "<option selected value='" . $row1['idEstado'] . "'>" . $row1['nombreEstado'] . "</option>";

                                    $sql2 = "SELECT * FROM tbl_estado";
                                    $resultado2 = $conexion->query($sql2);

                                    while ($fila = $resultado2->fetch_array()) {
                                        if ($fila['idEstado'] !== $row1['idEstado']) {
                                            echo "<option value='" . $fila['idEstado'] . "'>" . $fila['nombreEstado'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="sucursalU" class="form-label">Sucursal</label>
                                <select class="form-select form-select-lg" name="sucursalU" id="sucursalU">
                                    <option selected disabled>Seleccione una sucursal</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql3 = "SELECT * FROM tbl_sucursal WHERE idSucursal=" . $row['sucursalid'];
                                    $resultado3 = $conexion->query($sql3);

                                    $row3 = $resultado3->fetch_assoc();

                                    echo "<option selected value='" . $row3['idSucursal'] . "'>" . $row3['nombreSucursal'] . "</option>";

                                    $sql4 = "SELECT * FROM tbl_sucursal";
                                    $resultado4 = $conexion->query($sql4);

                                    while ($fila = $resultado4->fetch_array()) {
                                        if ($fila['idSucursal'] !== $row3['idSucursal']) {
                                            echo "<option value='" . $fila['idSucursal'] . "'>" . $fila['nombreSucursal'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="marcaU" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="marcaU" name="marcaU" placeholder="Marca" value="<?php echo $row['marca'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="modeloU" class="form-label">Modelo</label>
                                <input type="text" class="form-control" name="modeloU" id="modeloU" placeholder="Modelo" value="<?php echo $row['modelo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="anioU" class="form-label">Año</label>
                                <input type="text" class="form-control" name="anioU" id="anioU" placeholder="Año" value="<?php echo $row['anio'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="vinU" class="form-label">VIN</label>
                                <input type="text" class="form-control" name="vinU" id="vinU" placeholder="VIN" value="<?php echo $row['vin'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="precioU" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precioU" id="precioU" placeholder="VIN" value="<?php echo $row['precio'] ?>">
                            </div>

                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>