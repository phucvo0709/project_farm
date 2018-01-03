<?php
require_once("database.php");
class M_news extends database
{
    function news(){
        $sql = "select * from news ORDER BY date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_news($title,$content,$id){
        $sql = "UPDATE news SET title=?,content=?,date=now() WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($title,$content,$id));
    }
    function add_news(){
        if (isset($_POST["btn_add"])) 
        {
            $title = $_POST['title'];
            $content = $_POST['content'];

            $sql = "INSERT INTO news(title,content,date) VALUES ('$title', '$content', now())";
            $this->setQuery($sql);
            $this->execute();
            if($this){
                $_SESSION['success']="Add news success";
            }

        }
    }
}
?>
