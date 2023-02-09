<?php
/* Smarty version 4.2.1, created on 2023-01-25 17:57:32
  from 'C:\xampp\htdocs\codigos\santi jimenes\templates\mostrarLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d15f7c1de675_22283848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45a28f455cb44d84d0043aeb090b3b41ddf098d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\santi jimenes\\templates\\mostrarLogin.tpl',
      1 => 1674665848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63d15f7c1de675_22283848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="contenedor-login">
        <div class="formulario-login">
            <form action="loguearse" method="post">
                <input type="email" name="email" placeholder="Ingrese su email" class="inputs">
                <input type="password" name="contraseña" placeholder="Ingrese su contraseña"  class="inputs">
                <button class="btn-login">Iniciar session</button>
            </form>
            <div class="error">
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
                <?php }?>
            </div>
        </div>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
