<?php
include("controllers/c_order_status.php");
$c_order_status = new C_order_status();
$c_order_status->show_order_status();
?>