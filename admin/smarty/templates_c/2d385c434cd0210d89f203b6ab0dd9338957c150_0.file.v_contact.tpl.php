<?php
/* Smarty version 3.1.30, created on 2017-12-18 12:05:56
  from "C:\wamp64\www\farm\admin\views\v_contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37af24c4b8e6_50124934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d385c434cd0210d89f203b6ab0dd9338957c150' => 
    array (
      0 => 'C:\\wamp64\\www\\farm\\admin\\views\\v_contact.tpl',
      1 => 1513598750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37af24c4b8e6_50124934 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'ct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
?>
    <div class="form-group">
        <label for="tai_khoan">Phone Number:</label>
        <input type="text" class="form-control" name="phone_number" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['ct']->value->phone_number;?>
">
    </div>
    <div class="form-group">
        <label for="tai_khoan">Email:</label>
        <input type="email" class="form-control" name="email" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['ct']->value->email;?>
">    
    </div>
    <div class="form-group">
        <label for="tai_khoan">Address:</label>
        <input type="text" class="form-control" name="address" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['ct']->value->address;?>
">    
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <button type="submit" class="btn btn-primary" name="btn_update">Update Contact</button>
    </form>
</div>
<?php if (isset($_SESSION['success'])) {?>
    <?php echo '<script'; ?>
>
        swal({
        title: "Update Success!",
        text: "<?php echo $_SESSION['success'];?>
!",
        type: "success"
        }).then(function() {
            window.location = "contact.php";
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
