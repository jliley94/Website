<?php

require_once "SQLconnect.php";

if ($connection) {
    //connection successful
    $result = mysqli_query($connection, "select * from content where hiraganaID = '" . $hiraganaID . "'");
    if (!$result) {
        echo mysqli_error($connection);
    }
}