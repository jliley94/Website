<?php
session_start();
//boot anyone not logged in back to homepage
if (!isset($_SESSION['userID'])) {
    header("location: index.php");
    exit();
}
//get users information
require_once "selectThisUser.php";
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$level = $row['level'];
$_SESSION['streak'] = $row['streak'];

unset($_SESSION['outcome']);
unset($_SESSION['score']);
unset($_SESSION['level']);
unset($_SESSION['quizStreak']);
unset($_SESSION['training']);
//header 
require_once "header.php";
?>
<div class="body">
    <div class="Lessons">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Section 1</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <?php
                            //connect to database + select lessons data
                            require_once "selectLessons.php";
                            //if connection established and data retreived
                            if ($result) {
                                //run through table checking if info submitted matches any in table
                                $rows = mysqli_num_rows($result);
                                for ($i = 0; $i < $rows; $i++) {
                                    $j = $i + 1;
                                    $tmpRow = mysqli_fetch_assoc($result);
                                    $lessonTitle = $tmpRow['title'];
                                    $lessonDesc = $tmpRow['desc'];
                                    $lessonImg = $tmpRow['image'];
                                    ?>
                                    <div class="col-sm-3 col-md-3">
                                        <div class="thumbnail">
                                            <?php
                                            if ($level >= $j) {
                                                ?>
                                                <img src="<?php echo $lessonImg; ?>" alt="lesson <?php echo $j; ?>">
                                                <div class="caption">
                                                    <h3 align="center"><?php echo $lessonTitle; ?></h3>
                                                    <p><?php echo $lessonDesc; ?></p>
                                                    <p align="center"><a href="lesson.php?lID=<?php echo $j; ?>" class="btn btn-info" role="button">Start Lesson</a> <a href="quiz.php?qID=<?php echo $j; ?>" class="btn btn-success" role="button">Skip to Quiz</a></p>
                                                </div>
                                                <?php
                                            } else {
                                                ?>
                                                <img src="images/locked.png" alt="locked">
                                                <div class="caption">
                                                    <h3>Lesson Locked</h3>
                                                    <p>You must complete the previous lesson before this one is unlocked.</p>
                                                    <p align="center"><a href="#" class="btn btn-default" role="button">Locked</a></p>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>       
                                    <?php
                                }
                            }
                            ?>

                            <div class="col-sm-3 col-md-3">
                                <div class="thumbnail">
                                    <img src="images/train.png" alt="Training">
                                    <div class="caption">
                                        <h3 align="center">Train your weak areas</h3>
                                        <p>After you have tried a few of the lessons, why not target your problem areas, with this quiz that does just that</p>
                                        <p align="center"><a href="training.php" class="btn btn-danger" role="button">Start Training</a></p>
                                    </div>
                                </div>
                            </div> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//footer 
require_once "footer.php";
?>
