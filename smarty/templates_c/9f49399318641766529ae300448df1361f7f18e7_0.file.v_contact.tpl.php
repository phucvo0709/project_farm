<?php
/* Smarty version 3.1.30, created on 2017-12-20 01:56:10
  from "C:\wamp64\www\farm\views\v_contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39c33a6f8f75_97176261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f49399318641766529ae300448df1361f7f18e7' => 
    array (
      0 => 'C:\\wamp64\\www\\farm\\views\\v_contact.tpl',
      1 => 1513732764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39c33a6f8f75_97176261 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="global indent">
    <!--content-->
    <div class="container1 padTop">
    <div class="container">
        <div class="row">
            <article class="col-lg-12 col-md-12 col-sm-12">
                <figure class="map">
                    <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </figure>
            </article>
            <section class="formBox clearfix">
                <article class="col-lg-4 col-md-4 col-sm-4 info">
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'ct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
?>                    
                    <h2>Address</h2>
                    <p class="marg"><strong><?php echo $_smarty_tpl->tpl_vars['ct']->value->address;?>
</strong></p>
                    <p><span>Phone number:</span><?php echo $_smarty_tpl->tpl_vars['ct']->value->phone_number;?>
</p>
                    <p><span>E-mail:</span><a href="#"><?php echo $_smarty_tpl->tpl_vars['ct']->value->email;?>
</a></p>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </article>
            </section>
        </div>
    </div>
    </div>
</div><?php }
}
