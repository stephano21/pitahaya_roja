import {alert_login, input_only_numbers } from "./login.js";
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
})