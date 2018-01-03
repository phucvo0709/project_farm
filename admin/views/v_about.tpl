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
                <img id="hienThi" class="img-fluid" src="../public/img/{$image}"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <textarea class="ckeditor form-control" type="text" name="content">{$content}</textarea>  
    </div>
    <button type="submit" class="btn btn-primary" name="btn_update">Update About</button>
    </form>
</div>
    <script src="public/js/input_file.js"></script>
    <script src="public/js/script_hien_thi_anh_add.js"></script>
    <script src="public/js/script_hien_thi_anh_about.js"></script>
    {if isset($smarty.session.success)}
        <script>
            swal({
            title: "Update Success!",
            text: "{$smarty.session.success}!",
            type: "success"
            }).then(function() {
                window.location = "about.php";
            });
        </script>
    {/if}