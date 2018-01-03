<?php
/* Smarty version 3.1.30, created on 2017-12-09 08:14:37
  from "C:\wamp64\www\shop_hoa\admin\views\v_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2b9b6d887385_90802413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '587315ef49e8b87aa32a2bbde8b853c3680d5599' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\admin\\views\\v_hoa.tpl',
      1 => 1512807274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2b9b6d887385_90802413 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách hoa
            </div>
            <div class="col col-6">          
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm hoa mới</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hình</th>
                  <th>Tên hoa</th>
                  <th>Loại hoa</th>
                  <th>Giá</th>
                  <th>Thời gian</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
                <tr id="delete<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
                  <td width="75px" ><img src="../public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</td>
                  <td><a href="hoa.php?loai_hoa=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</a></td>
                  <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->Gia);?>
 đ</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->ThoiGian;?>
</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" >Sửa</button>
                      <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
)" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                
                <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết <?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" action="hoa.php" enctype="multipart/form-data">
                          <input type="hidden" name="ma_hoa" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Loại hoa:</label>
                            <select class="form-control" name="loai_hoa">
                                <option value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_loai_hoa']->value, 'loai_hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_hoa']->value) {
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên hoa:</label>
                            <input type="text" class="form-control" name="ten_hoa" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Giá:</label>
                            <input type="number" class="form-control" name="gia" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Gia;?>
" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Thành phần:</label>
                            <textarea class="form-control" type="text" name="thanh_phan"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->ThanhPhan;?>
</textarea>  
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Nội dung:</label>
                            <textarea class="form-control" type="text" name="noi_dung"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->NoiDung;?>
</textarea>  
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col col-3">
                                <div class="input-file-container">  
                                  <input class="input-file" type="file" name="hinh" id="file<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
"/>
                                  <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                                </div>
                                <p class="file-return"></p>
                              </div>
                              <div class="col col-3">
                                  <img id="hienThi<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" class="img-fluid" src="../public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
"/>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
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
                <form method="POST" action="hoa.php" id="uploadForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Loại hoa:</label>
                    <select class="form-control" name="loai_hoa">
                        <option value="" disabled>Chọn loại tin tức</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_loai_hoa']->value, 'loai_hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_hoa']->value) {
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Tên hoa:</label>
                    <input type="text" class="form-control" name="ten_hoa" value="" autocomplete="off" maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Giá:</label>
                    <input type="number" class="form-control" name="gia" value="" autocomplete="off" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Thành phần:</label>
                    <textarea class="form-control" type="text" name="thanh_phan" maxlength="50"></textarea>  
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Nội dung:</label>
                    <textarea class="form-control" type="text" name="noi_dung"></textarea>  
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
 src="public/js/ajax/ajax_delete_hoa.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/input_file.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh_add.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
><?php }
}
