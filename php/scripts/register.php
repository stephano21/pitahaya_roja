<?php
if(isset($_POST['flag'])){
    include("functions.php");
    $flag= $_POST['flag'];
    if ($flag==1) {
        $name= $_POST['name'];
        $detail= $_POST['detail'];
        $price= $_POST['price'];
        $supplier= $_POST['supplier'];
        echo create_insumo($name,$detail,$price,$supplier);
    }else if ($flag==2){
        $name= $_POST['name'];
        $area= $_POST['area'];
        $capacidad= $_POST['capacidad'];
        echo create_lote($name,$area,$capacidad);
    }elseif ($flag==3) {
        $ruc =$_POST['ruc']; 
        $name =$_POST['name']; 
        $address =$_POST['address'];
        $phone =$_POST['phone'];
        $mail =$_POST['email'];
        echo create_proveedor($ruc,$name,$address,$phone,$mail);
    }
}
?>