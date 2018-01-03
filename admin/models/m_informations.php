<?php
require_once("database.php");
class M_informations extends database
{
    function informations(){
        $sql = "select * from informations ORDER BY date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_information($title,$content,$hinh,$id){
        $sql = "UPDATE informations SET title=?,content=?,image=?,date=now() WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($title,$content,$hinh,$id));
    }
    function read_information_id($id){
        $sql = "SELECT * FROM informations WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function add_information(){
        if (isset($_POST["btn_add"])) 
        {
            $title = $_POST['title'];
            $content = $_POST['content'];

            //update hinh
            $target_dir = "../public/img/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            $uploadOk = 1;
            $hinh = "";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            if (isset($_FILES['hinh']))
            {
                if($_FILES["hinh"]["size"] > 500000){
                    echo "<script>
                    alert('File is not too 5MB');
                    </script>";
                    $uploadOk = 0;
                }
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ){
                    echo "<script>
                    alert('Not an image file');
                    </script>";
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                    echo "<script>
                    alert('uploading a faulty image');
                    </script>";
                }else{
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                        $hinh = $_FILES["hinh"]["name"];
                        $sql = "INSERT INTO informations(title,content,image,date) VALUES ('$title', '$content', '$hinh', now())";
                        $this->setQuery($sql);
                        $this->execute();
                        if($this){
                            $_SESSION['success']="Add information success";
                        }
                    } else{
                        echo "<script>
                        alert('uploading a faulty image');
                        </script>";
                    }
                }
            }
            else{
                echo "<script>
                alert('uploading a faulty image');
                </script>";
            }
        }
    }
}
?>
