
<div class="global indent">
    <!--content-->
    <div class="container1 padTop">
        <div class="container">
            <div class="row">
                <section class="error-box clearfix">
                    <article class="col-lg-3 col-md-3 col-sm-3">
                        <img src="public/img/{$image}" alt="">
                    </article>
                    <article class="col-lg-9 col-md-9 col-sm-9">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                            <form method="POST">
                                <div id="imaginary_container"> 
                                    <div class="input-group stylish-input-group">
                                        <input type="text" name="search" class="form-control"  placeholder="Enter the phone number to look up the order" >
                                        <span class="input-group-addon">
                                            <button type="submit" name="btn_search">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>  
                                        </span>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                      <div class="w3-responsive">
                        <table class="w3-table-all">
                          <thead>
                            <tr class="w3-green">
                              <th>Full Name</th>
                              <th>Product order</th>
                              <th>Quantity</th>
                              <th>Total price</th>
                              <th>Status Order</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          {foreach $order_status as $os}
                          <tr>
                            <td class="w3-text-black w3-large">{$os->full_name}</td>
                            <td><a href="{$os->title}-{$os->product_id}.htm" class="w3-text-black w3-hover-text-orange w3-large hidden_text">{$os->title}</a></td>
                            <td class="w3-text-black w3-large">{$os->product_quantity}</td>
                            <td class="w3-text-black w3-large">$ {$os->total_price}</td>
                            <td class="w3-text-black w3-large">{$os->order_status}</td>
                            <td class="w3-text-black w3-large">{$os->date}</td>
                         </tr>
                        {/foreach}
                          
                        </table>
                    </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</div>
    {if isset($smarty.session.status)}
        <script>swal("{$smarty.session.status}");</script>
    {/if}