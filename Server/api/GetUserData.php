<?php 

    include("../BLL/DataBaseServicesBLL.php");
    include("../DAL/CRUDDAL.php");
    include("../DTO/UserInfoDTO.php");

    $query_identity_number = $_POST["query_identity_number"];

    $crudDAL = new CRUDDAL();

    $myObj1 = (object) [
        "query_identity_number" => $query_identity_number
    ];

    $objResponse = $crudDAL->GetUserData($myObj1);

    echo json_encode($objResponse);

?>