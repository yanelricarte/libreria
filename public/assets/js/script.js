
function contactarse() {
    $("#nombre_id").removeClass("error");
    var nombre = $("#nombre_id").val();
    var apellido = $("#apellido_id").val();
    var email = $("#email_id").val();
    var consulta = $("#consulta_id").val();
    //Modificar el value del elemento
    //var consulta = $("#consulta_id").val("Consulta test");
    console.log(nombre, apellido, email, consulta);
    if (nombre == "") {
        //Consulto dato
        //var x = $("#error_nombre").html()
        $("#error_nombre").html("El nombre es obligatorio")
        $("#nombre_id").addClass("error");
    }
    console.log(nombre, apellido, email, consulta)
}
function login(){
    var url = $("#formulario").attr("action");
    var email = $("#email").val()
    var password = $("#clave").val()
    $.ajax({
        url:url,
        type:"POST",
        data:"email="+email+"&clave="+password,

        success:function(response){
            console.log(response)
            $("#container").html(response);
        }
    })
}
function loginJson(){
    var url = $("#formulario").attr("action");
    var email = $("#email").val()
    var password = $("#clave").val()
    $.ajax({
        url:url,
        type:"POST",
        data:"email="+email+"&clave="+password,
        dataType:"json",
        success:function(response){
            console.log(response)
            if(response.status=="ok"){
                window.location.href = "/libreria/index.php/home";
            }else{
                $("#mensaje").html(response.mensaje)
            }
            
        }
    })
}
function loginJs(){
    console.log("Login2")
    
    var http = new XMLHttpRequest();
    http.onreadystatechange = function(){
        console.log(http.readyState);
        console.log(http.status)
        if(http.readyState==4 && http.status==200){
            alert(http.responseText)
        }
    }
    http.open("POST","http://localhost/libreria/index.php/login/saveJs",true);
    http.send();
}

$(document).ready(function () {
    $("#soy_alumno").click(function () {
        console.log($(this).is(":checked"))
        if ($(this).is(":checked")) {
            //$(".texto_alumno").css("display", "block")
            $(".texto_alumno").show()
        } else {
            //$(".texto_alumno").css("display", "none")
            $(".texto_alumno").hide()
        }
    })
    $("#soy_alumno").click()

    $("p").each(function (i) {
        if (i % 2 == 0) {
            $(this).css("background-color", "#eee");
        } else {
            $(this).css("background-color", "#ccc");
        }
    })

    $("#apellido_id").keyup(function (e) {
        console.log(e.which);
        console.log($(this).val() == "")
        if ($(this).val() == "") {
            $(this).addClass("error");
        } else {
            $(this).removeClass("error");
        }
        //e.preventDefault();
    });

    $("#sumar").click(function () {
        console.log("Sumar")
    })
})
function registrarse(){
    var clave;
    
    clave = document.getElementById("clave_id").value
    clave2 = document.getElementById("clave2_id").value
    
        
            if (clave != clave2) {
                document.getElementById("error_clave").innerHTML ="Tus contraseñas deben coincidir"
            } 
            }
    
    
    
      