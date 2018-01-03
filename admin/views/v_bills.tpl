
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> List Bill
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Total Price</th>
                  <th>Date</th>
                  <th>Order Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {foreach $bills as $bill}
                <tr id="delete{$bill->id}">
                    <td><a style="color: blue; cursor:pointer;" class="btn" data-toggle="modal" data-target="#add">{$bill->full_name}</a></td>
                  <td><a href="../detail_product.php?id={$bill->product_id}">{$bill->title}</a></td>
                  <td>{$bill->product_quantity}</td>
                  <td>$ {number_format({$bill->total_price})}</td>
                  <td>{$bill->date}</td>
                  <td>{$bill->order_status}</td>
                  <td>
                      <button type="button" onclick="updateAjax({$bill->id})" class="btn btn-success">Processed</button>
                      <button type="button" onclick="deleteAjax({$bill->id})" class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                {* Modal *}
                <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Information </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            Name:
                        </div>
                        <div class="col-8">
                            {$bill->full_name}
                        </div>
                        <div class="col-4">
                            Address:
                        </div>
                        <div class="col-8">
                            {$bill->address}
                        </div>
                        <div class="col-4">
                            Phone number:
                        </div>
                        <div class="col-8">
                            {$bill->phone_number}
                        </div>
                        <div class="col-4">
                            Email:
                        </div>
                        <div class="col-8">
                            {$bill->email}
                        </div>
                    </div>
                </div>
                </div>
                {* end modal*}
                {/foreach}
              </tbody>
            </table>
          </div>
        </div>
        <script src="public/js/ajax/ajax_update_bill.js"></script>
        <script src="public/js/ajax/ajax_delete_bill.js"></script>