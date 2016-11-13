<?php
session_start();

$answer = $_POST['answer'];
$hiraganaID = $_POST['HiraganaID'];
$level = $_SESSION['level'];
$userID = $_SESSION['userID'];
$exists = false;

//update database scores
//connect to database + select marks
require_once "selectUserMarks.php";
//if connection established and data retreived
if ($result) {
    //see if users answered this question before
    $rows = mysqli_num_rows($result);
    for ($i = 0; $i < $rows; $i++) {
        $tmpRow = mysqli_fetch_assoc($result);
        $thisHiraganaID = $tmpRow['hiraganaID'];
        if ($thisHiraganaID == $hiraganaID) {
            //answered before, needs to be updated
            $exists = true;
            $markID = $tmpRow['markID'];
            if ($answer == 'correct') {
                $correct = $tmpRow['correct'] + 1;
                $wrong = $tmpRow['wrong'];

                $_SESSION['outcome'] = true;
                $_SESSION['alertType'] = 2;
                $_SESSION['message'] = "Correct!";
            } else {
                $correct = $tmpRow['correct'];
                $wrong = $tmpRow['wrong'] + 1;
                $_SESSION['alertType'] = 1;
                $_SESSION['message'] = "Wrong!";
                $_SESSION['outcome'] = false;
                //show answer
            }
            $ratio = ($correct / ($correct + $wrong));
            $query = "UPDATE usermarks SET correct='$correct', wrong='$wrong', ratio='$ratio' WHERE markID='$markID';";
            $updateMark = mysqli_query($connection, $query);
        }
    }
    //new question needs to be created
    if ($exists == false) {
        if ($answer == 'correct') {
            $correct = 1;
            $wrong = 0;
            $_SESSION['outcome'] = true;
            $_SESSION['alertType'] = 2;
            $_SESSION['message'] = "Correct";
        } else {
            $correct = 0;
            $wrong = 1;

            $_SESSION['outcome'] = false;
            //Show Answer
        }
        $ratio = $correct;
        $query = "INSERT INTO usermarks (userID, hiraganaID, correct, wrong, ratio) VALUES ('$userID', '$hiraganaID', '$correct', '$wrong', '$ratio');";
        $addMark = mysqli_query($connection, $query);
    }
}
if ($answer == 'correct') {
    header("location: quiz.php?qID=$level");
    exit();
} else
{
    header("location: reminder.php?hID=$hiraganaID");
    exit();
}