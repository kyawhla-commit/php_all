<?php
$name = $_POST['name'];
$value = $_POST['value'];
$id = $_POST['id'];

$sql = "UPDATE roles SET name=:name, value=:value WHERE id = $id";

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '');
$statement = $db->prepare($sql);
$statement->execute(["name" => $name, "value" => $value]);

header("location: index.php");