<?php
/* Smarty version 3.1.30, created on 2017-12-18 09:30:40
  from "C:\wamp64\www\farm\admin\smarty\templates\layout_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a378ac01fe727_01412044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf45c19645602de4ae50cb4e7e89bfaf2a592c99' => 
    array (
      0 => 'C:\\wamp64\\www\\farm\\admin\\smarty\\templates\\layout_login.tpl',
      1 => 1513565979,
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
function content_5a378ac01fe727_01412044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/body_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
