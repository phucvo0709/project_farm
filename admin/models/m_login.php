<?php
require_once("database.php");
class M_login extends database
{
    public function login(){
        if(isset($_POST["btn_login"]))
		{
			$username=$_POST["username"];
            $password=$_POST["password"];
			$this->check($username,$password);
		}
    }
    public function check($username, $password){
        $hasformat="$2y$10$";
        $salt="haimuoihaihaimuoihai22";
        $has_and_salt=$hasformat.$salt;
        $passwordSecurity = crypt($password,$has_and_salt);
        $sql="select * from admin where username=? and password=?";
		$this->setQuery($sql);
        return $this->loadRow(array($username,$passwordSecurity));
    }
}
?>