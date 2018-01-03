<?php
/* Smarty version 3.1.30, created on 2017-12-18 12:34:51
  from "C:\wamp64\www\farm\admin\views\v_comments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37b5eb60a525_06839338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9df37849d03c3af08a1dc200653c55cc72113c5' => 
    array (
      0 => 'C:\\wamp64\\www\\farm\\admin\\views\\v_comments.tpl',
      1 => 1513600490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37b5eb60a525_06839338 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> List Comment
            </div>
            <div class="col col-6">          
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Add Comment</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name comment</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                <tr id="delete<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
">
                  <td><?php echo $_smarty_tpl->tpl_vars['comment']->value->name_comment;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['comment']->value->date;?>
</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
" >Edit</button>
                      <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
)" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                
                <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail <?php echo $_smarty_tpl->tpl_vars['comment']->value->name_comment;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
">
                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Name Comment:</label>
                            <input type="text" class="form-control" name="name_comment" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value->name_comment;?>
" maxlength="50" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Content:</label>
                            <input type="text" class="form-control" name="content" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value->content;?>
" maxlength="255" autocomplete="off">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
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

        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" style="max-width: 875px;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" id="uploadForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Name comment:</label>
                    <input type="text" class="form-control" name="name_comment" value="" autocomplete="off" maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Content:</label>
                    <input type="text" class="form-control" name="content" value="" maxlength="255" autocomplete="off">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="btn_add">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
  <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_comment.js"><?php echo '</script'; ?>
>
    <?php if (isset($_SESSION['success'])) {?>
      <?php echo '<script'; ?>
>
          swal({
            title: "Update Success!",
            text: "<?php echo $_SESSION['success'];?>
!",
            type: "success"
            }).then(function() {
                window.location = "comments.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
