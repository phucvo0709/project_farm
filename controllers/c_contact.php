<?php
session_start();
class C_contact
{
    public function show_contact()
    {
        //Contact header Footer
        include("c_data_contact.php");
        $google_map = $contact->google_map;
        $contact_name = $contact->contact_name;
        $position = $contact->position;

        //Controller
        include("Smarty_farm.php");
        $smarty = new Smarty_farm();
        $title = "Contact";
        $view = "views/v_contact.tpl";
        include("c_smarty_info.php");
        //Smarty Contact
        $smarty->assign('phone_number', $phone_number);
        $smarty->assign('address', $address);
        $smarty->assign('google_map', $google_map);
        $smarty->assign('contact_name', $contact_name);
        $smarty->assign('position', $position);
        $smarty->assign('email', $email);
        $smarty->display("layout.tpl");
    }

}
