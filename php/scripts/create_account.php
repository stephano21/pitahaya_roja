<?php
if(isset($_POST['id']) && isset($_POST['password'])){
    require_once("conn.php");
    $res=[];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $validate=mysqli_query($conn,"SELECT * FROM usuarios WHERE cedula='$id'");
    if(mysqli_num_rows($validate)==0){
        if(  $sql=mysqli_query($conn,"INSERT INTO usuarios (cedula, nombre, apellido, correo, clave)VALUES('$id','$name','$lastname','$email','$password')")){
            $res=array(
                "class"=>"success",
                "message"=>"Usuario registrado exitosamente!"
            );
            $json=json_encode($res);
            echo $json;
        }else{
            $res=array(
                "class"=>"danger",
                "message"=>"No se pudo registrar, intente mas tarde!"
            );
            $json=json_encode($res);
            echo $json;
        }
    }else{
        $res=array(
            "class"=>"danger",
            "message"=>"Usuario ya registrado"
        );
        $json=json_encode($res);
        echo $json;
    }
    
}else{
    echo"<script>window.location='/'</script>";
}
?>
