<?php
/* Smarty version 3.1.30, created on 2017-12-23 02:05:01
  from "/home/chufarmc/public_html/views/v_contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3db9cd86bef8_41456334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3603ef886c456a6d0e19143d3b3a3c582fa33c11' => 
    array (
      0 => '/home/chufarmc/public_html/views/v_contact.tpl',
      1 => 1513994697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3db9cd86bef8_41456334 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="global indent">
    <!--content-->
    <div class="container1 padTop">
    <div class="container">
        <div class="row">
            <article class="col-lg-12 col-md-12 col-sm-12">
                <figure class="map"><?php echo $_smarty_tpl->tpl_vars['google_map']->value;?>
</figure>
            </article>
            <section class="formBox clearfix">
                <article class="col-lg-12 col-md-12 col-sm-12 info">
                    <h3>Contact Name: 
                        <strong><?php echo $_smarty_tpl->tpl_vars['contact_name']->value;?>
</strong>
                    </h3>
                    <h3>Position: 
                        <strong><?php echo $_smarty_tpl->tpl_vars['position']->value;?>
</strong>
                    </h3>
                   <h3>Address: 
                        <strong class="w3-hover-text-orange"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</strong>
                   </h3>
                    <h3>Phone number: 
                        <strong><a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
" class="w3-hover-text-orange"><?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
</a></strong>
                    </h3>
                    <h3>E-mail: 
                        <strong><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" target="_top"  class="w3-text-black w3-hover-text-orange"> <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a></strong>
                    </h3>
               </article>
            </section>
        </div>
    </div>
    </div>
</div><?php }
}
