<?php
session_start();
include("check_session.php");
class C_informations
{
    public function show_informations()
    {
        unset($_SESSION['success']);
        //Model
        include("models/m_informations.php");
        $m_informations = new M_informations();
        $informations = $m_informations->informations();
        $add_information = $m_informations->add_information();
        if(isset($_POST['btn_update'])){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];

            //update hinh
            $target_dir = "../public/img/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            $uploadOk = 1;
            $hinh = "";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $out = $m_informations->read_information_id($id);
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
                $update = $m_informations->update_information($title,$content,$hinh,$id);
                if($update){
                    $_SESSION['success']="Update information success";
                }
            }
            if($hinh != ""){
                $update = $m_informations->update_information($title,$content,$hinh,$id);
                if($update){
                    $_SESSION['success']="Update information success";
                }
            }
        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_admin();
        $title = "Informations Admin";
        $view = "views/v_informations.tpl";
        $smarty->assign('view', $view);
        $smarty->assign('title', $title);
        $smarty->assign('informations', $informations);
        $smarty->display("layout.tpl");
    }
}
