<!--footer-->
<div class="container1 box-shadow">
    <footer>
        <div class="container">
            <div class="row">
                <article class="col-lg-6 col-md-6 col-sm-6 followBox pull-right">
                    <div class="clearfix pull-right">
                        <p class="pull-left">Address:  
                            <a href="contact.htm" target="_blank">{$address}</a>
                        </p>
                    </div>
                </article>
                <article class="col-lg-6 col-md-6 col-sm-6">
                    <h1 class="navbar-brand navbar-brand_"><a href="."><img src="public/img/{$logo}" alt="logo"></a></h1>
                    <ul class="foo_menu">
                        <li class="active"><a href=".">Home</a></li>
                        <li><a href="about.htm">About us</a></li>
                        <li><a href="products.htm">Products</a></li>
                        <li><a href="terms.htm">Terms of Use</a></li>
                        <li><a href="contact.htm">Contacts</a></li>
                    </ul>
                    <ul class="hidden-xs">
                        <li>
                        <p class="privacy">&copy; 2017 <span>|</span> <a href="terms.htm">Privacy Policy</a></p>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </footer>
</div>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/tm-scripts.js"></script>
<script>
    $(document).ready(function() {
        var priceFormat = $('.price_format').text();
        if(priceFormat == '$ 0'){
            $('.price_format').text('Contact');
            $('.buy_product').hide();
        }
     })
</script>
</body>
</html>