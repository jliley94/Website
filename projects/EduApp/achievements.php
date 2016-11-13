<?php
session_start();
//header 
require_once "header.php";
//connect to database + select lessons content
?>
<div class="body">
    <div class="jumbotron">
        <div class="container">
            <h1>Achievements!</h1>
            <p>On this page you can view your achievements that you have gained while using this application.</p>
        </div>
    </div>

    <?php
    //achievements
    require_once "selectUserAchievements.php";
    if ($result) {
        //run through table checking if user has achievements 
        $theseachievementIDs = array();
        $rows = mysqli_num_rows($result);
        for ($i = 0; $i < $rows; $i++) {
            $tmpRow = mysqli_fetch_assoc($result);
            $theseachievementIDs[] = $tmpRow['achievementID'];
        }
    }
    require_once "selectAchievements.php";
    if ($result) {
        //get acheievement details
        ?>
        <div class="row">
        <div class="col-sm-6 col-md-2"></div>
        <div class="col-sm-6 col-md-10">
            <?php
        $rows = mysqli_num_rows($result);
        for ($i = 0; $i < $rows; $i++) {
            $tmpRow = mysqli_fetch_assoc($result);
            $thisAchievement = $tmpRow['achievementID'];
            if ($theseachievementIDs[$i] == $thisAchievement) {
                $title = $tmpRow['title'];
                $desc = $tmpRow['desc'];
                $image = $tmpRow['image'];
                ?>
                <div class="col-sm-6 col-md-2">
                    <div class="thumbnail">
                        <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                        <div class="caption">
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $desc; ?></p>
                        </div>
                    </div>
                </div>
            <?php
        }
    }
    ?>
            </div>
    </div>
    <?php
}
?>

<?php
//footer 
require_once "footer.php";
?>
