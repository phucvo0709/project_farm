<div class="global indent">
    <!--content-->
    <div class="container1 padTop">
    <div class="container">
        <div class="row">
            <article class="col-lg-9 col-md-9 col-sm-9 col-xs-12 deliveringBox">
                <div class="thumb-pad4-1">
                    <div class="thumbnail">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <figure><img src="public/img/{$product->image}" alt="{$product->title}" class="img-responsive"></figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="title_product">
                                    <h2>{$product->title}</h2>
                                    <h1 class="w3-text-orange">
                                        <b class="price_format">$ {number_format($product->price)}</b>
                                    </h1>  
                                </div>
                                <div class="description_product w3-margin-top w3-margin-bottom">
                                    <div class="w3-card-4">
                                        <header class="w3-container w3-blue">
                                        <h3>{$t_d}</h3>
                                        </header>

                                        <div class="w3-container w3-margin-top">
                                        <p>{$product->description_d}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact">
                                    <div class="w3-panel w3-yellow w3-display-container">
                                        <span onclick="this.parentElement.style.display='none'"
                                        class="w3-button w3-yellow w3-large w3-display-topright">&times;</span>
                                        <h3>{$t_s}</h3>
                                        <h3><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{$phone_number}" class="w3-hover-text-orange" style="margin-left:10px">{$phone_number}</a></h3>
                                        <h3 class="email_contact"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:{$email}" target="_top"  class="w3-text-black w3-hover-text-orange" style="margin-left:5px"> {$email}</a></h3>
                                    </div>
                                </div>
                                <div class="buy_product w3-margin-bottom">
                                    <button type="button" class="w3-button w3-green w3-large w3-padding-large" data-toggle="modal" data-target="#add">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                <h2>{$t_r}</h2>
                <ul class="list1-3">
                    {foreach $related_product as $rp}
                    <li><a href="{thu_vien::Bo_dau($rp->title)}-{$rp->id}.htm">{$rp->title}</a></li>
                    {/foreach}
                </ul>
            </article>
        </div>
    </div>
    <section class="clientsBox hidden-xs">
        <div class="container">
            <div class="row">
                <article class="col-lg-12 col-md-12 col-sm-12">
                    <h2>{$t_b}</h2>
                    <ul class="list4">
                        {foreach $brands as $brand}  
                        <li><figure><img src="public/img/{$brand->image}" alt="{$brand->title}"></figure></li>
                        {/foreach}
                    </ul>
                </article>
            </div>
        </div>
    </section>
    </div>
</div>
{* Modal add *}
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document" style="max-width: 875px;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST">
                    <input type="hidden" class="form-control" name="id_product" value="{$product->id}">
                    <input type="hidden" class="form-control" name="product_price" value="{$product->price}">
                    <div class="form-group">
                        <label class="form-control-label">Full name:</label>
                        <input type="text" class="form-control" name="full_name" value="" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Address:</label>
                        <input type="text" class="form-control" name="address" value="" maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Phone number:</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="" maxlength="20" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="" maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Product:</label>
                        <input type="text" class="form-control" name="product" value="{$product->title}" disabled>
                    </div>   
                    <div class="form-group">
                        <label class="form-control-label">Quantity:</label>
                        <table>
                            <tr>
                                <td class="cart_price" style="display:none">
                                    <p class="price_jq">{$product->price}</p>
                                </td>
                                <td class="cart_quantity">
                                    <input type='number' name="product_quantity" value="1" min="1" class='qty' />
                                </td>
                                <td class="cart_total" style="display:none">
                                    <p class="cart_total_price"></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Total Price:</label>
                        <div id="total"></div>
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="w3-button w3-gray w3-large" data-dismiss="modal">Close</button>
                    <button type="submit" class="w3-button w3-green w3-large" id="btn_add" name="btn_add">Order</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        {* end modal add *}
        
        {if isset($smarty.session.orderSuccess)}
            <script>
            swal({
            title: "Order Success!",
            text: "{$smarty.session.orderSuccess}!",
            type: "success"
            }).then(function() {
                window.location="order_status.php?phone_number={$smarty.session.phoneNumber}";
            });
            </script>
        {/if}
        <script>
        $(document).ready(function() {
        $('.qtyplus').click(function(e) {
            e.preventDefault();
            $(this).siblings(':text').val(function(i, val) {
            return +val + 1 || 0;
            }).change();
        });
        $(".qtyminus").click(function(e) {
            e.preventDefault();
            $(this).siblings(':text').val(function(i, val) {
            return +val - 1 || 0;
            }).change();
        });

        var sum = 0;
        $('.qty').change(function() {
            var $tr = $(this).closest('tr'),
            $total = $tr.find('.cart_total_price'),
            total = +$tr.find('.price_jq').text() * +this.value || 0;
            sum = sum - (parseInt($total.text()) || 0) + total;
            $total.text(total);
            $('#total').html("<h3>$" + sum + "</h3>");
        }).change();
        });
        </script>
