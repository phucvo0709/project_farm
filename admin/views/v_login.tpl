<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Administrator Chu's Farm</div>
      <div class="card-body">
        <form method="POST" autocomplete="off">
          <div class="form-group">
            <input class="form-control" name="username" type="text" 
            min="6" max="50"
            placeholder="Username" value="{if isset($smarty.post.btn_login)}{$smarty.post.username}{/if}" autocomplete="off" required>
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
  {if isset($smarty.session.alert)}
    <script>swal("{$smarty.session.alert}");</script>
  {/if}