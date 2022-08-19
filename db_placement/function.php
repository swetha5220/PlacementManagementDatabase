<?php
function initiate()
{
    if(!isset($_SESSION["login_user"])){
        header("Location:adminlogin.php");
    }
}