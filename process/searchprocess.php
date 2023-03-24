<?php
    include "include/session.php";

           if(isset($_GET['search'])) {
            $search = $_GET['search'];
            // Prepare statement
            $stmt = $pdo->prepare("SELECT * FROM " . products . " WHERE name LIKE :search");
            // Bind parameters
            $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
            // Execute statement
            $stmt->execute();
            // Fetch results
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}