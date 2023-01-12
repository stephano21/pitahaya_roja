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
        <div class="row">
            <h2>Lotes</h2>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-success"></a></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-success"></a></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-success"></a></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-warning"></a></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-danger"></a></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-warning"></a></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-success"></a></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-success"></a></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-success"></a></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-success"></a></p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card pd-2 " style="width: 16rem; margin:15px 20px">
                    <div class="card-header">
                        Lote 1
                    </div>
                    <div class="card-body">
                        <p></p><b>Plantas: </b>500</p>
                        <p><b>Estado </b> <a class="btn btn-success"></a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../static/js/bootstrap.bundle.min.js"></script>
    <script src="../static/jquery/jquery-3.6.0.min.js"></script>
    <script src="../static/js/scripts/main.js" type="module"></script>
</body>

</html>