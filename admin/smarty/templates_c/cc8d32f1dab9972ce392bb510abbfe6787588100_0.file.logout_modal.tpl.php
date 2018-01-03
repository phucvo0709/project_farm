<?php
/* Smarty version 3.1.30, created on 2017-12-18 09:34:48
  from "C:\wamp64\www\farm\admin\smarty\templates\layouts\content\logout_modal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a378bb85ebae1_70230045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc8d32f1dab9972ce392bb510abbfe6787588100' => 
    array (
      0 => 'C:\\wamp64\\www\\farm\\admin\\smarty\\templates\\layouts\\content\\logout_modal.tpl',
      1 => 1513589687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a378bb85ebae1_70230045 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">You are ready to sign out</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" to delete all sessions</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div><?php }
}
