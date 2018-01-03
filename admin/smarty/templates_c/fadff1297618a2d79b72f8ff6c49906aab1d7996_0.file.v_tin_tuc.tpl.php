<?php
/* Smarty version 3.1.30, created on 2017-12-14 10:52:21
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3257e5614368_12991558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fadff1297618a2d79b72f8ff6c49906aab1d7996' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_tin_tuc.tpl',
      1 => 1513248738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3257e5614368_12991558 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách tin tức
            </div>
            <div class="col col-6">          
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm tin tức</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hình</th>
                  <th>Tên tin tức</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_tin_tuc']->value, 'tin_tuc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tin_tuc']->value) {
?>
                <tr id="delete<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
">
                  <td width="75px" ><img src="../public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenTT;?>
</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
" >Sửa</button>
                      <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
)" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                
                <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết <?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenTT;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
" action="tin_tuc.php" enctype="multipart/form-data">
                          <input type="hidden" name="ma_tt" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Loại tin:</label>
                            <select class="form-control" name="loai_tin">
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaLoaiTin;?>
"><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenLoaiTin;?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_loai_tin']->value, 'loai_tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_tin']->value) {
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['loai_tin']->value->MaLoaiTin;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_tin']->value->TenLoaiTin;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên tin tức:</label>
                            <input type="text" class="form-control" name="ten_tt" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenTT;?>
" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Nội dung:</label>
                            <textarea class="ckeditor form-control" type="text" name="noi_dung" maxlength="500"><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->NoiDung;?>
</textarea>  
                          </div>
                          <div class="form-group">
                              <div class="row">
                                <div class="col col-3">
                                  <div class="input-file-container">  
                                    <input class="input-file" id="file<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
" name="hinh" type="file">
                                    <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                                  </div>
                                  <p class="file-return"></p>
                                </div>
                                <div class="col col-3">
                                    <img id="hienThi<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
" class="img-fluid" src="../public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->Hinh;?>
"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
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
                <h5 class="modal-title" id="exampleModalLabel">Thêm tin tức mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="tin_tuc.php" id="uploadForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Loại tin:</label>
                    <select class="form-control" name="loai_tin">
                        <option value="" disabled>Chọn loại tin tức</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_loai_tin']->value, 'loai_tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_tin']->value) {
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['loai_tin']->value->MaLoaiTin;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_tin']->value->TenLoaiTin;?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Tên tin tức:</label>
                    <input type="text" class="form-control" name="ten_tt" value="" autocomplete="off" maxlength="100" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Nội dung:</label>
                    <textarea class="ckeditor form-control" type="text" name="noi_dung" required></textarea>  
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
 src="public/js/ajax/ajax_delete_tin_tuc.js"><?php echo '</script'; ?>
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
                        $.ajax({
                          success: function() {
                              window.location = "tin_tuc.php";
                          }
                        });
                    });
              <?php echo '</script'; ?>
>
            <?php }
}
}
