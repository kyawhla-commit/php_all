<?php

$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];

move_uploaded_file($tmp_name,"photos/$name");

print_r($_FILES);