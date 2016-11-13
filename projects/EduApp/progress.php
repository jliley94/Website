<?php
session_start();
//header 
require_once "header.php";
//connect to database + select lessons content
?>
<div class="body">
    <div class="jumbotron">
        <div class="container">
            <h1>Progress!</h1>
            <p>On this page you can view your progress, hopefully this will encourage you to keep trying.</p>
        </div>
    </div>
    <div class="media">
        <div class="media-left media-top">
            <img class="media-object" src="images/fire.png" alt="Youre on fire!">
        </div>
        <div class="media-body">
            <h4 class="media-heading">Your current Streak</h4>
            <p>The best way to learn is to constantly practice, just a little bit every day can make a huge difference. This application shows you how many days in a row you have logged on to encourage you to keep coming back and get an as high streak as possible </p>
            <p> Your current streak is: <?php echo $_SESSION['streak']; ?> </p>
        </div>
    </div>
    <?php
    $hiraganaID = array();
    //connect to database + select Hiragana data
    require_once "selectLowHiragana.php";
    if ($result) {
    //run through table checking if info submitted matches any in table
    $rows = mysqli_num_rows($result);
    $tmpRow = mysqli_fetch_assoc($result);
    $hiraganaID[] = $tmpRow['hiraganaID'];
    $ratio = $tmpRow['ratio'];
    }
    $page = 0;
    require_once "selectThisHiragana.php";
    if ($result) {
    $row = mysqli_fetch_assoc($result);
    $english = $row['english'];
    $image = $row['image'];
    $audio = $row['audio'];
    }
    ?>
    <div class="media">
        <div class="media-left media-middle">
            <img class="media-object" hieght='64px' width='64px' src="<?php echo $image; ?>" alt="<?php echo $english; ?>">
        </div>
        <div class="media-body">
            <h4 class="media-heading">Where you need to improve</h4>
            <p>This application tracks how well youre doing, so that you can improve on your weakest points, lets take a look at where you need to improve. Here is you lowest scoring answer.</p>
            <p><b><?php echo $english; ?></b> - you've only got it right <?php echo $ratio * 100; ?> % of the time
        </div>
    </div>
    <div class="media">
        <div class="media-left media-bottom">
            <img class="media-object" src="images/arrow.png" alt="keep it up!">
        </div>
        <div class="media-body">
            <h4 class="media-heading">Your progress</h4>
            <p>The way this application works, you have to complete one module before you can start another. Simple! Lets have a look at the amount you have completed</p>
            <?php
            require_once "selectThisUser.php";
            $row = mysqli_fetch_assoc($result);
            $level = $row['level'];
            ?>
            <div class="col-md-1"></div>
            <div class="col-md-9">
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $level * 10 ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $level * 10; ?>%">               
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php
//footer 
    require_once "footer.php";
    ?>
