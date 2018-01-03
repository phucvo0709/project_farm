<?php
require_once("database.php");
class M_about extends database
{
    function about(){
        $sql = "select * from about";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
