<?php
session_start();
include("check_session.php");
class C_change_password 
{
    function show_change_password(){
        //Model
        include("models/m_change_password.php");
        $m_change_password = new M_change_password();
        if(isset($_POST["btn_update"]))
		{
            $id = $_SESSION['id'];
            $username = $_SESSION['username'];
            $password = $this->password_encryption($_POST['password']);
            $new_password =  $this->password_encryption($_POST['new_password']);
            $check_password = $m_change_password->check_old_password($id,$password);
            if(!$check_password){
                $_SESSION['error']="incorrect account or password";
            }else{
                $change_password = $m_change_password->update_password($new_password,$id,$password);
                $_SESSION['success']="Please login again!";
            }
		}
        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_change_password.tpl";
        $title = "Change password";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
    function password_encryption($encryption){
        $hasformat="$2y$10$";
        $salt="haimuoihaihaimuoihai22";
        $has_and_salt=$hasformat.$salt;
        return $password_encryption = crypt($encryption,$has_and_salt);
    }
}
?>