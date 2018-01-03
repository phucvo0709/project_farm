<?php
session_start();
include("check_session.php");
class C_bills {
    function show_bills(){
        //Model
        include("models/m_bills.php");
        $m_bills = new M_bills();
        $bills = $m_bills->bills();
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_bills.tpl";
        $title = "Bills Admin";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->assign("bills", $bills);
        $smarty->display("layout.tpl");
    }
}
?>