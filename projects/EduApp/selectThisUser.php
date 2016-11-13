<?php

require_once "SQLconnect.php";

if ($connection) {
    //connection successful
    $result = mysqli_query($connection, "select * from users where userID = '" . $_SESSION['userID'] . "'");
    if (!$result) {
        echo mysqli_error($connection);
    }
}