<?php
    include "include/session.php";
    $id = $_GET['id'];
    $sql_remove = 'DELETE FROM '. cart .' WHERE id = :cart_id';
    $stmt = $pdo->prepare($sql_remove);
    $stmt->bindValue(':cart_id', $cart_id, PDO::PARAM_INT);
    $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo 'Item removed from cart.';
        } else {
            echo 'Item not found in cart.';
        }
?>