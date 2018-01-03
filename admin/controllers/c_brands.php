<?php
session_start();
include("check_session.php");
class C_brands
{
    public function show_brands()
    {
        unset($_SESSION['success']);
        //Model
        include("models/m_brands.php");
        $m_brands = new M_brands();
        $brands = $m_brands->brands();
        $add_brand = $m_brands->add_brand();
        if(isset($_POST['btn_update'])){
            $id = $_POST['id'];
            $title = $_POST['title'];

            //update hinh
            $target_dir = "../public/img/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            $uploadOk = 1;
            $hinh = "";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $out = $m_brands->read_brand_id($id);
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
                $update = $m_brands->update_brand($title,$hinh,$id);
                if($update){
                    $_SESSION['success']="Update brand success";
                }
            }
            if($hinh != ""){
                $update = $m_brands->update_brand($title,$hinh,$id);
                if($update){
                    $_SESSION['success']="Update brand success";
                }
            }
        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Brands Admin";
        $view = "views/v_brands.tpl";
        $smarty->assign('view', $view);
        $smarty->assign('title', $title);
        $smarty->assign('brands', $brands);
        $smarty->display("layout.tpl");
    }
}
