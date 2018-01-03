<?php
session_start();
class C_index
{
    public function show_index()
    {
        //Contact header Footer
        include("c_data_contact.php");
        //Model
        include("models/m_index.php");
        $m_index = new M_index();
        $sliders = $m_index->sliders();
        $informations = $m_index->informations();
        $comments = $m_index->comments();
        $products = $m_index->products();
        $news = $m_index->news();
        $title_informations = $m_index->titles(1);
        $t_i = $title_informations->title;
        $title_comments = $m_index->titles(2);
        $t_m = $title_comments->title;
        $title_products = $m_index->titles(3);
        $t_p = $title_products->title;
        $title_news = $m_index->titles(4);
        $t_n = $title_news->title;
        //Controller
        include("Smarty_farm.php");
        $smarty = new Smarty_farm();
        $title = "chufarm.com.au";
        $view = "views/v_index.tpl";
        include("c_smarty_info.php");
        //Smarty Index
        $smarty->assign('sliders', $sliders);
        $smarty->assign('informations', $informations);
        $smarty->assign('comments', $comments);
        $smarty->assign('products', $products);
        $smarty->assign('news', $news);
        $smarty->assign('t_i', $t_i);
        $smarty->assign('t_m', $t_m);
        $smarty->assign('t_p', $t_p);
        $smarty->assign('t_n', $t_n);
        $smarty->display("layout.tpl");
    }

}
