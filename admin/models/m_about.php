<?php
require_once("database.php");
class M_about extends database
{
    function about(){
        $sql = "select * from about";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_about($hinh,$content){
        $sql = "UPDATE `about` SET `image`=?,`content`=? WHERE id = 1";
        $this->setQuery($sql);
        return $this->execute(array($hinh,$content));
    }
}
?>
