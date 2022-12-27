<?php
session_start();
//error_reporting(0);
include("../php/scripts/conn.php");
if (!isset($_SESSION['user'])) {
    //echo $_SESSION['user'];
    echo '<script> alert("Por favor, inicia sesión"); 
    window.location = "/"</script>';
}
$usuario = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("../php/partials/header.php") ?>
    <title>Inicio</title>
</head>

<body>
    <?php require_once("../php/partials/nav.php") ?>
    <div class="container">
        <div class="input-group mb-3"></div>
        <div class="input-group mb-3"></div>
        <div class="card pd-2 " style="width: 18rem;">
            <div class="card-header">
                Registro de insumos
            </div>
            <form id="insumo" method="post">
                <div class="card-body">
                    <div id="alert"></div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre</span>
                        <input type="text" id="i_name" class="form-control" placeholder="Nombre" name="name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Descripción</span>
                        <input type="text" id="i_detail" class="form-control" placeholder="Descripción" name="description" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Precio</span>
                        <input type="text" id="i_price" class="form-control" placeholder="Precio" name="price" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" id="i_supplier" aria-label="Default select example" name="supplier">
                            <option selected value="0">Proveedor</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <input type="submit" class="form-control btn btn-primary" aria-label="Username" aria-describedby="basic-addon1" value="Registrar">
                    </div>
                </div>
            </form>
        </div>

        <!-- lote -->
        <div class="card pd-2 " style="width: 18rem;">
            <div class="card-header">
                Registro de Lotes
            </div>
            <form id="lote" method="post">
                <div class="card-body">
                    <div id="alert"></div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Lote</span>
                        <input type="text" id="l_name" class="form-control" placeholder="Nombre del lote" name="name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Area lote</span>
                        <input type="text" id="l_area" class="form-control" placeholder="m2" name="area" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Capacidad</span>
                        <input type="text" id="l_max" class="form-control" id="password" placeholder="capacidad" name="description" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="submit" class="form-control btn btn-primary" aria-label="Username" aria-describedby="basic-addon1" value="Registrar">
                    </div>
                </div>
            </form>
        </div>
        <!-- tool -->
        <div class="card pd-2 " style="width: 18rem;">
            <div class="card-header">
                Registro de Herramientas</div>
            <form id="tool" method="post">
                <div class="card-body">
                    <div id="alert"></div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Herramienta</span>
                        <input type="text" id="h_name" class="form-control" placeholder="Nombre" name="name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Descipción</span>
                        <input type="text" id="h_description" class="form-control" placeholder="Descipción" name="description" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control btn btn-primary" aria-label="Username" aria-describedby="basic-addon1" value="Registrar">
                    </div>
                </div>
            </form>
        </div>
        <!-- supplier -->
        <div class="card pd-2 " style="width: 18rem;">
            <div class="card-header">
                Registro de Proveedores
            </div>
            <form id="supplier" method="post">
                <div class="card-body">
                    <div id="alert"></div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Ruc</span>
                        <input type="text" id="p_id" class="form-control" placeholder="Ruc" name="id" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre</span>
                        <input type="text" id="p_name" class="form-control" placeholder="Nombre" name="name" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dirección</span>
                        <input type="text" id="p_address" class="form-control" placeholder="Dirección" name="address" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Telefono</span>
                        <input type="text" id="p_phone" class="form-control" placeholder="Telefono" name="phone" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Correo</span>
                        <input type="email" id="p_email" class="form-control" placeholder="Correo" name="email" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="submit" class="form-control btn btn-primary" aria-label="Username" aria-describedby="basic-addon1" value="Registrar">
                    </div>
                </div>
            </form>
        </div>
        <!-- planing -->
        <div class="card pd-2 " style="width: 38rem;">
            <div class="card-header">
                Planificacion
            </div>
            <form id="planing" method="post">
                <div class="card-body">
                    <div id="alert"></div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre</span>
                        <input type="text" id="p_id" class="form-control" placeholder="Nombre de planificación" name="id" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Fecha de inicio</span>
                        <input type="date" id="pl_inicio" class="form-control" name="f_inicio" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Fecha de fin</span>
                        <input type="date" id="p_address" class="form-control" name="f_fin" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" id="tool" aria-label="Default select example" name="tool">
                            <option selected value="0">Herramienta</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" id="pt_insumo" aria-label="Default select example" name="insumo">
                            <option selected value="0">Insumos</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" id="pt_lote" aria-label="Default select example" name="lote">
                            <option selected value="0">Lotes</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" id="pt_workers" aria-label="Default select example" name="workers">
                            <option selected value="0">Trabajdores</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control btn btn-primary" aria-label="Username" aria-describedby="basic-addon1" value="Registrar">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../static/js/bootstrap.bundle.min.js"></script>
    <script src="../static/jquery/jquery-3.6.0.min.js"></script>
    <script src="../static/js/scripts/main.js" type="module"></script>
</body>

</html>