$(function(){

    $("#btn_add_client").click(function(){

        var identity_number = $("#client_identity_number").val();
        var name = $("#client_name").val();
        var email = $("#client_email").val();

        $.ajax({
            url: 'Server/api/AddClient.php',
            method: 'post',
            data: {
                identity_number: identity_number,
                name: name,
                email: email
            }
        }).done(function(data){

            data = JSON.parse(data);

            alert(data.responseMessage);
        })
        .fail(function(){
            alert('Error');
        });

    });

});