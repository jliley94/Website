<?php

//have any achievements been unlocked
//steps
if ($level == 1) {
    $thisAcheievement = 1;
    $reward = true;
    if ($connection) {
        //connection successful
        $result = mysqli_query($connection, "select * from userachievements where userID = '" . $_SESSION['userID'] . "'");
        if (!$result) {
            echo mysqli_error($connection);
        } else {
            $rows = mysqli_num_rows($result);
            for ($i = 0; $i < $rows; $i++) {
                $tmpRow = mysqli_fetch_assoc($result);
                $achievementID = $tmpRow['achievementID'];
                if ($achievementID == $thisAcheievement) {
                    //dont do it
                    $reward = false;
                }
            }
            if ($reward == true) {
                //add
                $query = "INSERT INTO userachievements (userID, achievementID) VALUES ('" . $_SESSION['userID'] . "', '$thisAcheievement');";
                $addAchievement = mysqli_query($connection, $query);
                $_SESSION['alertType'] = 2;
                $_SESSION['message'] = "Achievement Unlocked! Visit the Achievements page to see more..";
            }
        }
    }
}
//perfect 10
if ($_SESSION['quizStreak'] == 10) {
    $thisAcheievement = 2;
    $reward = true;
    if ($connection) {
        //connection successful
        $result = mysqli_query($connection, "select * from userachievements where userID = '" . $_SESSION['userID'] . "'");
        if (!$result) {
            echo mysqli_error($connection);
        } else {
            $rows = mysqli_num_rows($result);
            for ($i = 0; $i < $rows; $i++) {
                $tmpRow = mysqli_fetch_assoc($result);
                $achievementID = $tmpRow['achievementID'];
                if ($achievementID == $thisAcheievement) {
                    //dont do it
                    $reward = false;
                }
            }
            if ($reward == true) {
                //add
                $query = "INSERT INTO userachievements (userID, achievementID) VALUES ('" . $_SESSION['userID'] . "', '$thisAcheievement');";
                $addAchievement = mysqli_query($connection, $query);
                $_SESSION['alertType'] = 2;
                $_SESSION['message'] = "Achievement Unlocked! Visit the Achievements page to see more..";
            }
        }
    }
}
//steps
if ($_SESSION['streak'] >= 7) {
    $thisAcheievement = 3;
    $reward = true;
    if ($connection) {
        //connection successful
        $result = mysqli_query($connection, "select * from userachievements where userID = '" . $_SESSION['userID'] . "'");
        if (!$result) {
            echo mysqli_error($connection);
        } else {
            $rows = mysqli_num_rows($result);
            for ($i = 0; $i < $rows; $i++) {
                $tmpRow = mysqli_fetch_assoc($result);
                $achievementID = $tmpRow['achievementID'];
                if ($achievementID == $thisAcheievement) {
                    //dont do it
                    $reward = false;
                }
            }
            if ($reward == true) {
                //add
                $query = "INSERT INTO userachievements (userID, achievementID) VALUES ('" . $_SESSION['userID'] . "', '$thisAcheievement');";
                $addAchievement = mysqli_query($connection, $query);
                $_SESSION['alertType'] = 2;
                $_SESSION['message'] = "Achievement Unlocked! Visit the Achievements page to see more..";
            }
        }
    }
}

    