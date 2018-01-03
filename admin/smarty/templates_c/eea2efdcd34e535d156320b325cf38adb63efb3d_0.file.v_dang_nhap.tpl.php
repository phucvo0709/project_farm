<?php
/* Smarty version 3.1.30, created on 2017-12-12 08:08:56
  from "C:\wamp64\www\shop_hoa\admin\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2f8e983101a5_08073388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eea2efdcd34e535d156320b325cf38adb63efb3d' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa\\admin\\views\\v_dang_nhap.tpl',
      1 => 1512958730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2f8e983101a5_08073388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng nhập</div>
      <div class="card-body">
        <form method="POST" action="dang_nhap.php" autocomplete="off">
          <div class="form-group">
            <input class="form-control" name="tai_khoan" id="taiKhoan" type="text" 
            data-validation="length alphanumeric" data-validation-length="6-20" data-validation-error-msg="Tối thiểu 6 ký tự và không ký tự đặc biệt"
            placeholder="Nhập tài khoản" autocomplete="off" required>
          </div>
          <div class="form-group">
            <input class="form-control" name="mat_khau" id="matKhau" type="password" placeholder="Nhập mật khẩu" autocomplete="off" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="btn_dang_nhap">Đăng nhập</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../index.php">Quay về trang chủ</a>
        </div>
      </div>
    </div>
  </div>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$.validate({
		modules : 'location, date, security, file',
	});
	// Restrict presentation length
	$('#presentation').restrictLength( $('#pres-max-length') );
<?php echo '</script'; ?>
><?php }
}
