<?php
/* Smarty version 3.1.30, created on 2017-12-20 10:02:29
  from "/home/chufarmc/public_html/views/v_about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3a3535636d22_20970120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12ade42044242a8f2f10455573b65957e1095fa4' => 
    array (
      0 => '/home/chufarmc/public_html/views/v_about.tpl',
      1 => 1513764131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a3535636d22_20970120 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="global indent">
    <!--content-->
    <div class="container1 padTop">
    <div class="container">
        <div class="row">
            <article class="col-lg-4 col-md-4 col-sm-4">
                    <div class="thumb-pad3">
                        <div class="thumbnail">
                            <figure><img src="public/img/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="logo"></figure>
                        </div>
                    </div>
            </article>
            <article class="col-lg-8 col-md-8 col-sm-8">
                <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
                <div class="caption">
                    <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
                </div>
            </article>
        </div>
    </div>
</div><?php }
}
