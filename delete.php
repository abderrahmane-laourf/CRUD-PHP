<?php
    include("db.php");
    $id = $_GET["id"] ?? null;

    if(!$id){
        die("connexion error");
    }

    $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
    $stmt->execute([':id' => $id]);
    header("Location: index.php");
    exit;
?>