<?php
// create_user.php

require 'db_config.php';

$name = 'John Doe';
$email = 'john.doe@example.com';

$sql = 'INSERT INTO users (name, email) VALUES (:name, :email)';
$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => $name, 'email' => $email]);

echo "User created successfully with ID: " . $pdo->lastInsertId();
?>
