<?php 
session_start();
include('../content/head.php');
if(isset($_SESSION['username'])&& !empty($_SESSION['username']))
    include('manage.php');
else
    include('login.php');
include('../content/footer_includes.php');
?>