<?php
/* Smarty version 3.1.30, created on 2017-12-20 10:08:40
  from "/home/chufarmc/public_html/views/v_order_status.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3a36a8a8fab7_35571784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64df5bff99d7a203f49ff93b04057c256a2e1981' => 
    array (
      0 => '/home/chufarmc/public_html/views/v_order_status.tpl',
      1 => 1513764519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a36a8a8fab7_35571784 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="global indent">
    <!--content-->
    <div class="container1 padTop">
        <div class="container">
            <div class="row">
                <section class="error-box clearfix">
                    <article class="col-lg-3 col-md-3 col-sm-3">
                        <img src="public/img/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="">
                    </article>
                    <article class="col-lg-9 col-md-9 col-sm-9">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                            <form method="POST">
                                <div id="imaginary_container"> 
                                    <div class="input-group stylish-input-group">
                                        <input type="text" name="search" class="form-control"  placeholder="Enter the phone number to look up the order" >
                                        <span class="input-group-addon">
                                            <button type="submit" name="btn_search">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>  
                                        </span>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                      <div class="w3-responsive">
                        <table class="w3-table-all">
                          <thead>
                            <tr class="w3-green">
                              <th>Full Name</th>
                              <th>Product order</th>
                              <th>Quantity</th>
                              <th>Total price</th>
                              <th>Status Order</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_status']->value, 'os');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['os']->value) {
?>
                          <tr>
                            <td class="w3-text-black w3-large"><?php echo $_smarty_tpl->tpl_vars['os']->value->full_name;?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['os']->value->title;?>
-<?php echo $_smarty_tpl->tpl_vars['os']->value->product_id;?>
.htm" class="w3-text-black w3-hover-text-orange w3-large hidden_text"><?php echo $_smarty_tpl->tpl_vars['os']->value->title;?>
</a></td>
                            <td class="w3-text-black w3-large"><?php echo $_smarty_tpl->tpl_vars['os']->value->product_quantity;?>
</td>
                            <td class="w3-text-black w3-large">$ <?php echo $_smarty_tpl->tpl_vars['os']->value->total_price;?>
</td>
                            <td class="w3-text-black w3-large"><?php echo $_smarty_tpl->tpl_vars['os']->value->order_status;?>
</td>
                            <td class="w3-text-black w3-large"><?php echo $_smarty_tpl->tpl_vars['os']->value->date;?>
</td>
                         </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                          
                        </table>
                    </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</div>
    <?php if (isset($_SESSION['status'])) {?>
        <?php echo '<script'; ?>
>swal("<?php echo $_SESSION['status'];?>
");<?php echo '</script'; ?>
>
    <?php }
}
}
