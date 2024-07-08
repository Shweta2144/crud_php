<?php
// delete_user.php

require 'db_config.php';

$id = 1;

$sql = 'DELETE FROM users WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

echo "User with ID $id deleted successfully.";
?>
