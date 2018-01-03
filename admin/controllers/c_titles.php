<?php
session_start();
include("check_session.php");
class C_titles {
    function show_titles(){
        unset($_SESSION['success']);
        //Model
        include("models/m_titles.php");
        $m_titles = new M_titles();
        $titles = $m_titles->titles();
        if(isset($_POST['btn_update'])){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $update = $m_titles->update_title($title,$id);
            if($update){
                $_SESSION['success']="Update title success";
            }

        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_titles.tpl";
        $title = "Title Admin";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->assign("titles", $titles);
        $smarty->display("layout.tpl");
    }
}
?>