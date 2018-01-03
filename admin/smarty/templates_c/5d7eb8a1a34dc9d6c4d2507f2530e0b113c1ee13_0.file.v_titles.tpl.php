<?php
/* Smarty version 3.1.30, created on 2017-12-20 02:18:52
  from "C:\wamp64\www\farm\admin\views\v_titles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39c88cc40744_51007093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d7eb8a1a34dc9d6c4d2507f2530e0b113c1ee13' => 
    array (
      0 => 'C:\\wamp64\\www\\farm\\admin\\views\\v_titles.tpl',
      1 => 1513736330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39c88cc40744_51007093 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['titles']->value, 'title');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['title']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['title']->value->title;?>
</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
" >Edit</button>
                  </td>
                </tr>
                
                <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail <?php echo $_smarty_tpl->tpl_vars['title']->value->title;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm<?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
">
                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Title:</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value->title;?>
" autocomplete="off">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['title']->value->id;?>
">Update</button>
                          </div>
                        </form>
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
        
    <?php if (isset($_SESSION['success'])) {?>
      <?php echo '<script'; ?>
>
          swal({
            title: "Update Success!",
            text: "<?php echo $_SESSION['success'];?>
!",
            type: "success"
            }).then(function() {
                window.location = "titles.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
