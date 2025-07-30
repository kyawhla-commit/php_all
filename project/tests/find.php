<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL());

$user = $table->find("alice@gmail.com", "password");

if($user) {
    // print_r($user);
    echo "User found";
} else {
    echo "User not found";
}