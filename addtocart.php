<?php
    include "include/session.php";

    #the userId checks if the user is logged in

    if (isset($userId)) {
        # id checks if is set in the url from the id passed to the url
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            if(is_numeric($id)){
                $y = $app->addtocart($id, $userId);
                if($y==1){
                    $_SESSION['msg']="Added to cart";
                    header("location:shop.php");
                }else{
                    $_SESSION['msg']="Error";
                    header("location:index.php");
                }
            }
        }
    } else {
        # code...
        $_SESSION['msg']="Please Login First";
        header("location:index.php");
    }
    
    
?>