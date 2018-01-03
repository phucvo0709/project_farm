
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">{$count_news->count} News</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="news.php">
              <span class="float-left">See All</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">{$count_products->count} Product are selling</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="products.php">
              <span class="float-left">See All</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5" style="font-size: 14px">{$count_bills_pending->count} Bills pending</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#list_bill_pending">
              <span class="float-left">Xem chi tiết</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">{$count_bills_today->count} Bills new in today</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
<!-- Area Chart Example-->

      <!-- Date Bill pending-->
      <div id="list_bill_pending">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
              <div class="col col-6">
                <i class="fa fa-table"></i> List Bill Pending
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
                  {foreach $bills_pending as $bill}
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
        </div>
        <script src="public/js/ajax/ajax_update_bill.js"></script>
        <script src="public/js/ajax/ajax_delete_bill.js"></script>
