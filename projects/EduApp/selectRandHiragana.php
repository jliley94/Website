<?php

require_once "SQLconnect.php";

if ($connection) {
    //connection successful
    $result = mysqli_query($connection, "select * from hiragana where level <= '" . $_SESSION['level'] . "' ORDER BY RAND()");
    if (!$result) {
        echo mysqli_error($connection);
    }
}