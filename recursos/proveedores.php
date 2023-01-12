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
    <title>Proveedores | Recursos</title>
</head>

<body>
    <?php require_once("../php/partials/nav.php") ?>
    <div class="container">
        <div class="input-group mb-3"></div>
        <div class="input-group mb-3"></div>
        <div class="input-group mb-3"></div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="/menu/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                        </svg>
                    </a>
                </li>
                <li class="page-item  "><a class="page-link" href="/recursos/">Recursos</a></li>
                <li class="page-item"><a class="page-link" href="/recursos/insumos.php">Insumos</a></li>
                <li class="page-item "><a class="page-link" href="/recursos/herramientas.php">Herramientas</a></li>
                <li class="page-item active"><a class="page-link" href="/recursos/proveedores.php">Proveedores</a></li>
            </ul>
        </nav>
        <div class="row">
            <div class="col-sm-4">
                <div class="card pd-2 " style="width: 18rem;">
                    <div class="card-header">
                        Registro de Proveedores</div>
                    <form id="supplier" method="post">
                        <div class="card-body">
                            <div id="alert_s"></div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Ruc</span>
                                <input type="text" id="id" class="form-control" placeholder="Ruc" name="name" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nombre</span>
                                <input type="text" id="p_name" class="form-control" placeholder="Nombre" name="description" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Dirección</span>
                                <input type="text" id="p_address" class="form-control" placeholder="Dirección" name="description" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Teléfono</span>
                                <input type="text" id="p_phone" class="form-control" placeholder="Teléfono" name="description" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Correo</span>
                                <input type="text" id="p_email" class="form-control" placeholder="Teléfono" name="description" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="submit" class="form-control btn btn-primary" aria-label="Username" aria-describedby="basic-addon1" value="Registrar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../static/js/bootstrap.bundle.min.js"></script>
    <script src="../static/jquery/jquery-3.6.0.min.js"></script>
    <script src="../static/js/scripts/main.js" type="module"></script>
</body>

</html>