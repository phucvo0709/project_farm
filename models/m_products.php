<?php
require_once("database.php");
include("thu_vien.php");
class M_products extends database
{
    function products($vt=-1,$limit=-1){
        $sql = "select * from products ORDER BY date DESC";
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
