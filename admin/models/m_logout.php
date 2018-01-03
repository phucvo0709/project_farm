<?php
require_once("database.php");
class M_logout extends database
{
    function logout(){
        session_destroy();
		header("location:login.php");
    }
}
?>
