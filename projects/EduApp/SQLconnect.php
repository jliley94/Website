<?php

require_once "SQLconstants.php";

$error = ""; //zero the passed in error parameter
$connection = mysqli_connect(SQLHOST, SQLUSER, SQLPASSWORD, HOSTDB);
if (!$connection) {
    $connection = false;
    echo "connecton to database failed " . mysqli_connect_error();
}