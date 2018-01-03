<?php
if (isset($_SESSION['id']) == false) {
    //If the user is not logged in, redirect the website to the login page
    header('Location: login.php');
}