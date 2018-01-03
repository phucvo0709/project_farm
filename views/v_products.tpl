<div class="global indent">
    <!--content-->
    <div class="container1 padTop">
    <div class="container">
        <div class="row">
            <article class="col-lg-12 col-md-12 col-sm-12 servBox">
                <h2>Products</h2>
                <div class="row">
                {foreach $products as $product}                
                    <article class="col-lg-4 col-md-4 col-sm-4 col-xs-6 maxheight margBot">
                        <div class="thumb-pad7">
                            <div class="thumbnail">
                                <figure><img src="public/img/{$product->image}" alt="{$product->title}"></figure>
                                <div class="caption">
                                    <p class="title w3-center"><a href="{thu_vien::Bo_dau($product->title)}-{$product->id}.htm" class="w3-text-black w3-hover-text-orange w3-large hidden_text">{$product->title}</a></p>
                                </div>
                            </div>
                        </div>
                    </article>
                {/foreach}
                </div>
            </article>
            <div class="pagination" style="font-size:15px">
                {$paginate}
            </div>
        </div>
    </div>
    </div>
</div>