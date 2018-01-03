<?php
session_start();
unset($_SESSION['orderSuccess']);
class C_detail_product
{
    public function show_detail_product()
    {
        //Contact header Footer
        include("c_data_contact.php");
        //Model
        include("models/m_detail_product.php");
        $m_detail_product = new M_detail_product();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $product = $m_detail_product->product($id);
            $description_website = $product->description_d;
            $keywords_website = $product->keywords_seo;
            $image_seo = "http://$_SERVER[HTTP_HOST]/public/img/".$product->image;
            $url_seo = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $related_product = $m_detail_product->related_product($id);   
        }
        $brands = $m_detail_product->brands();
        $add_bill = $m_detail_product->add_bill();
        $title_detail_product = $m_detail_product->titles(5);
        $t_d = $title_detail_product->title;
        $title_support = $m_detail_product->titles(6);
        $t_s = $title_support->title;
        $title_related_products = $m_detail_product->titles(7);
        $t_r = $title_related_products->title;
        $title_brand = $m_detail_product->titles(8);
        $t_b = $title_brand->title;

        //Controller
        include("Smarty_farm.php");
        $smarty = new Smarty_farm();
        $title = $product->title;
        $view = "views/v_detail_product.tpl";
        include("c_smarty_info.php");
        //Smarty Detail Product
        $smarty->assign('product', $product);
        $smarty->assign('related_product', $related_product);
        $smarty->assign('brands', $brands);
        $smarty->assign('t_d', $t_d);
        $smarty->assign('t_s', $t_s);
        $smarty->assign('t_r', $t_r);
        $smarty->assign('t_b', $t_b);
        $smarty->display("layout.tpl");
    }

}
