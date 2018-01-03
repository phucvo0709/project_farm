<?php
/* Smarty version 3.1.30, created on 2017-12-20 02:34:48
  from "/home/chufarmc/public_html/admin/smarty/templates/layout_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39cc488bc741_45912064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c901420e506bbcb792d494e081e359275e17fc4' => 
    array (
      0 => '/home/chufarmc/public_html/admin/smarty/templates/layout_login.tpl',
      1 => 1513591178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/head.tpl' => 1,
    'file:layouts/body_login.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5a39cc488bc741_45912064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/body_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
