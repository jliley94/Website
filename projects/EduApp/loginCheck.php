<?php

session_start();
//get submited pass and username
$username = $_POST["loginUsername"];
$password = $_POST["loginPassword"];
$outcome = false;

//connect to database + select users
require_once "selectUsers.php";
//if connection established and data retreived
if ($result) {
    //run through table checking if info submitted matches any in table
    $rows = mysqli_num_rows($result);
    for ($i = 0; $i < $rows; $i++) {
        $tmpRow = mysqli_fetch_assoc($result);
        $thisUserID = $tmpRow['userID'];
        $thisUsername = $tmpRow['username'];
        $thisPassword = $tmpRow['password'];
        $thisLastActive = $tmpRow['lastActive'];
        $thisStreak = $tmpRow['streak'];
        if ($thisUsername == $username) {
            //username correctly entered
            if ($thisPassword == $password) {
                //info entered correctly
                //check day streak
                $outcome = true;
                date_default_timezone_set('Europe/London');
                $todaysDate = date("Y-m-d");
                $yesterday = date('Y-m-d', strtotime($todaysDate . ' -1 day'));
                if ($yesterday == $thisLastActive) {
                    //user logged in yesterday
                    $thisStreak++;
                    $updateStreak = "UPDATE users SET lastActive='$todaysDate', streak='$thisStreak' WHERE userID='$thisUserID';";
                    $newStreak = mysqli_query($connection, $updateStreak);

                    $_SESSION['alertType'] = 2;
                    $_SESSION['message'] = "Well done! Your streak has grown";
                } else if ($todaysDate == $thisLastActive) {
                    //user logged in today already
                    $_SESSION['alertType'] = 2;
                    $_SESSION['message'] = "Welcome back!";
                } else {
                    //user has lost his streak
                    $thisStreak = 0;
                    $updateStreak = "UPDATE users SET lastActive='$todaysDate', streak='$thisStreak' WHERE userID='$thisUserID';";
                    $newStreak = mysqli_query($connection, $updateStreak);

                    $_SESSION['alertType'] = 1;
                    $_SESSION['message'] = "Login every day to build up your streak.";
                }
                $_SESSION['userID'] = $thisUserID; //create a session for this user 
                header("location: CourseOverview.php");
                exit();
            }
        }
    }
    if ($outcome == false) {
        $_SESSION['alertType'] = 1;
        $_SESSION['message'] = "Login Failed, make sure you used the correct username and password";
        header("location: index.php");
        exit();
    }
}
    
