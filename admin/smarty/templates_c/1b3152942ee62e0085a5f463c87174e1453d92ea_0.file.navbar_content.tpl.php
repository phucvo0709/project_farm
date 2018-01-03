<?php
/* Smarty version 3.1.30, created on 2017-12-17 05:23:50
  from "C:\wamp64\www\shop_hoa-master\admin\smarty\templates\layouts\content\navbar_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a35ff66949393_09965700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b3152942ee62e0085a5f463c87174e1453d92ea' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\smarty\\templates\\layouts\\content\\navbar_content.tpl',
      1 => 1513487649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a35ff66949393_09965700 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../">Quản lý cửa hàng</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href=".">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Tổng quan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Quản lý sản phẩm</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="hoa.php">Hoa</a>
            </li>
            <li>
              <a href="loai_hoa.php">Loại hoa</a>
            </li>
            <li>
              <a href="tin_tuc.php">Tin tức</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Quản lý đơn hàng</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti2">
            <li>
              <a href="hoa_don.php">Hóa đơn</a>
            </li>
            <li>
              <a href="khach_hang.php">Khách hàng</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti3" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-bullhorn"></i>
            <span class="nav-link-text">Quản lý nội dung</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti3">
            <li>
              <a href="slider.php">Slider</a>
            </li>
            <li>
              <a href="thong_tin.php">Thông tin</a>
            </li>
            <li>
              <a href="quang_cao.php">Quảng cáo</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Cài đặt</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="doi_mat_khau.php">Đổi mật khẩu</a>
            </li>
            <li>
              <a href=".">SEO</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link">Xin chào 
          <?php if (isset($_SESSION['hoTen'])) {?>
            <?php echo $_SESSION['hoTen'];?>

          <?php }?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Đăng xuất</a>
        </li>
      </ul>
    </div>
  </nav><?php }
}
