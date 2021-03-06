<?php 

    class CRUDDAL
    {
        public function AddClient($paramsObj)
        {
            $dataBaseServicesBLL = new DataBaseServicesBLL();
            $dataBaseServicesBLL->InitializeDataBaseConnection();

            $query = "INSERT INTO clientes (clie_id, clie_nume_docu, clie_nombre, clie_email) VALUES (:clie_id, :clie_nume_docu, :clie_nombre, :clie_email)";
            $arrayParameters = array(
                ':clie_id' => NULL, 
                ':clie_nume_docu' => $paramsObj->identity_number,
                ':clie_nombre' => $paramsObj->name,
                ':clie_email' => $paramsObj->email);

            
            $q = $dataBaseServicesBLL->connection->prepare($query);
            $q->execute($arrayParameters);

            $myObj = (object) [
                "responseMessage" => "Cliente guardado"
            ];

            $dataBaseServicesBLL->connection = null;

            return $myObj;
        }

        public function AddService($paramsObj1)
        {
            $dataBaseServicesBLL = new DataBaseServicesBLL();
            $dataBaseServicesBLL->InitializeDataBaseConnection();

            $query = "INSERT INTO servicios (serv_id, ser_nombre, ser_descripcion, ser_valo_serv) VALUES (:serv_id, :ser_nombre, :ser_descripcion, :ser_valo_serv)";
            $arrayParameters = array(
                ':serv_id' => NULL, 
                ':ser_nombre' => $paramsObj1->ser_nombre,
                ':ser_descripcion' => $paramsObj1->ser_descripcion,
                ':ser_valo_serv' => $paramsObj1->ser_valo_serv);

            
            $q = $dataBaseServicesBLL->connection->prepare($query);
            $q->execute($arrayParameters);

            $myObj1 = (object) [
                "responseMessage" => "Servicio guardado"
            ];

            $dataBaseServicesBLL->connection = null;

            return $myObj1;
        }

        public function AddReserva($paramsObj1)
        {
            $x = $paramsObj1->ser_cantidad;
            $y = $paramsObj1->ser_valo_serv;

            $dataBaseServicesBLL = new DataBaseServicesBLL();
            $dataBaseServicesBLL->InitializeDataBaseConnection();

            $query = "INSERT INTO reserva (rese_id, rese_fecha, rese_valo_tota, rese_observaciones) VALUES (:id, :fecha, :valor_total, :observaciones)";
            
            $arrayParameters = array(
                ':id' => NULL, 
                ':fecha' => getdate(),
                ':valor_total' => $x*$y,
                ':observaciones' => $paramsObj1->ser_descripcion);
            
            $q = $dataBaseServicesBLL->connection->prepare($query);
            $q->execute($arrayParameters);

            $myObj1 = (object) [
                "responseMessage" => "Reserva guardada"
            ];

            $dataBaseServicesBLL->connection = null;

            return $myObj1;
        }

        public function AddRese_deta($paramsObj1)
        {

            $dataBaseServicesBLL = new DataBaseServicesBLL();
            $dataBaseServicesBLL->InitializeDataBaseConnection();

            $query = "INSERT INTO rese_deta (rd_id, rd_cantidad, rd_valo_unit, rd_valo_tota) VALUES (:id, :cantidad, :val_unit, :val_total)";
            $arrayParameters = array(
                ':id' => NULL, 
                ':cantidad' => $paramsObj1->ser_cantidad,
                ':val_unit' => $paramsObj1->ser_valo_serv,
                ':val_total' => (($paramsObj1->ser_cantidad)*($paramsObj1->ser_valo_serv))
                );

            
            $q = $dataBaseServicesBLL->connection->prepare($query);
            $q->execute($arrayParameters);

            $myObj1 = (object) [
                "responseMessage" => "Servicio guardado"
            ];

            $dataBaseServicesBLL->connection = null;

            return $myObj1;
        }

        public function GetUserData($paramsObj)
        {
            $dataBaseServicesBLL = new DataBaseServicesBLL();
            $dataBaseServicesBLL->InitializeDataBaseConnection();

            $query = "SELECT * FROM clientes WHERE clie_nume_docu = :clie_nume_docu";
            $arrayParameters = array(
                ':clie_nume_docu' => $paramsObj->query_identity_number);

            
            $q = $dataBaseServicesBLL->connection->prepare($query);
            $q->execute($arrayParameters);

            $result = $q->fetchAll();

            $myObj = (object) [
                "responseMessage" => "",
                "responseData" => null
            ];

            $itemsList = array();
            while ($row = array_shift($result)) 
            {
                $userInfoDTO = new UserInfoDTO();

                $userInfoDTO->UserID = $row['clie_id'];
                $userInfoDTO->UserIdentityNumber = $row['clie_nume_docu'];
                $userInfoDTO->UserName = $row['clie_nombre'];
                $userInfoDTO->UserEmail = $row['clie_email'];

                array_push($itemsList, $userInfoDTO);
            }

            if($itemsList == null)
            {
                $myObj->responseMessage = "No se encontraron resultados";
                return $myObj;
            } 
            
            $myObj->responseData = $itemsList;

            $dataBaseServicesBLL->connection = null;

            return $myObj;
        }
    }

?>