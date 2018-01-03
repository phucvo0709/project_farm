<?php
session_start();
include("check_session.php");
class C_comments {
    function show_comments(){
        unset($_SESSION['success']);
        //Model
        include("models/m_comments.php");
        $m_comments = new M_comments();
        $comments = $m_comments->comments();
        $add_comments = $m_comments->add_comments();
        if(isset($_POST['btn_update'])){
            $id = $_POST['id'];
            $name_comment = $_POST['name_comment'];
            $content = $_POST['content'];
            $update = $m_comments->update_comments($name_comment,$content,$id);
            if($update){
                $_SESSION['success']="Update comment success";
            }

        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_comments.tpl";
        $title = "Comments Admin";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->assign("comments", $comments);
        $smarty->display("layout.tpl");
    }
}
?>