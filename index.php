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
        <fieldset style="width: 50%">
            <legend>Adicionar Servicio</legend>
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
                    <tr>
                        <td>
                            <label for="ser_nombre">Servicio:</label>                        
                        </td>
                        <td>
                            <input type="text" 
                                   id="ser_nombre" 
                                   name="ser_nombre">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cantidad">Cantidad:</label>           
                        </td>
                        <td>
                            <input type="number" 
                                   id="rd_cantidad" 
                                   name="rd_cantidad">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ser_descripcion">Descripcion:</label>           
                        </td>
                        <td>
                            <input type="text" 
                                   id="ser_descripcion" 
                                   name="ser_descripcion">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ser_valo_serv">Valor:</label>          
                        </td>
                        <td>
                            <input type="number" 
                                   id="ser_valo_serv" 
                                   name="ser_valo_serv">  
                        </td>
                    </tr>
                </table>  

                <input type="button" 
                       id="btn_add_service" 
                       value="Registrar Servicio">

            </form>
        </fieldset>
    </div>

    <div>
        <fieldset style="width: 50%">
        
            <legend>Consultas</legend>

            <div>
                <table>
                    <tr>
                        <td>
                            <label for="query_identity_number">Cédula</label>
                        </td>
                        <td>
                            <input type="number" id="query_identity_number">
                        </td>
                    </tr>
                </table>

                <input type="button" 
                       id="btn_search" 
                       value="Buscar">
            </div>
        
        </fieldset>
    </div>

    <br>

    <div id="response"></div>

</body>

</html>