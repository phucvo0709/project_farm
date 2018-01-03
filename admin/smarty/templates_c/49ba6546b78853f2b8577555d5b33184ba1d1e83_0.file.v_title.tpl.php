<?php
/* Smarty version 3.1.30, created on 2017-12-20 02:13:35
  from "C:\wamp64\www\farm\admin\views\v_title.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39c74f0c2ce2_79291641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49ba6546b78853f2b8577555d5b33184ba1d1e83' => 
    array (
      0 => 'C:\\wamp64\\www\\farm\\admin\\views\\v_title.tpl',
      1 => 1513736013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39c74f0c2ce2_79291641 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> List Title
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['read_title']->value, 'title');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['title']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
</td>
                  
                </tr>
                
                
                
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </tbody>
            </table>
          </div>
        </div>
        
    <?php if (isset($_SESSION['success'])) {?>
      <?php echo '<script'; ?>
>
          swal({
            title: "Update Success!",
            text: "<?php echo $_SESSION['success'];?>
!",
            type: "success"
            }).then(function() {
                window.location = "title.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
