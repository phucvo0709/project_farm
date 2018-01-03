<?php
require_once("database.php");
class M_contact extends database
{
    function contact(){
        $sql = "select * from contact WHERE id = 1";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function update_contact($phone_number,$email,$address, $google_map, $contact_name, $position){
        $sql = "UPDATE `contact` SET `phone_number`=?,`email`=?,`address`=?,`google_map`=?, `contact_name`=?,`position`=? WHERE id = 1";
        $this->setQuery($sql);
        return $this->execute(array($phone_number,$email,$address, $google_map, $contact_name, $position));
    }
}
?>
