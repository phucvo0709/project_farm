<?php
/* Smarty version 3.1.30, created on 2017-12-14 12:49:42
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a327366847056_89409123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da9b16ce018680a571a81bf4b8422073fa5b8538' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_dang_nhap.tpl',
      1 => 1513255774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a327366847056_89409123 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng nhập</div>
      <div class="card-body">
        <form method="POST" action="dang_nhap.php" autocomplete="off">
          <div class="form-group">
            <input class="form-control" name="tai_khoan" id="taiKhoan" type="text" 
            min="6" max="50"
            placeholder="Nhập tài khoản" value="<?php if (isset($_POST['btn_dang_nhap'])) {
echo $_POST['tai_khoan'];
}?>" autocomplete="off" required>
          </div>
          <div class="form-group">
            <input class="form-control" name="mat_khau" id="matKhau" type="password" 
            min="6" max="50"
            placeholder="Nhập mật khẩu" autocomplete="off" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="btn_dang_nhap">Đăng nhập</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../index.php">Quay về trang chủ</a>
        </div>
      </div>
    </div>
  </div>
  <?php if (isset($_SESSION['thongBao'])) {?>
    <?php echo '<script'; ?>
>swal("<?php echo $_SESSION['thongBao'];?>
");<?php echo '</script'; ?>
>
  <?php }
}
}
