<?php
    include "include/session.php";
    if(isset($_POST['submit'])){
        //print_r($_POST); die();
        $result = $app->createAccount($_POST);
        if ($result['status']==0) {
            $_SESSION['msg']=$result['message'];
            header("location: ../register.php");
        } else {
            $_SESSION['msg']="Account Created";
            header("location: ../login.php");
        }
        
        
    }else{
        header("location: ../register.php");
    }
?>