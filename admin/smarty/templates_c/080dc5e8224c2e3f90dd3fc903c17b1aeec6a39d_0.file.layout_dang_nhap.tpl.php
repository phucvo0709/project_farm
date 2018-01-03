<?php
/* Smarty version 3.1.30, created on 2017-12-13 09:03:38
  from "C:\wamp64\www\shop_hoa-master\admin\smarty\templates\layout_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a30eceabdd063_48301639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080dc5e8224c2e3f90dd3fc903c17b1aeec6a39d' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\smarty\\templates\\layout_dang_nhap.tpl',
      1 => 1513090550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/head.tpl' => 1,
    'file:layouts/body_dang_nhap.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5a30eceabdd063_48301639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/body_dang_nhap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
