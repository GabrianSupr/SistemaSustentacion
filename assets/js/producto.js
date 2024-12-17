$(function() { 

    $(".reg_producto .btn_mostrar").click(function(e) { 
        let codprod = $(this).closest(".reg_producto").children(".codprod").text();

        location.href = "mostrar_producto.php?codprod=" + codprod;
    });

    //Editar
    $(".reg_client .btn_editar").click(function(e) { 
        let codclie = $(this).closest(".reg_client").children(".codclie").text();

        location.href = "editar_clientes.php?codclie=" + codclie;
    });


    //Consultar
    $("#frm_consultar_clie #codclie").focusout(function(e) {
        e.preventDefault();
        //Capturar el valor ingresando en el cuadro de texto
        let codclie = $(this).val();

        if (codclie != ""){
            //Implementar la consulta por medio del AJAX para JQuery
            $.ajax({
                url: "../controlador/ctr_consultar_client.php",
                type: "POST",
                data: {codclie: codclie},
                success: function(rpta){
                    let rp = JSON.parse(rpta);

                    if (rp){
                        $(".nom").html(rp.Nombre);
                        $(".apll").html(rp.Apellido);
                        $(".dire").html(rp.Dirección);
                        $(".tlf").html(rp.Teléfono);
                        $(".core").html(rp.CorreoElectrónico);
                    } else {
                        alert("El codigo " + codclie + " no existe");

                        $("#codclie").val("");

                        let vacio = "&nbsp;";

                        $(".nom").html(vacio);
                        $(".apll").html(vacio);
                        $(".dire").html(vacio);

                        $("#codclie").focus();
                    }
                }
            });
        }

    });


    //Filtrar
    $("#frm_filtrar_clie #btn_filtrar").on("click", function(e) {
    e.preventDefault();
    var valor = $("#txt_valor").val();
    if (valor != "") {
        $.post("../controlador/ctr_filtrar_client.php",
            {valor: valor},
            function(rpta) {
                $("#tabla").html(rpta);
            });
    } else {
        $("#tabla").html("");
        alert("Escriba un valor para filtrar...");
        $("#txt_valor").focus();
    }
});   

    //Borrar
    $(".reg_client .btn_borrar").click(function(e) { 
        let codclie = $(this).closest(".reg_client").children(".codclie").text();
        let clie = $(this).closest(".reg_client").children(".clie").text();

       $("#md_borrar .lbl_codclie").text(codclie);
       $("#md_borrar .lbl_clie").text(clie);

       $("#md_borrar .btn_borrar").attr("href", "../controlador/ctr_borrar_client.php?codclie=" + codclie);

       $("#md_borrar").modal("show");   
    });

});

  

