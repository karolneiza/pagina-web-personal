<?php

    class Database{
        public $host = 'localhost'; //Guarda el servidor de la base de datos
        public $user = 'root'; //Usuario de PHPmyAdmin
        public $pass = ''; //Usuario de PHPmyAdmin
        public $db = 'posibles_clientes';
        static $conexion;

        function connecToDatabase(){

            $this->conexion = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

            if(mysqli_connect_error()){
                echo "Error de conexión ".mysqli_connect_error();
            }

            return $this->conexion;
        }
    }
?>