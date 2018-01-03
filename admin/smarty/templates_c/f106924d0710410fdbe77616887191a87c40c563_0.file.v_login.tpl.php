<?php
/* Smarty version 3.1.30, created on 2017-12-20 09:36:51
  from "/home/chufarmc/public_html/admin/views/v_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3a2f330ee770_42011856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f106924d0710410fdbe77616887191a87c40c563' => 
    array (
      0 => '/home/chufarmc/public_html/admin/views/v_login.tpl',
      1 => 1513762154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a2f330ee770_42011856 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Administrator Chu's Farm</div>
      <div class="card-body">
        <form method="POST" autocomplete="off">
          <div class="form-group">
            <input class="form-control" name="username" type="text" 
            min="6" max="50"
            placeholder="Username" value="<?php if (isset($_POST['btn_login'])) {
echo $_POST['username'];
}?>" autocomplete="off" required>
          </div>
          <div class="form-group">
            <input class="form-control" name="password" type="password" 
            min="6" max="50"
            placeholder="Password" autocomplete="off" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="btn_login">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../index.php">Return Index</a>
        </div>
      </div>
    </div>
  </div>
  <?php if (isset($_SESSION['alert'])) {?>
    <?php echo '<script'; ?>
>swal("<?php echo $_SESSION['alert'];?>
");<?php echo '</script'; ?>
>
  <?php }
}
}
