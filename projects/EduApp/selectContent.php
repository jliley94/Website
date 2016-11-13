<?php

require_once "SQLconnect.php";

if ($connection) {
    //connection successful
    $result = mysqli_query($connection, "select * from content where lessonID='$lessonID'");
    if (!$result) {
        echo mysqli_error($connection);
    }
}