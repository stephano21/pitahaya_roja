<?php
/* set de fuciones para registros y consultas a la bae de datos */
function create_insumo($name,$detail,$price,$supplier) {
    require_once("conn.php");
    $res=[];
    $sql= mysqli_query($conn,"INSERT INTO insumos (nombre,descripcion,precio,id_proveedor)VALUES('$name','$detail','$price','$supplier')");
    if(!$sql){
        $res=array(
            "class"=>"danger",
            "message"=>"Ha ocurrido un error intenta mas tarde!"
        );
        return $json=json_encode($res);
    }
    $res=array(
        "class"=>"success",
        "message"=>"Registrado exitosamente!"
    );
    
    return $json=json_encode($res);
}
function create_proveedor($ruc,$name,$address,$phone,$email) {
    require_once("conn.php");
    $res=[];
    $sql= mysqli_query($conn,"INSERT INTO proveedor (ruc,nombre,direccion,telefono,correo)VALUES('$ruc','$name','$address','$phone','$email')");
    if(!$sql){
        $res=array(
            "class"=>"danger",
            "message"=>"Ha ocurrido un error intenta mas tarde!"
        );
        return $json=json_encode($res);
    }
    $res=array(
        "class"=>"success",
        "message"=>"Registrado exitosamente!"
    );
    
    return $json=json_encode($res);
}

function create_lote($name,$area, $capacidad){
    require_once("conn.php");
    $res=[];
    $sql= mysqli_query($conn,"INSERT INTO lotes (nombre_lote,hectareas,capacidad)VALUES('$name','$area','$capacidad')");
    if(!$sql){
        $res=array(
            "class"=>"danger",
            "message"=>"Ha ocurrido un error intenta mas tarde!"
        );
        return $json=json_encode($res);
    }
    $res=array(
        "class"=>"success",
        "message"=>"$name Registrado exitosamente!"
    );
    
    return $json=json_encode($res);
}
?> 