<?php
/* Smarty version 3.1.30, created on 2017-12-20 02:34:43
  from "/home/chufarmc/public_html/smarty/templates/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39cc4314a364_95757120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a33467b1134ce39250c030af9de88801556d243c' => 
    array (
      0 => '/home/chufarmc/public_html/smarty/templates/layout.tpl',
      1 => 1513531650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:content.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a39cc4314a364_95757120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
