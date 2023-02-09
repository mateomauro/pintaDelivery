<?php
/* Smarty version 4.2.1, created on 2023-01-18 00:51:27
  from 'C:\xampp\htdocs\codigos\santi jimenes\templates\mostrarEditar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c7347f66cf17_48582421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7188171c8ef5bf6474908263cf35e64e6d2bc9aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\santi jimenes\\templates\\mostrarEditar.tpl',
      1 => 1673999484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63c7347f66cf17_48582421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="contenedor-editar">
        <div class="bebida-editar">
            <div class="imagenes-bebida"> 
                <img src="css/img/<?php echo $_smarty_tpl->tpl_vars['bebida']->value->img;?>
" class="img-bebida">
            </div>
            <div class="informacion-bebida">
                <form action="modificar/<?php echo $_smarty_tpl->tpl_vars['bebida']->value->id_bebida;?>
" method="post">
                    <input type="text" placeholder="bebida: <?php echo $_smarty_tpl->tpl_vars['bebida']->value->bebida;?>
" name="bebida">
                    <input type="text" placeholder="capacidad: <?php echo $_smarty_tpl->tpl_vars['bebida']->value->capacidad;?>
" name="capacidad">
                    <input type="number" placeholder="Precio: <?php echo $_smarty_tpl->tpl_vars['bebida']->value->individual;?>
$" name="precio">
                    <input type="number" placeholder="pack x6: <?php echo $_smarty_tpl->tpl_vars['bebida']->value->x6;?>
$" name="x6">
                    <input type="number" placeholder="pack x12: <?php echo $_smarty_tpl->tpl_vars['bebida']->value->x12;?>
$" name="x12">
                    <input type="number" placeholder="pack x24: <?php echo $_smarty_tpl->tpl_vars['bebida']->value->x24;?>
$" name="x24">
                    <button>Modificar</button>
                </form>
            </div>
        </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
