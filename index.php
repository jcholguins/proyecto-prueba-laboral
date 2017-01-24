<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Reservas</title>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="Client/main.js"></script>
</head>
<body>
    <div>
        <fieldset style="width: 30%">
            <legend>Registrar cliente</legend>
            <form>

                <table>
                    <tr>
                        <td>
                            <label for="client_identity_number">Cédula:</label>                        
                        </td>
                        <td>
                            <input type="number" 
                                   id="client_identity_number" 
                                   name="client_identity_number">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="client_name">Nombre:</label>           
                        </td>
                        <td>
                            <input type="text" 
                                   id="client_name" 
                                   name="client_name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="client_email">Email:</label>          
                        </td>
                        <td>
                            <input type="email" 
                                   id="client_email" 
                                   name="client_email">  
                        </td>
                    </tr>
                </table>  

                <input type="button" 
                       id="btn_add_client" 
                       value="Registrar">

            </form>
        </fieldset>
    </div>
    <div>
        <fieldset style="width: 30%">
            <legend>Adicionar reservas</legend>
        </fieldset>
    </div>
</body>
</html>