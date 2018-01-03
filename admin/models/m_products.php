<?php
require_once("database.php");
class M_products extends database
{
    function products(){
        $sql = "select * from products ORDER BY date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_product($title,$description_d,$hinh,$price,$keywords_seo,$id){
        $sql = "UPDATE products SET title=?,description_d=?,image=?,price=?,keywords_seo=?,date=now() WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($title,$description_d,$hinh,$price,$keywords_seo,$id));
    }
    function read_product_id($id){
        $sql = "SELECT * FROM products WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function add_product(){
        if (isset($_POST["btn_add"])) 
        {
            $title = $_POST['title'];
            $keywords_seo = $_POST['keywords_seo'];
            $description_d = $_POST['description_d'];
            $price = $_POST['price'];

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
                        $sql = "INSERT INTO products(title,description_d,image,price,keywords_seo,date) VALUES ('$title', '$description_d', '$hinh', '$price', '$keywords_seo', now())";
                        $this->setQuery($sql);
                        $this->execute();
                        if($this){
                            $_SESSION['success']="Add products success";
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
