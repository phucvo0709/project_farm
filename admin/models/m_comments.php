<?php
require_once("database.php");
class M_comments extends database
{
    function comments(){
        $sql = "select * from comments ORDER BY date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_comments($name_comment,$content,$id){
        $sql = "UPDATE comments SET name_comment=?,content=?,date=now() WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($name_comment,$content,$id));
    }
    function add_comments(){
        if (isset($_POST["btn_add"])) 
        {
            $name_comment = $_POST['name_comment'];
            $content = $_POST['content'];
            $sql = "INSERT INTO comments(name_comment,content,date) VALUES ('$name_comment', '$content', now())";
            $this->setQuery($sql);
            $this->execute();
            if($this){
                $_SESSION['success']="Add comments success";
            }

        }
    }
}
?>
