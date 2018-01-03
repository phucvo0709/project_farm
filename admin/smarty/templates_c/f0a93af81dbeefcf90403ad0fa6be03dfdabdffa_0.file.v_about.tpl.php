<?php
/* Smarty version 3.1.30, created on 2017-12-20 10:59:54
  from "/home/chufarmc/public_html/admin/views/v_about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3a42aac6d032_00430911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0a93af81dbeefcf90403ad0fa6be03dfdabdffa' => 
    array (
      0 => '/home/chufarmc/public_html/admin/views/v_about.tpl',
      1 => 1513767130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a42aac6d032_00430911 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST" enctype="multipart/form-data" style="margin-bottom: 20px;">
    <div class="form-group">
        <div class="row">
            <div class="col col-3">
            <div class="input-file-container">  
                <input class="input-file" type="file" name="hinh" id="file"/>
                <label tabindex="0" for="my-file" class="input-file-trigger">Upload image</label>
            </div>
            <p class="file-return"></p>
            </div>
            <div class="col col-3">
                <img id="hienThi" class="img-fluid" src="../public/img/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <textarea class="ckeditor form-control" type="text" name="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>  
    </div>
    <button type="submit" class="btn btn-primary" name="btn_update">Update About</button>
    </form>
</div>
    <?php echo '<script'; ?>
 src="public/js/input_file.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh_add.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh_about.js"><?php echo '</script'; ?>
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
                window.location = "about.php";
            });
        <?php echo '</script'; ?>
>
    <?php }
}
}
