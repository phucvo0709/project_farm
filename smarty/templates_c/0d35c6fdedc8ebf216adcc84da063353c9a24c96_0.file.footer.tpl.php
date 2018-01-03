<?php
/* Smarty version 3.1.30, created on 2017-12-23 22:49:37
  from "/home/chufarmc/public_html/smarty/templates/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3edd8165b0f7_34947622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d35c6fdedc8ebf216adcc84da063353c9a24c96' => 
    array (
      0 => '/home/chufarmc/public_html/smarty/templates/footer.tpl',
      1 => 1514069375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3edd8165b0f7_34947622 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--footer-->
<div class="container1 box-shadow">
    <footer>
        <div class="container">
            <div class="row">
                <article class="col-lg-6 col-md-6 col-sm-6 followBox pull-right">
                    <div class="clearfix pull-right">
                        <p class="pull-left">Address:  
                            <a href="contact.htm" target="_blank"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</a>
                        </p>
                    </div>
                </article>
                <article class="col-lg-6 col-md-6 col-sm-6">
                    <h1 class="navbar-brand navbar-brand_"><a href="."><img src="public/img/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="logo"></a></h1>
                    <ul class="foo_menu">
                        <li class="active"><a href=".">Home</a></li>
                        <li><a href="about.htm">About us</a></li>
                        <li><a href="products.htm">Products</a></li>
                        <li><a href="terms.htm">Terms of Use</a></li>
                        <li><a href="contact.htm">Contacts</a></li>
                    </ul>
                    <ul class="hidden-xs">
                        <li>
                        <p class="privacy">&copy; 2017 <span>|</span> <a href="terms.htm">Privacy Policy</a></p>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </footer>
</div>
<?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/tm-scripts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        var priceFormat = $('.price_format').text();
        if(priceFormat == '$ 0'){
            $('.price_format').text('Contact');
            $('.buy_product').hide();
        }
     })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
