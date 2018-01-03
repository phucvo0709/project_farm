<?php
/* Smarty version 3.1.30, created on 2017-12-18 09:57:04
  from "C:\wamp64\www\farm\admin\views\v_bills.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3790f06fb213_84305730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b96b35a8dd41103e651114016ede776aa05e400' => 
    array (
      0 => 'C:\\wamp64\\www\\farm\\admin\\views\\v_bills.tpl',
      1 => 1513591008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3790f06fb213_84305730 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> List Bill
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Total Price</th>
                  <th>Date</th>
                  <th>Order Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bills']->value, 'bill');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
?>
                <tr>
                    <td><a style="color: blue; cursor:pointer;" class="btn" data-toggle="modal" data-target="#add"><?php echo $_smarty_tpl->tpl_vars['bill']->value->full_name;?>
</a></td>
                  <td><a href="../detail_product.php?id=<?php echo $_smarty_tpl->tpl_vars['bill']->value->product_id;?>
"><?php echo $_smarty_tpl->tpl_vars['bill']->value->title;?>
</a></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['bill']->value->product_quantity;?>
</td>
                  <td>$ <?php ob_start();
echo $_smarty_tpl->tpl_vars['bill']->value->total_price;
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['bill']->value->date;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['bill']->value->order_status;?>
</td>
                  <td>
                      <button type="button" class="btn btn-success"><a href="order_status.php?id=<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
" style="color:white">Order Processing</a></button>
                  </td>
                </tr>
                
                <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Information </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            Name:
                        </div>
                        <div class="col-8">
                            <?php echo $_smarty_tpl->tpl_vars['bill']->value->full_name;?>

                        </div>
                        <div class="col-4">
                            Address:
                        </div>
                        <div class="col-8">
                            <?php echo $_smarty_tpl->tpl_vars['bill']->value->address;?>

                        </div>
                        <div class="col-4">
                            Phone number:
                        </div>
                        <div class="col-8">
                            <?php echo $_smarty_tpl->tpl_vars['bill']->value->phone_number;?>

                        </div>
                        <div class="col-4">
                            Email:
                        </div>
                        <div class="col-8">
                            <?php echo $_smarty_tpl->tpl_vars['bill']->value->email;?>

                        </div>
                    </div>
                </div>
                </div>
                
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </tbody>
            </table>
          </div>
        </div><?php }
}
