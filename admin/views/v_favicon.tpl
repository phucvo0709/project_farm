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
                <img id="hienThi" class="img-fluid" src="../public/img/{$favicon}"/>
                <p>Favicon default: 64 x 64</p>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_update">Update Favicon</button>
    </form>
</div>
    <script src="public/js/input_file.js"></script> 
    <script src="public/js/script_hien_thi_anh_add.js"></script>
    <script src="public/js/script_hien_thi_anh.js"></script>
    {if isset($smarty.session.success)}
      <script>
          swal({
            title: "Update Success!",
            text: "{$smarty.session.success}!",
            type: "success"
            }).then(function() {
                window.location = "favicon.php";
            });
      </script>
    {/if}