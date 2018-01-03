<?php
require_once("database.php");
class M_order_status extends database
{
    function order_status($phone_number){
        $sql = "select b.*, p.title from bills b INNER JOIN products p ON p.id = b.product_id WHERE b.phone_number=? ORDER BY b.date";
        $this->setQuery($sql);
        return $this->loadAllRows(array($phone_number));
    }
    function search_bills($search){
        $sql = "select b.*, p.title from bills b INNER JOIN products p ON p.id = b.product_id WHERE b.phone_number LIKE '%$search%' ORDER BY b.date";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
