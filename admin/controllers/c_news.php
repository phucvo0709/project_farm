<?php
session_start();
include("check_session.php");
class C_news {
    function show_news(){
        unset($_SESSION['success']);
        //Model
        include("models/m_news.php");
        $m_news = new M_news();
        $news = $m_news->news();
        $add_news = $m_news->add_news();
        if(isset($_POST['btn_update'])){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $update = $m_news->update_news($title,$content,$id);
            if($update){
                $_SESSION['success']="Update new success";
            }

        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_news.tpl";
        $title = "News Admin";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->assign("news", $news);
        $smarty->display("layout.tpl");
    }
}
?>