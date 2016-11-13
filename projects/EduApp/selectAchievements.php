<?php

require_once "SQLconnect.php";

if ($connection) {
    //connection successful
    $result = mysqli_query($connection, "select * from achievements");
    if (!$result) {
        echo mysqli_error($connection);
    }
}