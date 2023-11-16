<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR VEHICULO</h5>
                        <form action="../../CRUDP/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="estadoP" class="form-label">Estados</label>
                                <select class="form-select form-select-lg" name="estadoP" id="estadoP" required>
                                    <option selected disabled>Seleccione un estado</option>
                                    <?php
                                    include "../../config/conexion.php";

                                    $sql = $conexion->query("SELECT * FROM tbl_estado");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['idEstado'] . "'>" . $resultado['nombreEstado'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sucursalP" class="form-label">Sucursales</label>
                                <select class="form-select form-select-lg" name="sucursalP" id="sucursalP" required>
                                    <option selected disabled>Seleccione una sucursal</option>
                                    <?php
                                    include "../../config/conexion.php";

                                    $sql = $conexion->query("SELECT * FROM tbl_sucursal");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['idSucursal'] . "'>" . $resultado['nombreSucursal'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="marcaP" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="marcaP" name="marcaP" placeholder="Marca" required>
                            </div>
                            <div class="mb-3">
                                <label for="modeloP" class="form-label">Modelo</label>
                                <input type="text" class="form-control" id="modeloP" name="modeloP" placeholder="Modelo" required></input>
                            </div>
                            <div class="mb-3">
                                <label for="anioP" class="form-label">Año</label>
                                <input type="text" class="form-control" name="anioP" id="anioP" placeholder="Año" required>
                            </div>
                                <div class="mb-3">
                                <label for="vinP" class="form-label">VIN</label>
                                <input type="text" class="form-control" name="vinP" id="vinP" placeholder="VIN" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="precioP" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precioP" id="precioP" placeholder="Precio" required>
                            </div>
                            
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>