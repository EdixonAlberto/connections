<?php

require __DIR__ . '../../vendor/autoload.php';
require './libraries/PhpDotEnv.php';
require './database/connection.php';

$db = new DB('mysql');
$conn = $db->connect();

// CREATE

// $query = $conn->prepare("
//   INSERT INTO users(name, email, age)
//   VALUES('Edixon', 'edixonalbertto@gmail.com', 0)
// ");
// $query->execute();
// $error = $query->errorInfo();
// var_dump($error);

// READ

// $query = $conn->prepare("SELECT * FROM users");
// $result = $query->execute();
// if ($result) {
//   $users = $query->fetch(PDO::FETCH_OBJ);
//   var_dump($users);
// }

// DELETE
