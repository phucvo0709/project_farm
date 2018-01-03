<?php
/* Smarty version 3.1.30, created on 2017-12-20 09:04:57
  from "/home/chufarmc/public_html/admin/views/v_change_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3a27b950fe03_82833008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f01660ed4446c55e101ec54f5d1eb4c80719d45a' => 
    array (
      0 => '/home/chufarmc/public_html/admin/views/v_change_password.tpl',
      1 => 1513625740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a27b950fe03_82833008 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" id="username" value="<?php if (isset($_SESSION['username'])) {
echo $_SESSION['username'];
}?>" disabled>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Old Password">    
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="new_password" id="new_password"
        data-validation="strength" data-validation-strength="2" data-validation-error-msg="Passwords include letters and numbers and a minimum of 8 characters"
        placeholder="New Password">    
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="re_new_password" 
        data-validation="confirmation" data-validation-confirm="new_password" data-validation-error-msg="New passwords do not overlap" 
        placeholder="Re-new Password">
    </div>
    <button type="submit" class="btn btn-primary" name="btn_update">Change Password</button>
    </form>
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
>
    <?php if (isset($_SESSION['error'])) {?>
        <?php echo '<script'; ?>
>swal("<?php echo $_SESSION['error'];?>
");<?php echo '</script'; ?>
>
    <?php }?>
    <?php if (isset($_SESSION['success'])) {?>
      <?php echo '<script'; ?>
>
          swal({
            title: "Change Password Success!",
            text: "<?php echo $_SESSION['success'];?>
!",
            type: "success"
            }).then(function() {
                window.location = "logout.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
