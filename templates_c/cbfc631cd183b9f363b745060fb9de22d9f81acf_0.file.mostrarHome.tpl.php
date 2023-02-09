<?php
/* Smarty version 4.2.1, created on 2023-01-26 20:59:54
  from 'C:\xampp\htdocs\codigos\santi jimenes\templates\mostrarHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d2dbba899782_39007443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbfc631cd183b9f363b745060fb9de22d9f81acf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\santi jimenes\\templates\\mostrarHome.tpl',
      1 => 1674763183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63d2dbba899782_39007443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="contenedor-bebidas">
        <?php if ((isset($_SESSION['usuario']))) {?>
            <form action="desloguiar" method="post">
                <button class="btn-session">Cerrar sesion</button>
            </form>
        <?php }?>
        <div class="bebidas">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bebidas']->value, 'bebida');
$_smarty_tpl->tpl_vars['bebida']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bebida']->value) {
$_smarty_tpl->tpl_vars['bebida']->do_else = false;
?>
                <div class="bebida" data-aos="fade-up"  data-aos-duration="2000">
                    <div class="imagenes-bebida"> 
                        <img src="css/img/<?php echo $_smarty_tpl->tpl_vars['bebida']->value->img;?>
" class="img-bebida">
                    </div>
                    <div class="informacion-bebida">
                        <h4><?php echo $_smarty_tpl->tpl_vars['bebida']->value->bebida;?>
 <?php echo $_smarty_tpl->tpl_vars['bebida']->value->capacidad;?>
</h4>
                        <?php if ($_smarty_tpl->tpl_vars['bebida']->value->individual > 0) {?>
                            <h5><?php echo $_smarty_tpl->tpl_vars['bebida']->value->individual;?>
$</h5>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['bebida']->value->x6 > 0) {?>
                            <h5>pack x6: <?php echo $_smarty_tpl->tpl_vars['bebida']->value->x6;?>
$</h5>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['bebida']->value->x12 > 0) {?>
                            <h5>pack x12: <?php echo $_smarty_tpl->tpl_vars['bebida']->value->x12;?>
$</h5>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['bebida']->value->x24 > 0) {?>
                            <h5>pack x24: <?php echo $_smarty_tpl->tpl_vars['bebida']->value->x24;?>
$</h5>
                        <?php }?>
                    </div>
                    <div class="btn-pedir">
                        <a href="https://api.whatsapp.com/send?phone=542494342789&text=Hola%20que%20tal%20me%20gustaria%20hacerte%20un%20pedido%20de%20<?php echo $_smarty_tpl->tpl_vars['bebida']->value->bebida;?>
!!" target="_blank">
                            <button class="boton-pedir">pedir</button>
                        </a>
                    </div>
                    <?php if ((isset($_SESSION['usuario']))) {?>
                        <div class="btn-usuarios">
                            <form action="eliminar/<?php echo $_smarty_tpl->tpl_vars['bebida']->value->id_bebida;?>
" method="post" class="botones-usuario">
                                <button>eliminar</button>
                            </form>
                            <form action="editar/<?php echo $_smarty_tpl->tpl_vars['bebida']->value->id_bebida;?>
" method="post" class="botones-usuario">
                                <button class="botones-usuario">editar</button>
                            </form>
                        </div>
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php }
}
