<?php
    include_once('../config/config.php');
    include('../config/database.php');

    class AddCliente{
        public $conexion;

        function __construct(){
            $db = new Database();
            $this->conexion = $db->connecToDatabase();
        }

        function save($params){
            $nombres =$params['nombres'];
            $email =$params['email'];
            $necesidad =$params['necesidad'];

            $insert = "INSERT INTO clientes VALUES(NULL, '$nombres','$email', '$necesidad')";
            return mysqli_query($this->conexion, $insert);
        }

        function getAll(){
            $sql = "SELECT * FROM clientes";
            return mysqli_query($this->conexion, $sql); 
        }

        function getOne($id){
            $sql = "SELECT * FROM clientes WHERE id = $id";
            return mysqli_query($this->conexion, $sql);
        }

        function update($params){
            var_dump($params);
            $nombres =$params['nombres'];
            $email =$params['email'];
            $necesidad =$params['necesidad'];
            $id =$params['id'];

            $update = "UPDATE clientes SET nombre='$nombres', correo='$email', necesidad='$necesidad' WHERE id = '$id'";
            return mysqli_query($this->conexion, $update);
        }
        
        function delete($id){
            $delete = "DELETE FROM clientes WHERE id = $id";
            return mysqli_query($this->conexion, $delete);
        }
    }
?>