<?php
session_start();
//boot anyone not logged in back to homepage
if (!isset($_SESSION['userID'])) {
    header("location: index.php");
    exit();
}
if (!isset($_SESSION['score'])) {
    $_SESSION['quizStreak'] = false;
    $_SESSION['training'] = true;
    $_SESSION['score'] = 0;
    $_SESSION['level'] = 10;
}
if (isset($_SESSION['outcome'])) {
    if ($_SESSION['outcome'] == true) {
        //last question answered correctly
        $_SESSION['score'] ++;
    }
    unset($_SESSION['outcome']);
}
if ($_SESSION['score'] == 10) {
    //Quiz finished
    header("location: results.php");
    exit();
}
$hiraganaID = array();
$hiragID = array();
$english = array();
$image = array();
$audio = array();
//connect to database + select Hiragana data
require_once "selectLowHiragana.php";
if ($result) {
    //$rows = mysqli_num_rows($result);
    $result2 = $result;
    $correctAnswer = Rand(0, 4);
    for ($i = 0; $i < 6; $i++) {
        $tmpRow = mysqli_fetch_assoc($result2);
        $hiraganaID[] = $tmpRow['hiraganaID'];
    }
}
require_once "selectRandHiragana.php";
if ($result) {
    $rows = mysqli_num_rows($result);
    //$row = mysqli_fetch_assoc($result);
    for ($j = 0; $j < $rows; $j++) {
        $row = mysqli_fetch_assoc($result);
        $hiragID[] = $row['hiraganaID'];
        $english[] = $row['english'];
        $image[] = $row['image'];
        $audio[] = $row['audio'];
    }
}
$foundID = array();
$foundEn = array();
$foundIm = array();
$foundAu = array();

$findCount = count($hiraganaID);
$thisCount = count($hiragID);
for ($x = 0; $x < $findCount; $x++) {
    $findMe = $hiraganaID[$x];
    for ($y = 0; $y < $thisCount; $y++) {
        $thisOne = $hiragID[$y];
        if ($findMe == $thisOne) {
            $foundID[] = $hiragID[$y];
            $foundEn[] = $english[$y];
            $foundIm[] = $image[$y];
            $foundAu[] = $audio[$y];
        }
    }
}
//connect to database + select Hiragana data
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
                        <img src="<?php echo $foundIm[$correctAnswer]; ?>" id="image" alt="Hiragana">
                        <audio id="audio" src="<?php echo $foundAu[$correctAnswer]; ?>"></audio>
                        <div class="caption">
                            <h3>Which character is this?</h3>
                            <p>click the image to get an audio hint...</p>
                            <div class="answers">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="btn-group btn-group-lg" role="group" aria-label="...">

                                        <form action="checkAnswer.php" method="post">
                                            <input type="hidden" name="HiraganaID" value="<?php echo $foundID[$correctAnswer]; ?>">
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
                                                            echo $foundEn[$i];
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
                        <input type="hidden" name="HiraganaID" value="<?php echo $foundID[$correctAnswer]; ?>">
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