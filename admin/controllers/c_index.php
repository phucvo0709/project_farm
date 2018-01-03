<?php
session_start();
include("check_session.php");
class C_index {
    function show_index(){
        //Model
        include("models/m_index.php");
        $m_index = new M_index();
        $bills_pending = $m_index->bills_pending();
        $count_bills_pending = $m_index->count_bills_pending();
        $count_news  = $m_index->count_news();
        $count_products  = $m_index->count_products();
        $day = date("d");
        $bills_today  = $m_index->bill_today($day);
        $count_bills_today  = $m_index->count_bills_today($day);
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_index.tpl";
        $title = "Index Admin";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->assign("count_news", $count_news);
        $smarty->assign("count_products", $count_products);
        $smarty->assign("bills_pending", $bills_pending);
        $smarty->assign("count_bills_pending", $count_bills_pending);
        $smarty->assign("bills_today", $bills_today);
        $smarty->assign("count_bills_today", $count_bills_today);
        $smarty->display("layout.tpl");
    }
}
?>