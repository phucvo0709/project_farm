<?php
session_start();
class C_about
{
    public function show_about()
    {
        //Contact header Footer
        include("c_data_contact.php");
        //Model
        include("models/m_about.php");
        $m_about = new M_about();
        $about = $m_about->about();
        $image = $about[0]->image;
        $content = $about[0]->content;
        //Controller
        include("Smarty_farm.php");
        $smarty = new Smarty_farm();
        $title = "About";
        $view = "views/v_about.tpl";
        include("c_smarty_info.php");
        //Smarty About
        $smarty->assign('phone_number', $phone_number);
        $smarty->assign('address', $address);
        $smarty->assign('image', $image);
        $smarty->assign('content', $content);
        $smarty->display("layout.tpl");
    }

}
