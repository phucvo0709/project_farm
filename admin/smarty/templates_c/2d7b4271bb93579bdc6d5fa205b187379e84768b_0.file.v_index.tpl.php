<?php
/* Smarty version 3.1.30, created on 2017-12-20 01:14:53
  from "C:\wamp64\www\farm\admin\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39b98d2646d7_59217623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d7b4271bb93579bdc6d5fa205b187379e84768b' => 
    array (
      0 => 'C:\\wamp64\\www\\farm\\admin\\views\\v_index.tpl',
      1 => 1513732470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39b98d2646d7_59217623 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5"><?php echo $_smarty_tpl->tpl_vars['count_news']->value->count;?>
 News</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="news.php">
              <span class="float-left">See All</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><?php echo $_smarty_tpl->tpl_vars['count_products']->value->count;?>
 Product are selling</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="products.php">
              <span class="float-left">See All</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php echo $_smarty_tpl->tpl_vars['count_bills_today']->value->count;?>
 Bills new in today</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#list_bill_today">
              <span class="float-left">Xem chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5" style="font-size: 14px"><?php echo $_smarty_tpl->tpl_vars['count_bills_pending']->value->count;?>
 Bills pending</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#list_bill_pending">
              <span class="float-left">Xem chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
<!-- Area Chart Example-->

      <!-- Date Bill pending-->
      <div id="list_bill_pending">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
              <div class="col col-6">
                <i class="fa fa-table"></i> List Bill Pending
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bills_pending']->value, 'bill');
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
          </div>
        </div>
        <!-- DataTables Bill today-->
      <div id="list_bill_today">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
              <div class="col col-6">
                <i class="fa fa-table"></i> List Bill Today
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bills_today']->value, 'bill');
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
$_prefixVariable2=ob_get_clean();
echo number_format($_prefixVariable2);?>
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
          </div>
        </div>
<?php }
}
