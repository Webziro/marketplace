

<?php
    include "include/session.php";
    #Passing an id of "urlId" to the link in index.php on Department Category.
    if (isset($_GET['urlId']) && $_GET['urlId'] !='' && is_numeric($_GET['urlId']) && $_GET['urlId'] !=0){
    $id = $_GET['urlId'];
    $stmt = $this->prepare("SELECT cat_Id as _id, catName as _Name, catStatus as _status FROM  " . category . " WHERE catStatus = 'True'  ORDER BY cat_Id DESC LIMIT 10");
    }
?>


