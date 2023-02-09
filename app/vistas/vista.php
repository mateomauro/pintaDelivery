<?php
    require_once('libs/Smarty.class.php');
    
    class Vista {
        //MUESTRA LAS BEBIDAS EN STOCK
        function mostrarHome($bebidas = null) {
            $smarty = new Smarty();
            $smarty->assign("bebidas", $bebidas);
            $smarty->display("templates/mostrarHome.tpl");
        }

        //MUESTRA EL FORMULARIO DE LOGIN
        function mostrarLogin($error = null) {
            $smarty = new Smarty();
            $smarty->assign("error", $error);
            $smarty->display("templates/mostrarLogin.tpl");
        }

        //MUESTRA EL FORMULARIO DE EDICION DE BEBIDA
        function mostrarEditar($bebida = null){
            $smarty = new Smarty();
            $smarty->assign("bebida", $bebida);
            $smarty->display("templates/mostrarEditar.tpl");
        }
    }

?>