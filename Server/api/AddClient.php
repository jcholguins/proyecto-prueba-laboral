<?php 

    include("../BLL/DataBaseServicesBLL.php");
    include("../DAL/CRUDDAL.php");

    $identity_number = $_POST["identity_number"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $crudDAL = new CRUDDAL();

    $myObj = (object) [
        "identity_number" => $identity_number,
        "name" => $name,
        "email" => $email
    ];

    $objResponse = $crudDAL->AddClient($myObj);

    echo json_encode($objResponse);

?>