<?php
    include_once 'app/vistas/vista.php';
    include_once 'app/modelos/usuario.php';
    include_once 'app/modelos/stock.php';
    include_once 'app/helpers/helper.php';

    class Controlador {
        private $vista;
        private $modelo_usuario;
        private $stock;
        private $helper;

        public function __construct(){
            $this->vista = new Vista();
            $this->modelo_usuario = new Usuario();
            $this->stock = new Stock();
            $this->helper = new Helper();
        }

        //MUESTRA TODAS LAS BEBIDAS EN STOCK
        function mostrarHome(){
            session_start();
            $bebidas = $this->stock->obtenerBebidas();
            $this->vista->mostrarHome($bebidas);
        }

        //MUESTRA EL FORMULARIO DE LOGIN
        function mostrarLogin(){
            $this->vista->mostrarLogin();
        }


        //PERMITE LOGUIARSE
        function loguearse(){
    
            //SI NO ESTAN VACIO LOS CAMPOS OBTIENE LOS DATOS PARA LOGUEARSE
            if (empty($_POST['email']) || empty($_POST['contraseña'])) {
                $this->vista->mostrarLogin("Complete todo los campos");
                die();
            }
            else {
                $email = $_POST['email'];
                $contraseña = $_POST['contraseña'];
                $usuario = $this->modelo_usuario->existeEmail($email);
                if ($usuario == false) {
                    $this->vista->mostrarLogin("No existe un usuario con este mail");
                }
                elseif ($contraseña != $usuario->contraseña) {
                    $this->vista->mostrarLogin("Su contraseña es incorrecta");
                }
                else {
                    // inicio una session para este usuario
                    session_start();
                    $_SESSION['usuario'] = $usuario;

                    header("location: " . BASE_URL . "home");
                }
            }
        }


        //ELIMINA UNA BEBIDA SI NO LA QUIERES EN STOCK
        function eliminar($id) {
            session_start();
            $this->stock->eliminarBebida($id);
            header("location: " .   BASE_URL . "home");
        }

        //MUESTRA EL FORMULARIO PARA EDITAR LOS PRECIO
        function editar($id){
            session_start();
            $bebida = $this->stock->obtenerBebida($id);
            $this->vista->mostrarEditar($bebida);
        }

        //EDITA LOS PRECIO DE LA BEBIDA EN STOCK
        function modificar($id){
            session_start();
            $bebida_arr = $this->stock->obtenerBebida($id);
            $bebida = $_POST['bebida'];
            $capacidad = $_POST['capacidad'];
            $precio = $_POST['precio'];
            $x6 = $_POST['x6'];
            $x12 = $_POST['x12'];
            $x24 = $_POST['x24'];

            if (empty($bebida)) {
                $bebida = $bebida_arr->bebida;
            }
            if (empty($capacidad)) {
                $capacidad = $bebida_arr->capacidad;
            }
            if (empty($precio)) {
                $precio = $bebida_arr->individual;
            }
            if (empty($x6)) {
                $x6 = $bebida_arr->x6;
            }
            if (empty($x12)) {
                $x12 = $bebida_arr->x12;
            }
            if (empty($x24)) {
                $x24 = $bebida_arr->x24;
            }
            if (($capacidad == 0)) {
                $capacidad = "";
            }
            
            $this->stock->modificarBebida($id, $bebida, $capacidad, $precio, $x6, $x12, $x24);
            header("location: " . BASE_URL . "home");
        }

        //PARA PODER DESLOGUIARSE
        function desloguiar() {
            session_start();
            session_destroy();
            header("location: " . BASE_URL . "home");
        }
       
    }
?>