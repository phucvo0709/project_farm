<?php
/* Smarty version 3.1.30, created on 2017-12-23 22:55:43
  from "/home/chufarmc/public_html/views/v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3edeefc33b07_81626211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd730d67bf877eba829df406be6951eca698805ae' => 
    array (
      0 => '/home/chufarmc/public_html/views/v_index.tpl',
      1 => 1514069741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3edeefc33b07_81626211 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="global">
    <section class="slider">
        <div class="camera_wrap">
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
?>            
            <div data-src="public/img/<?php echo $_smarty_tpl->tpl_vars['slider']->value->image;?>
">
                <div class="camera-caption fadeIn"></div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </section>
    <!--content-->
<section class="container1 margTop">
    <div class="container">
        <div class="row">
            <article class="col-lg-12 col-md-12 col-sm-12 fruitBox">
                <h2><?php echo $_smarty_tpl->tpl_vars['t_i']->value;?>
</h2>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'information');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['information']->value) {
?>
                    <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 fruitBanner">
                        <div class="maxheight">
                            <p class="title"><?php echo $_smarty_tpl->tpl_vars['information']->value->title;?>
</p>
                            <figure><img src="public/img/<?php echo $_smarty_tpl->tpl_vars['information']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['information']->value->title;?>
"></figure>
                            <p><?php echo $_smarty_tpl->tpl_vars['information']->value->content;?>
</p>
                        </div>
                    </article>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </article>
        </div>
    </div>
    <section class="col-lg-12 col-md-12 col-sm-12 testimonialsBox">
        <div class="container">
            <div class="row">
                <article class="col-lg-3 col-md-3 col-sm-3">
                    <h2><?php echo $_smarty_tpl->tpl_vars['t_m']->value;?>
</h2>
                    <ul class="list3">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                        <li>
                            <img src="img/quote.png" alt="">
                            <div class="extra-wrap">
                                <p><?php echo $_smarty_tpl->tpl_vars['comment']->value->content;?>
</p>
                                <a><?php echo $_smarty_tpl->tpl_vars['comment']->value->name_comment;?>
</a>
                            </div>
                        </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </article>
                <article class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-1 col-md-offset-1 productsBox">
                    <h2><?php echo $_smarty_tpl->tpl_vars['t_p']->value;?>
</h2>
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="thumb-pad1 maxheight1">
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
                    <a href="products.htm" class="w3-button w3-green">More all <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </article>
            </div>
        </div>
    </section>
    <section class="col-lg-12 col-md-12 col-sm-12 newsBox">
        <div class="container">
            <div class="row">
                <article class="col-lg-12 col-md-12 col-sm-12">
                    <h2><?php echo $_smarty_tpl->tpl_vars['t_n']->value;?>
</h2>
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'new');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
?>
                        <article class="col-lg-4 col-md-4 col-sm-4 news-box">
                            <div class="thumb-pad1">
                                <div class="thumbnail">
                                    <div class="badge"><span><?php echo $_smarty_tpl->tpl_vars['new']->value->day;?>
</span><br><em><?php echo $_smarty_tpl->tpl_vars['new']->value->month;?>
</em></div>
                                    <div class="caption">
                                        <p><strong><?php echo $_smarty_tpl->tpl_vars['new']->value->title;?>
</strong><br><br><?php echo $_smarty_tpl->tpl_vars['new']->value->content;?>
</p>
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
            </div>
        </div>
    </section>
</section>
</div><?php }
}
