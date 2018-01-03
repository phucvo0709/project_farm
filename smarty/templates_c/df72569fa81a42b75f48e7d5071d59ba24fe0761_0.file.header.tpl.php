<?php
/* Smarty version 3.1.30, created on 2017-12-23 01:31:30
  from "/home/chufarmc/public_html/smarty/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3db1f2ad44a4_14696750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df72569fa81a42b75f48e7d5071d59ba24fe0761' => 
    array (
      0 => '/home/chufarmc/public_html/smarty/templates/header.tpl',
      1 => 1513992689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3db1f2ad44a4_14696750 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--header-->
<header>
    <div class="container">
        <h1 class="navbar-brand navbar-brand_">
            <a href="."><img src="public/img/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt=""></a>
        </h1>
        <div>
            <p>24/7 Support: <span><a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
</a></span></p>
            <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
                <ul class="nav sf-menu clearfix">
                    <li class="active"><a href=".">Home</a><em></em></li>
                    <li><a href="about.htm">About us</a><em></em></li>
                    <li><a href="products.htm">Products</a><em></em></li>
                    <li><a href="check.htm">Check order</a></li>
                    <li><a href="contact.htm">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header><?php }
}
