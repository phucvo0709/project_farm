<?php
session_start();
class C_terms
{
    public function show_terms()
    {

        //Contact header Footer
        include("c_data_contact.php");
        //Controller
        include("Smarty_farm.php");
        $smarty = new Smarty_farm();
        $title = "Terms";
        $view = "views/v_terms.tpl";
        $smarty->assign('view', $view);
        $smarty->assign('logo', $logo);
        $smarty->assign('title', $title);
        $smarty->assign('title_website', $title_website);
        $smarty->assign('description_website', $description_website);
        $smarty->assign('keywords_website', $keywords_website);
        $smarty->assign('image_seo', $image_seo);
        $smarty->assign('url_seo', $url_seo);
        $smarty->assign('phone_number', $phone_number);
        $smarty->assign('address', $address);
        //Smarty Terms
        $smarty->display("layout.tpl");
    }

}
