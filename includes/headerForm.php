﻿<!DOCTYPE html>
<html>
<head>
    <title>Template</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/ourStyles.css"/>
    <link rel="stylesheet" href="css/startbootstrap.min.css"/>
</head>
<body>
<header>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php?sid=<?php echo tep_session_id();?>"><img src="images/CompUni.png" alt="CompUniLogo"> CompUni</a>
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <?php if (tep_session_is_registered('signed_in')){?>
                        <li class="dropdown">

                            <a data-toggle="dropdown" id="themes" class="dropdown-toggle" href="#">Create
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="createCategory.php?sid=<?php echo tep_session_id();?>">Category</a>
                                </li>
                                <li>
                                    <a href="createTopic.php?sid=<?php echo tep_session_id();?>">Topic</a>
                                </li>

                            </ul>
                        </li>
                    <?php } ?>

                    <li>
                        <a href="about.php?sid=<?php echo tep_session_id();?>">About us</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (tep_session_is_registered('signed_in')){ ?>
                        <li style="padding-top: 6px" class="greet-user">
                            <a  href="UsernameInfo.php?sid=<?php echo tep_session_id();?>" class="greet-user user-panel">
                                <div class="greet-user">
                                    <?= "Hello " . htmlentities(tep_session_value('username_s')) . " !" ?>
                                </div>
                                <a href="logout.php?sid=<?php echo tep_session_id();?>" class="logout btn btn-sm btn-info">
                                    Logout ?
                                </a>
                            </a>

                        </li>
                    <?php }else{ ?>
                        <li>
                            <a href="register.php?sid=<?php echo tep_session_id();?>">Register</a>
                        </li>
                        <li>
                            <a href="login.php?sid=<?php echo tep_session_id();?>">Login</a>
                        </li>
                    <?php } ?>
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
