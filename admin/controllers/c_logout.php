<?php
    session_start();
    include("check_session.php");
    class C_logout{
        function show_logout(){
        //models
        include("models/m_logout.php");
        $m_logout = new M_logout();
        $m_logout->logout();
    }
}
?>