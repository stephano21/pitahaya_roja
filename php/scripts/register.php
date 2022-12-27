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
    }
}
?>