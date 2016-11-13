<?php

require_once "SQLconnect.php";

if ($connection) {
    //connection successful
    $result = mysqli_query($connection, "select * from usermarks where userid = '" . $_SESSION['userID'] . "' ORDER BY ratio ASC");
    if (!$result) {
        echo mysqli_error($connection);
    }
}