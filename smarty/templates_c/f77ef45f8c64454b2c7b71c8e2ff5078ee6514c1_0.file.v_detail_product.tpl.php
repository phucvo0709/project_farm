<?php
/* Smarty version 3.1.30, created on 2017-12-23 22:57:21
  from "/home/chufarmc/public_html/views/v_detail_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3edf5170c028_74895239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f77ef45f8c64454b2c7b71c8e2ff5078ee6514c1' => 
    array (
      0 => '/home/chufarmc/public_html/views/v_detail_product.tpl',
      1 => 1514069839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3edf5170c028_74895239 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="global indent">
    <!--content-->
    <div class="container1 padTop">
    <div class="container">
        <div class="row">
            <article class="col-lg-9 col-md-9 col-sm-9 col-xs-12 deliveringBox">
                <div class="thumb-pad4-1">
                    <div class="thumbnail">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <figure><img src="public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->title;?>
" class="img-responsive"></figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="title_product">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['product']->value->title;?>
</h2>
                                    <h1 class="w3-text-orange">
                                        <b class="price_format">$ <?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price);?>
</b>
                                    </h1>  
                                </div>
                                <div class="description_product w3-margin-top w3-margin-bottom">
                                    <div class="w3-card-4">
                                        <header class="w3-container w3-blue">
                                        <h3><?php echo $_smarty_tpl->tpl_vars['t_d']->value;?>
</h3>
                                        </header>

                                        <div class="w3-container w3-margin-top">
                                        <p><?php echo $_smarty_tpl->tpl_vars['product']->value->description_d;?>
</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact">
                                    <div class="w3-panel w3-yellow w3-display-container">
                                        <span onclick="this.parentElement.style.display='none'"
                                        class="w3-button w3-yellow w3-large w3-display-topright">&times;</span>
                                        <h3><?php echo $_smarty_tpl->tpl_vars['t_s']->value;?>
</h3>
                                        <h3><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
" class="w3-hover-text-orange" style="margin-left:10px"><?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
</a></h3>
                                        <h3 class="email_contact"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" target="_top"  class="w3-text-black w3-hover-text-orange" style="margin-left:5px"> <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a></h3>
                                    </div>
                                </div>
                                <div class="buy_product w3-margin-bottom">
                                    <button type="button" class="w3-button w3-green w3-large w3-padding-large" data-toggle="modal" data-target="#add">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                <h2><?php echo $_smarty_tpl->tpl_vars['t_r']->value;?>
</h2>
                <ul class="list1-3">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_product']->value, 'rp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rp']->value) {
?>
                    <li><a href="<?php echo thu_vien::Bo_dau($_smarty_tpl->tpl_vars['rp']->value->title);?>
-<?php echo $_smarty_tpl->tpl_vars['rp']->value->id;?>
.htm"><?php echo $_smarty_tpl->tpl_vars['rp']->value->title;?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </article>
        </div>
    </div>
    <section class="clientsBox hidden-xs">
        <div class="container">
            <div class="row">
                <article class="col-lg-12 col-md-12 col-sm-12">
                    <h2><?php echo $_smarty_tpl->tpl_vars['t_b']->value;?>
</h2>
                    <ul class="list4">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>  
                        <li><figure><img src="public/img/<?php echo $_smarty_tpl->tpl_vars['brand']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['brand']->value->title;?>
"></figure></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </article>
            </div>
        </div>
    </section>
    </div>
</div>

        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" style="max-width: 875px;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST">
                    <input type="hidden" class="form-control" name="id_product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                    <input type="hidden" class="form-control" name="product_price" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
">
                    <div class="form-group">
                        <label class="form-control-label">Full name:</label>
                        <input type="text" class="form-control" name="full_name" value="" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Address:</label>
                        <input type="text" class="form-control" name="address" value="" maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Phone number:</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="" maxlength="20" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Product:</label>
                        <input type="text" class="form-control" name="product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->title;?>
" disabled>
                    </div>   
                    <div class="form-group">
                        <label class="form-control-label">Quantity:</label>
                        <table>
                            <tr>
                                <td class="cart_price" style="display:none">
                                    <p class="price_jq"><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</p>
                                </td>
                                <td class="cart_quantity">
                                    <input type='number' name="product_quantity" value="1" min="1" class='qty' />
                                </td>
                                <td class="cart_total" style="display:none">
                                    <p class="cart_total_price"></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Total Price:</label>
                        <div id="total"></div>
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="w3-button w3-gray w3-large" data-dismiss="modal">Close</button>
                    <button type="submit" class="w3-button w3-green w3-large" id="btn_add" name="btn_add">Order</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
        
        <?php if (isset($_SESSION['orderSuccess'])) {?>
            <?php echo '<script'; ?>
>
            swal({
            title: "Order Success!",
            text: "<?php echo $_SESSION['orderSuccess'];?>
!",
            type: "success"
            }).then(function() {
                window.location="order_status.php?phone_number=<?php echo $_SESSION['phoneNumber'];?>
";
            });
            <?php echo '</script'; ?>
>
        <?php }?>
        <?php echo '<script'; ?>
>
        $(document).ready(function() {
        $('.qtyplus').click(function(e) {
            e.preventDefault();
            $(this).siblings(':text').val(function(i, val) {
            return +val + 1 || 0;
            }).change();
        });
        $(".qtyminus").click(function(e) {
            e.preventDefault();
            $(this).siblings(':text').val(function(i, val) {
            return +val - 1 || 0;
            }).change();
        });

        var sum = 0;
        $('.qty').change(function() {
            var $tr = $(this).closest('tr'),
            $total = $tr.find('.cart_total_price'),
            total = +$tr.find('.price_jq').text() * +this.value || 0;
            sum = sum - (parseInt($total.text()) || 0) + total;
            $total.text(total);
            $('#total').html("<h3>$" + sum + "</h3>");
        }).change();
        });
        <?php echo '</script'; ?>
>
<?php }
}
