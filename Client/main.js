$(function(){
    
    $("#btn_add_service").click(function(){
           
        var ser_nombre = $("#ser_nombre").val();
        var ser_descripcion = $("#ser_descripcion").val();
        var ser_valo_serv = $("#ser_valo_serv").val();
        var ser_cantidad = $("#rd_cantidad").val();
        var identity_number = $("#client_identity_number").val();
        var name = $("#client_name").val();
        var email = $("#client_email").val();

        



        $.ajax({
            url: 'Server/api/AddDB.php',
            method: 'post',
            data: {
                ser_nombre: ser_nombre,
                ser_descripcion: ser_descripcion,
                ser_valo_serv: ser_valo_serv,
                ser_cantidad: ser_cantidad,
                identity_number: identity_number,
                name: name,
                email: email
            }
        }).done(function(data){

            data = JSON.parse(data);

            alert(data.responseMessage);
        })
        .fail(function(){
            alert('Error1');
        });

    });

});