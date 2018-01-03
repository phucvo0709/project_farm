
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> List Comment
            </div>
            <div class="col col-6">          
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Add Comment</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name comment</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {foreach $comments as $comment}
                <tr id="delete{$comment->id}">
                  <td>{$comment->name_comment}</td>
                  <td>{$comment->date}</td>
                  <td>
                      <button type="button" class="btn btn-primary" onclick="getId({$comment->id})" id="update{$comment->id}" data-toggle="modal" data-target="#edit{$comment->id}" >Edit</button>
                      <button type="button" onclick="deleteAjax({$comment->id})" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                {* Modal edit *}
                <div class="modal fade" id="edit{$comment->id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail {$comment->name_comment}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" id="uploadForm{$comment->id}">
                          <input type="hidden" name="id" value="{$comment->id}">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Name Comment:</label>
                            <input type="text" class="form-control" name="name_comment" value="{$comment->name_comment}" maxlength="50" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Content:</label>
                            <input type="text" class="form-control" name="content" value="{$comment->content}" maxlength="255" autocomplete="off">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate{$comment->id}">Update</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Add new comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" id="uploadForm" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Name comment:</label>
                    <input type="text" class="form-control" name="name_comment" value="" autocomplete="off" maxlength="50" required>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Content:</label>
                    <input type="text" class="form-control" name="content" value="" maxlength="255" autocomplete="off">
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
  <script src="public/js/ajax/ajax_delete_comment.js"></script>
    {if isset($smarty.session.success)}
      <script>
          swal({
            title: "Update Success!",
            text: "{$smarty.session.success}!",
            type: "success"
            }).then(function() {
                window.location = "comments.php";
            });
      </script>
    {/if}