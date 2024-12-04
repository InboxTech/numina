<?php
 session_start();
    class DbConnect{
        private $hosteName = "localhost";
        private $userName = "root";
        private $password = "";
        private $database = "numina_db";
        private $conn;

        function __construct(){
            $this->conn = mysqli_connect($this->hosteName, $this->userName, $this->password, $this->database);

            if(!$this->conn){
                die ("Connection failed:". mysqli_connect_error());
            }
        }
        function getConnection () {
            if(!$this->conn) {
                return NULL;
            } else {
                return $this->conn;
            }
        }


    }
?>