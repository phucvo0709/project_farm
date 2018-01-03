<?php
require_once("database.php");
class M_slider extends database
{
    function slider(){
        $sql = "select * from slider ORDER BY date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_slider($title,$hinh,$id){
        $sql = "UPDATE slider SET title=?,image=?,date=now() WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($title,$hinh,$id));
    }
    function read_slider_id($id){
        $sql = "SELECT * FROM slider WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function add_slider(){
        if (isset($_POST["btn_add"])) 
        {
            $title = $_POST['title'];

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
                        $sql = "INSERT INTO slider(title,image,date) VALUES ('$title', '$hinh', now())";
                        $this->setQuery($sql);
                        $this->execute();
                        if($this){
                            $_SESSION['success']="Add slider success";
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
