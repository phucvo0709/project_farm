<?php
require_once("database.php");
include("thu_vien.php");
class M_index extends database
{
    function sliders(){
        $sql = "select * from slider ORDER BY date DESC limit 0,4";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function informations(){
        $sql = "select * from informations ORDER BY date DESC limit 0,4";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function comments(){
        $sql = "select * from comments ORDER BY date DESC limit 0,3";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function products(){
        $sql = "select * from products ORDER BY date DESC limit 0,4";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function news(){
        $sql = "SELECT title,content,MONTHNAME(date) as month, day(date) as day FROM news ORDER BY date DESC limit 0,4";          
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function titles($id){
        $sql = "SELECT * from titles WHERE id=?";          
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
}
?>
