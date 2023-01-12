<?php
session_start();
if(isset($_POST['user']) && isset($_POST['password'])){
    require_once("conn.php");
    $user = $_POST['user'];
    $password = $_POST['password'];
    $sql=mysqli_query($conn,"SELECT * FROM usuarios WHERE cedula='$user'");
    if(mysqli_num_rows($sql)==1){
        $rows=mysqli_fetch_array($sql);
        if ($rows['clave']==$password){
            $_SESSION['user']=$user;
            echo TRUE;
        }else{
            echo "Usuario o contrseña incorrecto!";
        }
    }else{
    echo"Usuario no encontrado!";}
}else{
    echo"<script>window.location='/'</script>";
}
?>
