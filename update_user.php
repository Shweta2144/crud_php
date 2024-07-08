<?php
// update_user.php

require 'db_config.php';

$id = 1;
$newName = 'Jane Doe';

$sql = 'UPDATE users SET name = :name WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => $newName, 'id' => $id]);

echo "User with ID $id updated successfully.";
?>
