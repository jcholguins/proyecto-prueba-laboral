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
            alert('Error guardando los datos');
        });

    });

    $('#btn_search').click(function(){

        var query_identity_number = $("#query_identity_number").val();

        $("#response").html("");

        $.ajax({
            url: 'Server/api/GetUserData.php',
            method: 'post',
            data: {
                query_identity_number: query_identity_number
            }
        }).done(function(data){

            data = JSON.parse(data);

            if(data.responseData)
            {
                var html = 
                "<table border='1'>" +
                "   <tr>" +
                "       <td>Id</td>" +
                "       <td>Cédula</td>" +
                "       <td>Nombre</td>" +
                "       <td>Email</td>" +
                "   </tr>";

                for(var i = 0; i < data.responseData.length; i++)
                {
                    html += 
                    "       <tr>" +
                    "           <td>"+ data.responseData[i].UserID +"</td>" +
                    "           <td>"+ data.responseData[i].UserIdentityNumber +"</td>" +
                    "           <td>"+ data.responseData[i].UserName +"</td>" +
                    "           <td>"+ data.responseData[i].UserEmail +"</td>" +
                    "       </tr>";
                }

                html += "</table>";

                $("#response").html(html);
            }
        })
        .fail(function(){
            alert('Error obteniendo los datos');
        });

    });

});