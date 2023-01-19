import { alert_login, input_only_numbers, alerts } from "./login.js";
/* login */
$(function () {
    $("#inicio_s").submit((e) => {
        let user = $("#user").val();
        let password = $("#password").val();
        if (user == '' || password == '') {
            alert_login("Rellene todos los campos!");
        } else {
            $.ajax({
                url: "php/scripts/login.php",
                type: "POST",
                data: { user, password },
                success: function (response) {
                    if (response == 1) {
                        window.location = "menu";
                    } else {
                        alert_login(response)
                    }
                }
            })
        }
        e.preventDefault();
    });
    $("#user").keyup(function (e) {
        input_only_numbers("user")
    })
    $("#create").submit((e) => {
        let id = $("#id").val();
        let name = $("#name").val();
        let lastname = $("#lastname").val();
        let email = $("#email").val();
        let password = $("#password").val();
        if (id == '' || password == '' || name == '' || lastname == '' || email == '') {
            alert_login("Rellene todos los campos!");
        } else {
            $.ajax({
                url: "php/scripts/create_account.php",
                type: "POST",
                data: { id, name, lastname, email, password },
                success: function (response) {
                    console.log(response);
                    console.log(response)
                    let data = JSON.parse(response);
                    if (data.class != "danger") {
                        alerts(data.class, data.message,"alert");
                        $("#create")[0].reset();
                    }
                }
            })
        }
        e.preventDefault();
    });
    $("#id").keyup(function (e) {
        console.log()
        input_only_numbers("id")
    })
    $("#p_phone").keyup(function (e) {
        console.log()
        input_only_numbers("p_phone")
    })
    /* Register fuctions */
    $("#insumo").submit((e) => {
        let flag = 1;
        let name = $("#i_name").val();
        let detail = $("#i_detail").val();
        let price = $("#i_price").val();
        let supplier = $("#i_supplier").val();
        $.ajax({
            url: "../php/scripts/register.php",
            type: "POST",
            data: { flag, name, detail, price, supplier, },
            success: function (response) {
                let data = JSON.parse(response);
                console.log(data.message)
                alerts(data.class, data.message,"alert_i");

            }
        })
        e.preventDefault()
    });

    $("#lote").submit((e) => {
        let flag = 2;
        let name = $("#l_name").val();
        let area = $("#l_area").val();
        let capacidad = $("#l_max").val();
        $.ajax({
            url: "../php/scripts/register.php",
            type: "POST",
            data: { flag, name, area, capacidad, },
            success: function (response) {
                console.log(response)
            }
        })
        e.preventDefault()
    });

    $("#supplier").submit((e) => {
        let flag = 3;
        let ruc = $("#id").val();
        let name = $("#p_name").val();
        let address = $("#p_address").val();
        let phone = $("#p_phone").val();
        let email = $("#p_email").val();
        console.log(email)
        console.log(address)
        $.ajax({
            url: "../php/scripts/register.php",
            type: "POST",
            data: { flag,ruc, ruc,name,address,phone,email, },
            success: function (response) {
                console.log(response);
                let data = JSON.parse(response);
                console.log(data.message)
                alerts(data.class, data.message,"alert_s");

            }
        })
        e.preventDefault()
    });
})