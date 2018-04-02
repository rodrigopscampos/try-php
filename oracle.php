<?php

require 'pdoquery.php';

$dsn = "oci:dbname=127.0.0.1:1521/XE";
$user = "intelidata";
$password = "intelidata";

performQuery($dsn, $user, $password);

?>