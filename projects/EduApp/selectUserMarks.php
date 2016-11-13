<?php

require_once "SQLconnect.php";

if ($connection) {
    //connection successful
    $result = mysqli_query($connection, "select * from usermarks where userID = '" . $userID . "'");
    if (!$result) {
        echo mysqli_error($connection);
    }
}