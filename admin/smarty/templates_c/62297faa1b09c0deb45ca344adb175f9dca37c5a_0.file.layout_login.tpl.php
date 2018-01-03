<?php
/* Smarty version 3.1.30, created on 2018-01-03 09:26:47
  from "C:\wamp64\www\project_farm\admin\smarty\templates\layout_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4ca1d76c7509_18672987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62297faa1b09c0deb45ca344adb175f9dca37c5a' => 
    array (
      0 => 'C:\\wamp64\\www\\project_farm\\admin\\smarty\\templates\\layout_login.tpl',
      1 => 1513565978,
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
function content_5a4ca1d76c7509_18672987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/body_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
