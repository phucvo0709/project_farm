<?php
/* Smarty version 3.1.30, created on 2017-12-18 11:44:25
  from "C:\wamp64\www\farm\admin\views\v_products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37aa196b1ef4_77453678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32d54d31952954c477271f382a2eb55be12be529' => 
    array (
      0 => 'C:\\wamp64\\www\\farm\\admin\\views\\v_products.tpl',
      1 => 1513597461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37aa196b1ef4_77453678 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> List Product
            </div>
            <div class="col col-6">          
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Add Product</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <tr id="delete<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                  <td width="75px" ><img src="../public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" class="img-fluid" alt="Responsive image"></td>
                  <td><a  href="../detail_product.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->title;?>
</a></td>
                  <td>$ <?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" >Edit</button>
                      <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
)" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                
                <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail <?php echo $_smarty_tpl->tpl_vars['product']->value->title;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Title:</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->title;?>
" maxlength="50" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Price:</label>
                            <input type="number" class="form-control" name="price" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
" maxlength="11" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Detail Product:</label>
                            <textarea class="ckeditor form-control" type="text" name="description_d"><?php echo $_smarty_tpl->tpl_vars['product']->value->description_d;?>
</textarea>  
                          </div>
                          <div class="form-group">
                            <p>Resize photos before uploading at: <a href="http://resizepic.com" target="_blank">here</a></p>
                            <div class="row">
                              <div class="col col-3">
                                <div class="input-file-container">  
                                  <input class="input-file" type="file" name="hinh" id="file<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"/>
                                  <label tabindex="0" for="my-file" class="input-file-trigger">New image</label>
                                </div>
                                <p class="file-return"></p>
                              </div>
                              <div class="col col-3">
                                  <img id="hienThi<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="img-fluid" src="../public/img/<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
"/>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
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
                <h5 class="modal-title" id="exampleModalLabel">Add new Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" id="uploadForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Title:</label>
                    <input type="text" class="form-control" name="title" value="" autocomplete="off" maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Price:</label>
                    <input type="number" class="form-control" name="price" value="" autocomplete="off" maxlength="11" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Detail Product:</label>
                    <textarea class="ckeditor form-control" type="text" name="description_d" required></textarea>  
                  </div>
                  <div class="form-group">
                  <p>Resize photos before uploading at: <a href="http://resizepic.com" target="_blank">here</a></p>
                      <div class="row">
                        <div class="col col-3">
                          <div class="input-file-container">  
                            <input class="input-file" id="file" name="hinh" type="file" required>
                            <label tabindex="0" for="my-file" class="input-file-trigger">Upload Image</label>
                          </div>
                          <p class="file-return"></p>
                        </div>
                        <div class="col col-3">
                            <img id="hienThi" class="img-fluid" src="http://fakeimg.pl/280x280" style="max-width: 280px; max-height:280px"/>
                        </div>
                      </div>
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
 src="public/js/ajax/ajax_delete_product.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/input_file.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh_add.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
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
                window.location = "products.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
