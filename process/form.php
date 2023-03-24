<?php
    include "include/session.php";
    if(isset($_POST['submit'])){
        $r = $app->contactUs($_POST);
        if($r['status']==1){
            $_SESSION['msg'] ='<div style="color:red; padding: 12px;">Message successfully sent!</div>';

            header("location:../contact.php");
        }else{
            $_SESSION['msg'] = $r['message'];
            header("location:../contact.php");
        }
    }
?>