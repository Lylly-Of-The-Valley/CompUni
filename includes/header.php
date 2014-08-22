<!DOCTYPE html>
<html>
<head>
    <title>Template</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/ourStyles.css"/>
</head>
<body>

<header>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">CompUni</a>
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About us</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['signed_in'])): ?>
                        <li style="padding-top: 6px" class="greet-user">
                            <a  href="#" class="greet-user user-panel">
                                <div class="greet-user">
                                    <?= "Hello " . htmlentities($_SESSION['user_name']) . " !" ?>
                                </div>
                                <a href="logout.php" class="logout btn btn-sm btn-info">
                                    Logout ?
                                </a>
                            </a>

                        </li>
                    <?php else: ?>
                        <li>
                            <a href="register.php">Register</a>
                        </li>
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="splash">
        <div class="container">
            <div class="row">
                <img src="images/LogoOfLillyOfTheValley.png" alt="logo"/>
            </div>
        </div>
    </div>
</header>

<section class="content section-tout clearfix">
    <div class="container">