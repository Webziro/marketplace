<?php
    include "../include/init.php";
    if(isset($_POST['submit'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $result = $app->Login($email, $password);
        if ($result['status']==0) {
            $_SESSION['msg']=$result['message'];
            header("location: ../login.php");
        } else {
            $_SESSION['userid']=$result['userid'];
            header("location: ../shop-grid.php");
        }       
        
    }else{
        header("location: ../login.php");
    }
    
?>