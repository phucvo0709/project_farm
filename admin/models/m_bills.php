<?php
require_once("database.php");
class M_bills extends database
{
    function bills(){
        $sql = "select b.*, p.title from bills b INNER JOIN products p ON p.id = b.product_id ORDER BY b.date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
