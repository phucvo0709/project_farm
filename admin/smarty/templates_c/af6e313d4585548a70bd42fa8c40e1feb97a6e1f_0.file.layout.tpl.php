<?php
/* Smarty version 3.1.30, created on 2017-12-17 12:06:30
  from "C:\wamp64\www\shop_hoa-masterrr\admin\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a365dc6665070_29599391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af6e313d4585548a70bd42fa8c40e1feb97a6e1f' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-masterrr\\admin\\smarty\\templates\\layout.tpl',
      1 => 1513161974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/head.tpl' => 1,
    'file:layouts/body.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5a365dc6665070_29599391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
