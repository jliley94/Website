<?php
session_start();
//header 
$level = $_SESSION['level'];
$hiraganaID = $_GET['hID'];
require_once "header.php";
//connect to database + select lessons content
require_once "selectThisContent.php";
//if connection established and data retreived
    //run through table checking if info submitted matches any in table
    $contRow = mysqli_fetch_assoc($result);
    $hiraID = $contRow['hiraganaID'];
    $title = $contRow['title'];
    $desc = $contRow['description'];
    $getHiragana = mysqli_query($connection, "select * from hiragana where hiraganaID = '" . $hiraganaID . "'");
    if (!$getHiragana) {
        echo mysqli_error($connection);
    }
$row = mysqli_fetch_assoc($getHiragana);
$thisHiraganaID = $row['hiraganaID'];
$english = $row['english'];
$image = $row['image'];
$audio = $row['audio'];
?>
<div class="body">
    <div class="lessonContent">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="media">
                    <?php
                    if ($image <> null) {
                        ?>     
                        <div class="media-left media-middle">
                            <a href="#">
                                <img id='image' class="media-object" src="<?php echo $image; ?>" alt="<?php echo $english; ?>">
                                <audio id="audio" src="<?php echo $audio; ?>"></audio>
                            </a>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $title; ?></h4>
                        <?php echo $desc; ?>
                        <nav><ul class="pager"><li><a href="quiz.php">Back to Quiz</a></li></ul></nav>
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

<script>
    $(document).ready(function () {
        $("#image").click(function () {
            // Do your stuff here
            document.getElementById('audio').play();
        });
    });
</script>