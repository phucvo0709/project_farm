<?php
    if(isset($_POST['update_id'])){
        $id = $_POST['update_id'];
        include("database.php");
        $db = new database();
        $sql = "UPDATE bills set  order_status = 'Processed' WHERE id = ?";
        $db->setQuery($sql);
        return $db->execute(array($id));
    }
?>