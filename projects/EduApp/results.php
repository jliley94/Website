<?php
session_start();
$level = $_SESSION['level'];

require_once "selectThisUser.php";
$row = mysqli_fetch_assoc($result);
$userLevel = $row['level'];
$levelUp = false;

if ($userLevel == $level) {
    //they have leveled up (can access more content)
    $userLevel++;
    $levelUp = true;

    $updateUser = "UPDATE users SET level='$userLevel' where userID= '" . $_SESSION['userID'] . "'";
    $newLevel = mysqli_query($connection, $updateUser);
}

//achievements
require_once "checkForAchievements.php";

unset($_SESSION['outcome']);
unset($_SESSION['score']);
unset($_SESSION['level']);
unset($_SESSION['quizStreak']);
unset($_SESSION['training']);

//header 
require_once "header.php";
//connect to database + select lessons content
?>
<div class="body">
    <div class="jumbotron">
        <div class="container">
            <h1>Well Done!</h1>
            <p>You've completed a quiz, below shows what youve unlocked. Keep at it to unlock more content.</p>
            <p><a class="btn btn-primary btn-lg" href="achievements.php" role="button">See all achievements</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-2"></div>
        <div class="col-sm-6 col-md-10">
            <?php if ($levelUp == true) { ?>
                <div class="col-sm-6 col-md-10">
                    <div align="center" class="thumbnail">
                        <img src="images/lesson<?php echo $userLevel; ?>.png" alt="Lesson Pic">
                        <div class="caption">
                            <h3>You have unlocked a new lesson</h3>
                            <p>You can now access lesson <?php echo $userLevel; ?> from the Course Overview page.</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <?php
//footer 
    require_once "footer.php";
    ?>
