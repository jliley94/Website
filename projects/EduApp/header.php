<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Hiragana Application</title>
        <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">

        <!-- Bootstrap -->
        <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="indexstyle.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Hiragana Application</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="courseOverview.php">Home</a></li>
                        <li><a href="progress.php">Progress</a></li>
                        <li><a href="achievements.php">Achievements</a></li> 
                        <li><a href="about.php">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><?php echo $_SESSION['streak']; ?> Day Streak <span class="glyphicon glyphicon-fire"></span></a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        //Message display
        if (isset($_SESSION['message'])) {
            if ($_SESSION['alertType'] == 1) {
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo $_SESSION['message']; ?></div>
                <?php
            } elseif ($_SESSION['alertType'] == 2) {
                ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo $_SESSION['message']; ?></div>
                <?php
            }
            $_SESSION['alertType'] = 0;
            $_SESSION['message'] = "";
        }
        ?>