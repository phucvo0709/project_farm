<div class="container">
    <form method="POST">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="username" id="username" value="{if isset($smarty.session.username)}{$smarty.session.username}{/if}" disabled>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
	$.validate({
		modules : 'location, date, security, file',
	});
	// Restrict presentation length
	$('#presentation').restrictLength( $('#pres-max-length') );
</script>
    {if isset($smarty.session.error)}
        <script>swal("{$smarty.session.error}");</script>
    {/if}
    {if isset($smarty.session.success)}
      <script>
          swal({
            title: "Change Password Success!",
            text: "{$smarty.session.success}!",
            type: "success"
            }).then(function() {
                window.location = "logout.php";
            });
      </script>
    {/if}