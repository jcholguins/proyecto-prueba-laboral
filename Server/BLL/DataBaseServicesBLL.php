<?php 

    class DataBaseServicesBLL
    {
        public $connection = null;

        private $_userName = "root";
        private $_password = "camilo";
        private $_dataBaseName = "reservas";
        private $_host = "localhost";


        public function InitializeDataBaseConnection()
        {
            $_connectionString = "mysql:host=". $this->_host . ";dbname=".  $this->_dataBaseName;
                
            $this->connection = new PDO($_connectionString, $this->_userName, $this->_password) or die ("Error to make the connection with the data base");
        }
    }

?>