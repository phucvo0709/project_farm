<?php
/* Smarty version 3.1.30, created on 2017-12-23 04:00:05
  from "/home/chufarmc/public_html/admin/views/v_favicon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3dd4c5cae326_54201941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c94e713ab7bbd833535726a5912795ae748c2bd5' => 
    array (
      0 => '/home/chufarmc/public_html/admin/views/v_favicon.tpl',
      1 => 1514001604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3dd4c5cae326_54201941 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="hinh" style="margin-bottom: 10px">Favicon Website:</label>
        <div class="row">
            <div class="col col-4">
            <div class="input-file-container">  
                <input class="input-file" type="file" name="hinh" id="file"/>
                <label tabindex="0" for="my-file" class="input-file-trigger">Upload favicon</label>
            </div>
            <p class="file-return"></p>
            </div>
            <div class="col col-3">
                <img id="hienThi" class="img-fluid" src="../public/img/<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
"/>
                <p>Favicon default: 64 x 64</p>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_update">Update Favicon</button>
    </form>
</div>
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
                window.location = "favicon.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
