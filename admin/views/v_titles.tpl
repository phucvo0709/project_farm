
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> List Title
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {foreach $titles as $title}
                <tr>
                  <td>{$title->title}</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId({$title->id})" id="update{$title->id}" data-toggle="modal" data-target="#edit{$title->id}" >Edit</button>
                  </td>
                </tr>
                {* Modal edit *}
                <div class="modal fade" id="edit{$title->id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail {$title->title}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm{$title->id}">
                          <input type="hidden" name="id" value="{$title->id}">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Title:</label>
                            <input type="text" class="form-control" name="title" value="{$title->title}" autocomplete="off">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate{$title->id}">Update</button>
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
        
    {if isset($smarty.session.success)}
      <script>
          swal({
            title: "Update Success!",
            text: "{$smarty.session.success}!",
            type: "success"
            }).then(function() {
                window.location = "titles.php";
            });
      </script>
    {/if}