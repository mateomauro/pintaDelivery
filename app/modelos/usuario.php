<?php
    class Usuario {

        //nos conectamos a la base de datos
        function conectarUsuarios(){
            $db = new PDO('mysql:host=localhost;'.'dbname=pinta;charset=utf8', 'root', '');
            return $db;
        }

        //obtiene todo los usuarios, pero en este caso solo hay uno
        function obtenerUsuarios(){
            $db = $this->conectarUsuarios();
            $sentencia = $db->prepare( "SELECT * FROM usuarios");
            $sentencia->execute();
            $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $usuarios;
        }


        //EN EL CASO DE QUE EXISTA RETORNA EL USUARIO CON ESE EMAIL
        function existeEmail($email){
            $db = $this->conectarUsuarios();
            $sentencia = $db->prepare( "SELECT * FROM usuarios WHERE email = ?");
            $sentencia->execute([$email]);
            $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
            return $usuario;
        }
    }
?>