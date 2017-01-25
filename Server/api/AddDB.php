<?php 

    include("../BLL/DataBaseServicesBLL.php");
    include("../DAL/CRUDDAL.php");

    $ser_nombre = $_POST["ser_nombre"];
    $ser_descripcion = $_POST["ser_descripcion"];
    $ser_valo_serv = $_POST["ser_valo_serv"];
    $ser_cantidad = $_POST["ser_cantidad"];
    $identity_number = $_POST["identity_number"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $crudDAL = new CRUDDAL();

    $myObj1 = (object) [
        "ser_nombre" => $ser_nombre,
        "ser_descripcion" => $ser_descripcion,
        "ser_valo_serv" => $ser_valo_serv,
        "ser_cantidad" => $ser_cantidad,
        "identity_number" => $identity_number,
        "name" => $name,
        "email" => $email
    ];

    $objResponse = $crudDAL->AddClient($myObj1);
    $objResponse = $crudDAL->AddService($myObj1);
    $objResponse = $crudDAL->AddReserva($myObj1);
    $objResponse = $crudDAL->AddRese_deta($myObj1);

    echo json_encode($objResponse);

?>