<?php
session_start();
unset($_SESSION['success']);
include("check_session.php");
class C_contact {
    function show_contact(){
        //Model
        include("models/m_contact.php");
        $m_contact = new M_contact();
        $contact = $m_contact->contact();
        $phone_number = $contact->phone_number;
        $email = $contact->email;
        $address = $contact->address;
        $google_map = $contact->google_map;
        $contact_name = $contact->contact_name;
        $position  = $contact->position;
        if(isset($_POST['btn_update'])){
            $contact_name = $_POST['contact_name'];
            $position = $_POST['position'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $google_map = $_POST['google_map'];

            $update = $m_contact->update_contact($phone_number,$email,$address, $google_map, $contact_name, $position);
            if($update){
                $_SESSION['success']="Update Contact success";
            }
        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_contact.tpl";
        $title = "Contact Admin";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->assign('phone_number', $phone_number);
        $smarty->assign('email', $email);
        $smarty->assign('address', $address);
        $smarty->assign('google_map', $google_map);
        $smarty->assign('contact_name', $contact_name);
        $smarty->assign('position', $position);
        $smarty->display("layout.tpl");
    }
}
?>