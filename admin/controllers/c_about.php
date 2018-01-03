<?php
session_start();
include("check_session.php");
class C_about {
    function show_about(){
        unset($_SESSION['success']);
        //Model
        include("models/m_about.php");
        $m_about = new M_about();
        $about = $m_about->about();
        $image = $about[0]->image;
        $content = $about[0]->content;

        if(isset($_POST['btn_update'])){
            $content = $_POST['content'];
            
            //update hinh
            $target_dir = "../public/img/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            $hinh = "";
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
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
                $hinh = $image;
                $update = $m_about->update_about($hinh,$content);
                if($update){
                    $_SESSION['success']="Update about success";
                }
            }
            if($hinh != ""){
                $update = $m_about->update_about($hinh,$content);
                if($update){
                    $_SESSION['success']="Update about success";
                }
            }

        }
        //Controller
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_about.tpl";
        $title = "About Admin";
        $smarty->assign("title",$title);
        $smarty->assign("view", $view);
        $smarty->assign("image", $image);
        $smarty->assign("content", $content);
        $smarty->display("layout.tpl");
    }
}
?>