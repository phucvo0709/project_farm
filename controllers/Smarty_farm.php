<?php
include("smarty/libs/Smarty.class.php");
class Smarty_farm extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->setCacheDir("smarty/cache/");
        $this->setCompileDir("smarty/templates_c/");
        $this->setConfigDir("smarty/configs/");
        $this->setTemplateDir("smarty/templates/");
    }
    public function Hien_thi_giao_dien($layout)
    {
        $this->display($layout);
    }
}
