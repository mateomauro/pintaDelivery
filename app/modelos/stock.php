<?php
    class Stock {

        //nos conectamos a la base de datos
        function conectarUsuarios(){
            $db = new PDO('mysql:host=localhost;'.'dbname=pinta;charset=utf8', 'root', '');
            return $db;
        }

        //OBTIENE BEBIDAS EN STOCK
        function obtenerBebidas (){
            $db = $this->conectarUsuarios();
            $sentencia = $db->prepare( "SELECT * FROM delivery");
            $sentencia->execute();
            $bebidas = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $bebidas;
        }

        //ELIMINA LA BEBIDA DEL STOCK
        function eliminarBebida($id){
            $db = $this->conectarUsuarios();
            $sentencia = $db->prepare("DELETE FROM delivery WHERE id_bebida = ?");
            $sentencia->execute([$id]);
        }
        
        //OBTIENE UNA SOLA BEBIDA POR ID
        function obtenerBebida($id) {
            $db = $this->conectarUsuarios();
            $sentencia = $db->prepare("SELECT * FROM delivery WHERE id_bebida = ?");
            $sentencia->execute([$id]);
            $bebidas = $sentencia->fetch(PDO::FETCH_OBJ);
            return $bebidas;
        }

        //MODIFICA LA BEBIDA POR ID
        function modificarBebida($id, $bebida, $capacidad, $precio, $x6, $x12, $x24){
            $db = $this->conectarUsuarios();
            $sentencia = $db->prepare("UPDATE delivery SET bebida = ? , capacidad = ?, individual=?, x6=?, x12=?, x24 = ? WHERE id_bebida = ?");
            $sentencia->execute([$bebida, $capacidad, $precio, $x6, $x12, $x24, $id]);
        }

    }
?>