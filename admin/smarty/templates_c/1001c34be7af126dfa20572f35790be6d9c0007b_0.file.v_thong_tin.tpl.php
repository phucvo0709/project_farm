<?php
/* Smarty version 3.1.30, created on 2017-12-17 12:06:53
  from "C:\wamp64\www\shop_hoa-masterrr\admin\views\v_thong_tin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a365ddd8958f5_55425538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1001c34be7af126dfa20572f35790be6d9c0007b' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-masterrr\\admin\\views\\v_thong_tin.tpl',
      1 => 1513491755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a365ddd8958f5_55425538 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách thông tin
            </div>
            <div class="col col-6">          
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm thông tin mới</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hình</th>
                  <th>Tên Thông Tin</th>
                  <th>Thời gian</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_thong_tin']->value, 'thong_tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thong_tin']->value) {
?>
                <tr id="delete<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
">
                  <td width="175px" style="max-width: 175px; max-height: 200px;"><img src="../public/images/banner/<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->TieuDe;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->ThoiGian;?>
</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
" >Sửa</button>
                      <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
)" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                
                <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết <?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->TieuDe;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
" action="thong_tin.php" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên slider:</label>
                            <input type="text" class="form-control" name="tieu_de" value="<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->TieuDe;?>
" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Đường dẫn:</label>
                            <input type="text" class="form-control" name="duong_dan" value="<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->DuongDan;?>
" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Hành động:</label>
                            <input type="text" class="form-control" name="hanh_dong" value="<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->HanhDong;?>
" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col col-3">
                                <div class="input-file-container">  
                                  <input class="input-file" type="file" name="hinh" id="file<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
"/>
                                  <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                                </div>
                                <p class="file-return"></p>
                              </div>
                              <div class="col col-3">
                                  <img id="hienThi<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
" class="img-fluid" src="../public/images/banner/<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->Hinh;?>
"/>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->id;?>
">Cập nhật</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="thong_tin.php" id="uploadForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Tên thông tin:</label>
                    <input type="text" class="form-control" name="tieu_de" value="" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Đường dẫn:</label>
                    <input type="text" class="form-control" name="duong_dan" value="" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Hành động:</label>
                    <input type="text" class="form-control" name="hanh_dong" value="" autocomplete="off">
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col col-3">
                          <div class="input-file-container">  
                            <input class="input-file" id="file" name="hinh" type="file" required>
                            <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                          </div>
                          <p class="file-return"></p>
                        </div>
                        <div class="col col-3">
                            <img id="hienThi" class="img-fluid" src=""/>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-success" name="btn_add">Thêm</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
    <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_thong_tin.js"><?php echo '</script'; ?>
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
    <?php if (isset($_SESSION['thongBao'])) {?>
      <?php echo '<script'; ?>
>swal("<?php echo $_SESSION['thongBao'];?>
");<?php echo '</script'; ?>
>
    <?php }?>
    <?php if (isset($_SESSION['thongBaoThanhCong'])) {?>
      <?php echo '<script'; ?>
>
          swal({
            title: "Thành công!",
            text: "<?php echo $_SESSION['thongBaoThanhCong'];?>
!",
            type: "success"
            }).then(function() {
                window.location = "thong_tin.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
