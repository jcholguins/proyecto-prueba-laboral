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
    }

?>