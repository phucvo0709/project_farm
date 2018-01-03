<?php
session_start();
class C_login
{
    function show_login(){
        //Model
        unset($_SESSION['success']);
        if(isset($_POST["btn_login"]))
		{
			$username=$_POST["username"];
            $password=$_POST["password"];
            $this->save_login($username,$password);
            if (isset($_SESSION['id'])) {
                header('Location: index.php');
            }
        }
        //View
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_login.tpl";
        $title = "Login Admin";
        $smarty->assign("title",$title);
        $smarty->assign("view",$view);
        $smarty->display("layout_login.tpl");
    }

    function save_login($username, $password){
        include("models/m_login.php");
        $m_login = new M_login();
        $user=$m_login->check($username, $password);
        if($user){
            $_SESSION['id']=$user->ID;
            $_SESSION['full_name']=$user->full_name;
            $_SESSION['username']=$user->username;
        }else{
            $_SESSION['alert']="incorrect account or password";
        }
    }
}
?>