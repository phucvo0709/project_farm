<?php
/* Smarty version 3.1.30, created on 2017-12-23 22:56:10
  from "/home/chufarmc/public_html/views/v_products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3edf0a5ee503_88498316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40714e41010d0e20f81eac54e14708d8850c4527' => 
    array (
      0 => '/home/chufarmc/public_html/views/v_products.tpl',
      1 => 1514069764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3edf0a5ee503_88498316 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="global indent">
    <!--content-->
    <div class="container1 padTop">
    <div class="container">
        <div class="row">
            <article class="col-lg-12 col-md-12 col-sm-12 servBox">
                <h2>Products</h2>
                <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>                
                    <article class="col-lg-4 col-md-4 col-sm-4 col-xs-6 maxheight margBot">
                        <div class="thumb-pad7">
                            <div class="thumbnail">
                                <figure><img src="public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->title;?>
"></figure>
                                <div class="caption">
                                    <p class="title w3-center"><a href="<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['product']->value->title);?>
-<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
.htm" class="w3-text-black w3-hover-text-orange w3-large hidden_text"><?php echo $_smarty_tpl->tpl_vars['product']->value->title;?>
</a></p>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </article>
            <div class="pagination" style="font-size:15px">
                <?php echo $_smarty_tpl->tpl_vars['paginate']->value;?>

            </div>
        </div>
    </div>
    </div>
</div><?php }
}
