<div class="global">
    <section class="slider">
        <div class="camera_wrap">
            
            {foreach $sliders as $slider}            
            <div data-src="public/img/{$slider->image}">
                <div class="camera-caption fadeIn"></div>
            </div>
            {/foreach}
        </div>
    </section>
    <!--content-->
<section class="container1 margTop">
    <div class="container">
        <div class="row">
            <article class="col-lg-12 col-md-12 col-sm-12 fruitBox">
                <h2>{$t_i}</h2>
                <div class="row">
                    {foreach $informations as $information}
                    <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 fruitBanner">
                        <div class="maxheight">
                            <p class="title">{$information->title}</p>
                            <figure><img src="public/img/{$information->image}" alt="{$information->title}"></figure>
                            <p>{$information->content}</p>
                        </div>
                    </article>
                    {/foreach}
                </div>
            </article>
        </div>
    </div>
    <section class="col-lg-12 col-md-12 col-sm-12 testimonialsBox">
        <div class="container">
            <div class="row">
                <article class="col-lg-3 col-md-3 col-sm-3">
                    <h2>{$t_m}</h2>
                    <ul class="list3">
                        {foreach $comments as $comment}
                        <li>
                            <img src="img/quote.png" alt="">
                            <div class="extra-wrap">
                                <p>{$comment->content}</p>
                                <a>{$comment->name_comment}</a>
                            </div>
                        </li>
                        {/foreach}
                    </ul>
                </article>
                <article class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-1 col-md-offset-1 productsBox">
                    <h2>{$t_p}</h2>
                    <div class="row">
                        {foreach $products as $product}
                        <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="thumb-pad1 maxheight1">
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
                    <a href="products.htm" class="w3-button w3-green">More all <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </article>
            </div>
        </div>
    </section>
    <section class="col-lg-12 col-md-12 col-sm-12 newsBox">
        <div class="container">
            <div class="row">
                <article class="col-lg-12 col-md-12 col-sm-12">
                    <h2>{$t_n}</h2>
                    <div class="row">
                        {foreach $news as $new}
                        <article class="col-lg-4 col-md-4 col-sm-4 news-box">
                            <div class="thumb-pad1">
                                <div class="thumbnail">
                                    <div class="badge"><span>{$new->day}</span><br><em>{$new->month}</em></div>
                                    <div class="caption">
                                        <p><strong>{$new->title}</strong><br><br>{$new->content}</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        {/foreach}
                    </div>
                </article>
            </div>
        </div>
    </section>
</section>
</div>