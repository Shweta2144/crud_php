<?php
// read_users.php

require 'db_config.php';

$sql = 'SELECT * FROM users';
$stmt = $pdo->query($sql);

$users = $stmt->fetchAll();

foreach ($users as $user) {
    echo "ID: " . $user['id'] . "<br>";
    echo "Name: " . $user['name'] . "<br>";
    echo "Email: " . $user['email'] . "<br><br>";
}
?>
