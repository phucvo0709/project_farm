<?php
require_once("database.php");
class M_index extends database
{
    function bills_pending(){
        $sql = "select b.*, p.title from bills b INNER JOIN products p ON p.id = b.product_id  WHERE b.order_status = 'Pending' ORDER BY b.date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function count_bills_pending(){
        $sql = "select COUNT(*) as count from bills WHERE order_status = 'Pending'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function count_news(){
        $sql = "select COUNT(*) as count from news";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function count_products(){
        $sql = "select COUNT(*) as count from products";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function bill_today($day){
        $sql = "select b.*, p.title from bills b INNER JOIN products p ON p.id = b.product_id  WHERE day(b.date) = ? ORDER BY b.date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows(array($day));
    }
    function count_bills_today($day){
        $sql = "select  COUNT(*) as count from bills WHERE day(date) = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($day));
    }
}
?>

