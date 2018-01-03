
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> List Slider
            </div>
            <div class="col col-6">          
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Add Slider</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {foreach $slider as $sd}
                <tr id="delete{$sd->id}">
                  <td width="75px" ><img src="../public/img/{$sd->image}" class="img-fluid" alt="Responsive image"></td>
                  <td>{$sd->title}</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId({$sd->id})" id="update{$sd->id}" data-toggle="modal" data-target="#edit{$sd->id}" >Edit</button>
                      <button type="button" onclick="deleteAjax({$sd->id})" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                {* Modal edit *}
                <div class="modal fade" id="edit{$sd->id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail {$sd->title}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm{$sd->id}" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="{$sd->id}">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Title:</label>
                            <input type="text" class="form-control" name="title" value="{$sd->title}" maxlength="50" autocomplete="off">
                          </div>
                          <div class="form-group">
                          <p>Resize photos before uploading at: <a href="http://resizepic.com" target="_blank">here</a></p>
                            <div class="row">
                              <div class="col col-3">
                                <div class="input-file-container">  
                                  <input class="input-file" type="file" name="hinh" id="file{$sd->id}"/>
                                  <label tabindex="0" for="my-file" class="input-file-trigger">New image</label>
                                </div>
                                <p class="file-return"></p>
                              </div>
                              <div class="col col-3">
                                  <img id="hienThi{$sd->id}" class="img-fluid" src="../public/img/{$sd->image}"/>
                                  <p>Image default 1199x405</p>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate{$sd->id}">Update</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                {* end modal edit *}
                {/foreach}
              </tbody>
            </table>
          </div>
        </div>
        {* Modal add *}
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" style="max-width: 875px;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" id="uploadForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Title:</label>
                    <input type="text" class="form-control" name="title" value="" autocomplete="off" maxlength="50" required>
                  </div>
                  <div class="form-group">
                  <p>Resize photos before uploading at: <a href="http://resizepic.com" target="_blank">here</a></p>
                      <div class="row">
                        <div class="col col-3">
                          <div class="input-file-container">  
                            <input class="input-file" id="file" name="hinh" type="file" required>
                            <label tabindex="0" for="my-file" class="input-file-trigger">Upload Image</label>
                          </div>
                          <p class="file-return"></p>
                        </div>
                        <div class="col col-3">
                            <img id="hienThi" class="img-fluid" src="http://fakeimg.pl/1199x405"/>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="btn_add">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        {* end modal add *}

    <script src="public/js/ajax/ajax_delete_slider.js"></script>
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
                window.location = "slider.php";
            });
      </script>
    {/if}