<?php
session_start();
include("check_session.php");
class C_products
{
    public function show_products()
    {
        unset($_SESSION['success']);
        //Model
        include("models/m_products.php");
        $m_products = new M_products();
        $products = $m_products->products();
        $add_product = $m_products->add_product();
        if(isset($_POST['btn_update'])){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description_d = $_POST['description_d'];
            $keywords_seo = $_POST['keywords_seo'];
            $price = $_POST['price'];

            //update hinh
            $target_dir = "../public/img/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            $uploadOk = 1;
            $hinh = "";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $out = $m_products->read_product_id($id);
            if(!empty($_FILES['hinh']['name'])){
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
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                        $hinh = $_FILES["hinh"]["name"];
                        echo "<script>
                        alert($hinh);
                        </script>";
                    }else{
                        echo "<script>
                        alert('uploading a faulty image');
                        </script>";
                    }
                }
            }else{
                $hinh = $out->image;
                $update = $m_products->update_product($title,$description_d,$hinh,$price,$keywords_seo,$id);
                if($update){
                    $_SESSION['success']="Update products success";
                }
            }
            if($hinh != ""){
                $update = $m_products->update_product($title,$description_d,$hinh,$price,$keywords_seo,$id);
                if($update){
                    $_SESSION['success']="Update products success";
                }
            }
        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Products";
        $view = "views/v_products.tpl";
        $smarty->assign('view', $view);
        $smarty->assign('title', $title);
        $smarty->assign('products', $products);
        $smarty->display("layout.tpl");
    }
}
