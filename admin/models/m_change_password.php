<?php
require_once("database.php");
class M_change_password extends database
{
    function update_password($new_password,$id,$password){
        $sql = "UPDATE admin SET password = ? WHERE id= ? and password = ?";
        $this->setQuery($sql);
        return $this->execute(array($new_password,$id,$password));
    }
    function check_old_password($id, $password){
        $sql ="SELECT password FROM admin WHERE ID=? and password=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id,$password));
    }
}
?>