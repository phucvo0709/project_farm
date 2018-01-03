<?php
require_once("database.php");
class M_titles extends database
{
    function titles(){
        $sql = "select * from titles ORDER BY id ASC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_title($title,$id){
        $sql = "UPDATE titles SET title=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($title,$id));
    }
}
?>
