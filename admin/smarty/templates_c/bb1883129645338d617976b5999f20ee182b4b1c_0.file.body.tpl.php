<?php
/* Smarty version 3.1.30, created on 2017-12-20 02:36:35
  from "/home/chufarmc/public_html/admin/smarty/templates/layouts/body.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39ccb3798d09_54176005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb1883129645338d617976b5999f20ee182b4b1c' => 
    array (
      0 => '/home/chufarmc/public_html/admin/smarty/templates/layouts/body.tpl',
      1 => 1513616180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/content/navbar_content.tpl' => 1,
    'file:layouts/content/footer_content.tpl' => 1,
    'file:layouts/content/logout_modal.tpl' => 1,
  ),
),false)) {
function content_5a39ccb3798d09_54176005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5641799825a39ccb3772296_02774371', "navbar_content");
?>

    <div class="content-wrapper">
          <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href=".">Admin Manage</a>
          </li>
          <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
        </ol>
        <div class="container-fluid">
            <?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <?php }?>
        </div>
    </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11676967015a39ccb378dba4_36406803', "footer_content");
?>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_448098275a39ccb3795502_95592536', "logout_modal");
}
/* {block "navbar_content"} */
class Block_5641799825a39ccb3772296_02774371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/content/navbar_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "navbar_content"} */
/* {block "footer_content"} */
class Block_11676967015a39ccb378dba4_36406803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/content/footer_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer_content"} */
/* {block "logout_modal"} */
class Block_448098275a39ccb3795502_95592536 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/content/logout_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "logout_modal"} */
}
