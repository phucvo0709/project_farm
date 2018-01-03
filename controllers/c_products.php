<?php
session_start();
class C_products
{
    public function show_products()
    {
        //Contact header Footer
        include("c_data_contact.php");
        //Model
        include("models/m_products.php");
        $m_products = new M_products();
        $products = $m_products->products();
        //Pagination
        include("Pager.php");
        $p=new pager();
        $limit=15;
        $count=count($products);
        $pages=$p->findPages($count, $limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $paginate=$p->pageList($curpage, $pages);
        $products = $m_products->products($vt, $limit);
        //Controller
        include("Smarty_farm.php");
        $smarty = new Smarty_farm();
        $title = "Products";
        $view = "views/v_products.tpl";
        include("c_smarty_info.php");
        //Smarty Product
        $smarty->assign('products', $products);
        $smarty->assign('paginate', $paginate);
        $smarty->display("layout.tpl");
    }

}
