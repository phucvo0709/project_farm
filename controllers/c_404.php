<?php
session_start();
class C_404
{
    public function show_404()
    {
        //Contact header Footer
        include("c_data_contact.php");
        //Controller
        include("Smarty_farm.php");
        $smarty = new Smarty_farm();
        $title = "404";
        $view = "views/v_404.tpl";
        include("c_smarty_info.php");
        //Smarty Detail Product
        $smarty->display("layout.tpl");
    }

}
