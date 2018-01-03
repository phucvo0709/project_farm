<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../">Admin Page</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href=".">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link" href="products.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Products</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link" href="bills.php">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Bills</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti3" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-bullhorn"></i>
            <span class="nav-link-text">Setting Content</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti3">
            <li>
              <a href="titles.php">Title</a>
            </li>
            <li>
              <a href="about.php">About</a>
            </li>
            <li>
              <a href="news.php">News</a>
            </li>
            <li>
              <a href="slider.php">Slider</a>
            </li>
            <li>
              <a href="informations.php">Informations</a>
            </li>
            <li>
              <a href="brands.php">Brands</a>
            </li>
            <li>
              <a href="comments.php">Comments</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti4" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-info"></i>
            <span class="nav-link-text">Setting Information</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti4">
            <li>
              <a href="favicon.php">Favicon</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
            <li>
              <a href="seo.php">Seo</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Setting Account</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="change_password.php">Change Password</a>
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
          <a class="nav-link">Hello
          {if isset($smarty.session.full_name)}
            {$smarty.session.full_name}
          {/if}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>