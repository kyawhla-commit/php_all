<?php

include("vendor/autoload.php");
use Carbon\Carbon;
use App\Math\Circle;
use Libs\Auth;


echo Carbon::now()->addDay(5);
echo "<br>";

$circle = new Circle;
$circle->area(10);

$auth = new Auth;
$auth->login(); 