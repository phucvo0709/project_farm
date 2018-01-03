<?php
session_start();
unset($_SESSION["status"]);
error_reporting(0);
class C_order_status
{
    public function show_order_status()
    {
        //Contact header Footer
        include("c_data_contact.php");
        //Model
        include("models/m_order_status.php");
        $m_order_status = new M_order_status();
        if(isset($_SESSION["phoneNumber"]))
        {
            $phone_number = $_SESSION["phoneNumber"];
            $order_status = $m_order_status->order_status($phone_number);
        }
        if(isset($_POST['btn_search'])){
            if($_POST['search'] == ""){
                $_SESSION["status"] = "Please enter the phone number to search for the order";
            }else{
                $search = $_POST['search'];
                $order_status = $m_order_status->search_bills($search);
                if(!$order_status){
                    $_SESSION["status"] = "Order not found";
                }
            }
        }
        include("models/m_about.php");
        $m_about = new M_about();
        $about = $m_about->about();
        $image = $about[0]->image;
        
        //Controller
        include("Smarty_farm.php");
        $smarty = new Smarty_farm();
        $title = "Order status";
        $view = "views/v_order_status.tpl";
        include("c_smarty_info.php");
        //Smarty About
        $smarty->assign('order_status', $order_status);
        $smarty->assign('image', $image);
        $smarty->display("layout.tpl");
    }

}
