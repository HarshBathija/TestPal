<?php
/**
 * Created by PhpStorm.
 * User: Rakshit
 * Date: 06-08-2017
 * Time: 12:02
 */
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Online Exam</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="">Dashboard</a>
                </li>
                <li>
                    <a href="exams.php">Exams</a>
                </li>
                <li>
                    <a id="tooltip1" href="" data-toggle="tooltip" title="Rakshit Bhat">Contact Us</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <button style="background-color: #222222; color: #9D9D9D; margin-top: 6%" class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                        <?=$login["name"]?>
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="">View Profile</a></li>
                        <li class=""></li>
                        <li><a href="Logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
