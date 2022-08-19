<?php 

session_start();
include("function.php");
initiate();
session_destroy();

header('location:adminlogin.php');
?>