<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  {block name="navbar_content"}{include file="layouts/content/navbar_content.tpl"}{/block}
    <div class="content-wrapper">
          <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href=".">Admin Manage</a>
          </li>
          <li class="breadcrumb-item active">{$title}</li>
        </ol>
        <div class="container-fluid">
            {if isset($view)}
                {include file="$view"}
            {/if}
        </div>
    </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
  {block name="footer_content"}{include file="layouts/content/footer_content.tpl"}{/block}
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  {block name="logout_modal"}{include file="layouts/content/logout_modal.tpl"}{/block}