<?php
session_start();
//get submited pass and username
$username = $_POST["registerUsername"];
$password = $_POST["registerPassword"];
$outcome = true;

//connect to database + select users
require_once "selectUsers.php";
//if connection established and data retreived
if ($result) {
    //run through table checking if user already exists 
    $rows = mysqli_num_rows($result);
    for ($i = 0; $i < $rows; $i++) {
        $tmpRow = mysqli_fetch_assoc($result);
        $thisUsername = $tmpRow['username'];
        if ($thisUsername == $username) {
            //cant use that username
            $outcome = false;
            $_SESSION[alertType] = 1;
            $_SESSION[message] = "Username Taken";
            header("location: index.php");
            exit();
        }
    }
    if ($outcome == true) {
        //can create account
        $query = "INSERT INTO users (username, password, level) VALUES ('$username', '$password', 1);";
        $addUser = mysqli_query($connection, $query);
        if (!$addUser) {
            //cound not create user
            echo mysqli_error($connection);
            $_SESSION['alertType'] = 1;
            $_SESSION['message'] = "Could not create account";
            header("location: index.php");
            exit();
        } else {
            //user added to database
            $_SESSION['alertType'] = 2;
            $_SESSION['message'] = "Account Created";
            header("location: index.php");
            exit();
        }
    }
}