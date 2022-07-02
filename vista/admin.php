<?php require "../php/session_start.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once'../inc/headpages.php'; ?>
</head>
<body>
    <?php
        if(!isset($_GET['view']) || $_GET['view']=="" ){
                $_GET['view']="login_admin";               
        }
        if(is_file("./".$_GET['view'].".php") && $_GET['view']!= "login_admin" && $_GET['view']!= "404"){
            
            if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['email']) || $_SESSION['email']=="")){
                    include "./logout.php";
                    exit();
                }
            
            include"../inc/headerpages.php";            
            include"./".$_GET['view'].".php";  
        }
        else{
            
            if($_GET['view']=="login_admin"){
                include "./login_admin.php";               
            }
            else{
                include "./404.php";    
            }
        }
    ?>
</body>
</html>