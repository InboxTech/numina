<?php
 session_start();
    class DbConnect{
        private $hosteName = "localhost";
        private $userName = "inboxmca_numinapharma";
        private $password = ";d.i4&&q2;xd";
        private $database = "inboxmca_numinapharma";
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