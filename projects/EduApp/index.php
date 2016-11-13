<?php
session_start();
//take logged in users to their course overview page
if (isset($_SESSION['userID'])) {
    header("location: courseOverview.php");
    exit();
}
?>
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
                        <li class="active"><a href="index.php">Home</a></li>
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
        <div class="reg-log">
            <div class="container">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">Login</h2>
                        </div>
                        <div class="panel-body">
                            <p>Enter your username and password.</p>
                            <form role="form" action="loginCheck.php" method="POST">
                                <div class="input-group">
                                    <span class="input-group-addon" id="user-addon">Username</span>
                                    <input type="text" class="form-control" name="loginUsername" aria-describedby="user-addon">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon" id="pass-addon">Password</span>
                                    <input type="password" class="form-control" name="loginPassword" aria-describedby="pass-addon">
                                </div>
                                <div class="logButton">
                                    <button type="submit" class="btn btn-default">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">Register</h2>
                        </div>
                        <div class="panel-body">
                            <p>Enter your desired username and password. </p>
                            <form role="form" action="registerCheck.php" method="POST">
                                <div class="input-group">
                                    <span class="input-group-addon" id="user-addon">Username</span>
                                    <input type="text" class="form-control" name="registerUsername" aria-describedby="user-addon">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon" id="pass-addon">Password</span>
                                    <input type="password" class="form-control" name="registerPassword" aria-describedby="pass-addon">
                                </div>
                                <div class="logButton">
                                    <button type="submit" class="btn btn-default">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        //footer 
        require_once "footer.php";
        ?>