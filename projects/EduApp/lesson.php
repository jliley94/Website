<?php
session_start();
//boot anyone not logged in back to homepage
if (!isset($_SESSION['userID'])) {
    header("location: index.php");
    exit();
}
$lessonID = $_GET['lID'];
if (!isset($_GET['page'])) {
    $page = 0;
} else {
    $page = $_GET['page'];
}

//header 
require_once "header.php";

//connect to database + select lessons content
require_once "selectContent.php";
//if connection established and data retreived
if ($result) {
    //run through table checking if info submitted matches any in table
    $rows = mysqli_num_rows($result);
    $hiraganaID = array();
    $title = array();
    $desc = array();
    for ($i = 0; $i < $rows; $i++) {
        $tmpRow = mysqli_fetch_assoc($result);
        $hiraganaID[] = $tmpRow['hiraganaID'];
        $title[] = $tmpRow['title'];
        $desc[] = $tmpRow['description'];
    }
    //connect to database + select Hiragana data
    require_once "selectThisHiragana.php";

    $row = mysqli_fetch_assoc($result);
    $english = $row['english'];
    $image = $row['image'];
    $audio = $row['audio'];
    ?>
    <div class="body">
                <div class="lessonNav">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <nav>
                        <ul class="pager">
                            <?php
                            if (!$page == 0) {
                                ?>
                                <li class="previous"><a href="lesson.php?lID=<?php echo $lessonID ?>&page=<?php echo $page - 1; ?>"><span aria-hidden="true">&larr;</span> Back</a></li>
                                <?php
                            }
                            if ($page == count($title) - 1) {
                                ?>
                                <li class="next"><a href="quiz.php?qID=<?php echo $lessonID ?>">Finish <span aria-hidden="true">&rarr;</span></a></li>
                                <?php
                            } else {
                                ?>
                                <li class="next"><a href="lesson.php?lID=<?php echo $lessonID ?>&page=<?php echo $page + 1; ?>" id="next">Next <span aria-hidden="true">&rarr;</span></a></li>
                                    <?php
                                }
                                ?>                                 
                        </ul>
                    </nav>
                </div>
            </div>
        </div> 
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
                            <h4 class="media-heading"><?php echo $title[$page] ?></h4>
                            <?php echo $desc[$page]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<?php
//footer 
require_once "footer.php";
?>

<script>
        $(document).ready(function() {
            $( "#image").click(function(){
            // Do your stuff here
    document.getElementById('audio').play();
  });
});
</script>