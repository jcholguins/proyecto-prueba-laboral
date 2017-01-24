<?php 

    include("../BLL/DataBaseServicesBLL.php");
    include("../DAL/CRUDDAL.php");

    $ser_nombre = $_POST["name"];
    $ser_descripcion = $_POST["desc"];
    $ser_valor_serv = $_POST["val"];

    $crudDAL = new CRUDDAL();

    $myObj = (object) [
        "name" => $ser_nombre,
        "desc" => $name,
        "val" => $email
    ];

    $objResponse = $crudDAL->AddClient($myObj);

    echo json_encode($objResponse);

?>