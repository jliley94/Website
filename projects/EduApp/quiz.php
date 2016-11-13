<?php
session_start();
//boot anyone not logged in back to homepage
if (!isset($_SESSION['userID'])) {
    header("location: index.php");
    exit();
} else if (isset($_SESSION['training'])) {
    header("location: training.php");
    exit();
}
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
    $_SESSION['quizStreak'] = 0;
    $_SESSION['level'] = $_GET['qID'];
}
if (isset($_SESSION['outcome'])) {
    if ($_SESSION['outcome'] == true) {
        //last question answered correctly
        $_SESSION['score'] ++;
        $_SESSION['quizStreak'] ++;
    } else {
        $_SESSION['quizStreak'] = 0;
    }
    unset($_SESSION['outcome']);
}
if ($_SESSION['score'] == 10) {
    //Quiz finished
    header("location: results.php");
    exit();
}
$hiraganaID = array();
$english = array();
$image = array();
$audio = array();

//connect to database + select Hiragana data
require_once "selectRandHiragana.php";
if ($result) {
    //run through table checking if info submitted matches any in table
    $correctAnswer = Rand(0, 4);
    $rows = mysqli_num_rows($result);
    for ($i = 0; $i < 6; $i++) {
        $tmpRow = mysqli_fetch_assoc($result);
        $hiraganaID[] = $tmpRow['hiraganaID'];
        $english[] = $tmpRow['english'];
        $image[] = $tmpRow['image'];
        $audio[] = $tmpRow['audio'];
    }
}

//header 
require_once "header.php";
?>
<div class="ProgressBar">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $_SESSION['score'] * 10 ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_SESSION['score'] * 10; ?>%">               
                </div>
            </div>
        </div>
    </div>
    <?php
    //randomly pick which type of question
    $thisQuestion = rand(1, 2);
    if ($thisQuestion == 1) {
        //trans from Hir - Eng
        ?>
        <div class="question">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo $image[$correctAnswer]; ?>" id="image" alt="Hiragana">
                        <audio id="audio" src="<?php echo $audio[$correctAnswer]; ?>"></audio>
                        <div class="caption">
                            <h3>Which character is this?</h3>
                            <p>click the image to get an audio hint...</p>
                            <div class="answers">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="btn-group btn-group-lg" role="group" aria-label="...">

                                        <form action="checkAnswer.php" method="post">
                                            <input type="hidden" name="HiraganaID" value="<?php echo $hiraganaID[$correctAnswer]; ?>">
                                            <?php
                                            //list of answers
                                            for ($i = 0; $i < 5; $i++) {
                                                ?>
                                                <button type="submit" class="btn btn-default" name="answer" value="<?php
                                        if ($correctAnswer == $i) {
                                            echo "correct";
                                        } else {
                                            echo "wrong";
                                        }
                                                ?>">
                                                        <?php
                                                            echo $english[$i];
                                                            if ($correctAnswer == $i) {
                                                                echo "< C";
                                                            }
                                                            ?>
                                                </button>
                                                <?php
                                            }
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        //trans from eng - hir
        ?>
        <div class="question">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <h1 align="center"><?php echo $english[$correctAnswer]; ?></h1>
                        <div class="caption">
                            <h3>Which character is this?</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="answers">
            <div class="col-md-12">
                <div class="btn-group btn-group-lg" role="group" aria-label="...">
                    <form action="checkAnswer.php" method="post">
                        <input type="hidden" name="HiraganaID" value="<?php echo $hiraganaID[$correctAnswer]; ?>">
                        <div class = "col-md-1"></div>
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            ?>
                            <div class = "col-md-2">
                                <button type="submit" class="btn btn-default" name="answer" value="<?php
                    if ($correctAnswer == $i) {
                        echo "correct";
                    } else {
                        echo "wrong";
                    }
                            ?>">
                                        <?php
                                            echo "Answer";
                                            if ($correctAnswer == $i) {
                                                echo "< C";
                                            }
                                            ?>
                                </button>
                                <a class = "thumbnail"><img src ="<?php echo $image[$i]; ?>" id="image" alt ="Hiragana"></a>  
                            </div>
                            <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
//footer 
    require_once "footer.php";
    ?>

    <script>
        $(document).ready(function () {
            $("#image").click(function () {
                // Do your stuff here
                document.getElementById('audio').play();
            });
        });
    </script>