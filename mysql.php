<?php

require 'pdoquery.php';

$dsn = "mysql:dbname=senai;host=localhost";
$user = "developer";
$password = "developer";

performQuery($dsn, $user, $password);

?>