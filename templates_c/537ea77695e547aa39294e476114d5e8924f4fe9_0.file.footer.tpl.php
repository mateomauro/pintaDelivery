<?php
/* Smarty version 4.2.1, created on 2023-02-01 19:51:14
  from 'C:\xampp\htdocs\codigos\santi jimenes\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63dab4a2909ab4_41698282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '537ea77695e547aa39294e476114d5e8924f4fe9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\santi jimenes\\templates\\footer.tpl',
      1 => 1675192538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dab4a2909ab4_41698282 (Smarty_Internal_Template $_smarty_tpl) {
?>        <footer class="footer" >
            <h4> Pinta Delivery</h4>
        </footer>
        <?php echo '<script'; ?>
 src="https://unpkg.com/aos@2.3.1/dist/aos.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            AOS.init();
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            document.addEventListener('DOMContentLoaded', () => {
                var disclaimer =  document.querySelector("img[alt='www.000webhost.com']");
                if(disclaimer){
                    disclaimer.remove();
                }  
            });
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
