import {alert_login, input_only_numbers,alerts } from "./login.js";
/* login */
$(function(){
    $("#inicio_s").submit((e) => {
        let user=$("#user").val() ;
        let password=$("#password").val() ;
        if (user==''|| password==''){
            alert_login("Rellene todos los campos!");
        }else{
            $.ajax({
                url:"php/scripts/login.php",
                type:"POST",
                data:{user,password},
                success: function(response){
                    if (response==1){
                        window.location="menu";
                    }else{
                        alert_login(response)
                    }
                }
            })
        }
        e.preventDefault();
    });
    $("#user").keyup(function(e){
        input_only_numbers()
    })
    /* Register fuctions */
    $("#insumo").submit((e) => {
        let flag = 1;
        let name= $("#i_name").val();
        let detail= $("#i_detail").val();
        let price= $("#i_price").val();
        let supplier= $("#i_supplier").val();
        $.ajax({
            url:"../php/scripts/register.php",
            type:"POST",
            data:{flag,name,detail,price,supplier,},
            success: function(response){
                let data=JSON.parse(response);
                console.log(data.message)
                alerts(data.class, data.message);

            }
        })
        e.preventDefault()
    });
    
    $("#lote").submit((e) => {
        let flag = 2;
        let name= $("#l_name").val();
        let area= $("#l_area").val();
        let capacidad= $("#l_max").val();
        $.ajax({
            url:"../php/scripts/register.php",
            type:"POST",
            data:{flag,name,area,capacidad,},
            success: function(response){
                console.log(response)
            }
        })
        e.preventDefault()
    });
})