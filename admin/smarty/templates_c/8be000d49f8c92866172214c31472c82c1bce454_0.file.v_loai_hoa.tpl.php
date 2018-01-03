<?php
/* Smarty version 3.1.30, created on 2017-12-14 10:56:22
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_loai_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3258d61e8f22_43611015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8be000d49f8c92866172214c31472c82c1bce454' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_loai_hoa.tpl',
      1 => 1513248731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3258d61e8f22_43611015 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách hoa</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tên loại hoa</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_loai_hoa']->value, 'loai_hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_hoa']->value) {
?>
                <tr id="delete<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
">
                  <td><a href="hoa.php?loai_hoa=<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
</a></td>
                  <td>
                    <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
" >Sửa</button>
                    <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
)" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                
                <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết <?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="loai_hoa.php">
                          <input type="hidden" name="ma_loai" value="<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tên loại hoa:</label>
                            <input type="text" class="form-control ten_loai" name="ten_loai" id="ten_loai<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
" value="<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
" autocomplete="off">
                            <div id="tenLoaiResult<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
"></div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
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
        <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_loai_hoa.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/ajax/ajax_kt_trung_loai_hoa.js"><?php echo '</script'; ?>
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
                        window.location = "loai_hoa.php";
                    }
                  });
                });
          <?php echo '</script'; ?>
>
        <?php }
}
}
