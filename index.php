<?php
include "db.php";
session_start();
if(!isset($_SESSION["lid"])){
    header("location: login.php");
}
$sql = "SELECT * FROM login WHERE id = ".$_SESSION["lid"];
$res = $conn->query($sql);
$login = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<?php
include "head.php";
?>

<body style="background-color: inherit !important;">

    <!-- Navigation -->
    <?php
        include "navbar.php";
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Welcome to the Future</h1>
            <p>Hello Mr. <?=$login["name"]?>,<br> Please click on the button below to view your Results And Analysis.</p>
            <p><a class="btn btn-primary btn-large" href="#analysis">Learn More</a>
            </p>
        </header>

        <hr>
        <!--  Analysis Comes Here  -->
        <!-- Title -->
        <div class="row" id="analysis">
            <div class="col-lg-12">
                <h3>Previous Exams Analysis :</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
            <?php
                $sql = "SELECT * FROM `exams-given` WHERE `lid`=".$_SESSION["lid"];
                $res = $conn->query($sql);
                while ($row = $res->fetch_assoc()) {
                    $sql1 = "SELECT * FROM `exams` WHERE `eid`=" . $row["eid"];
                    $res1 = $conn->query($sql1);
                    $row1 = $res1->fetch_assoc();
                    ?>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <div style="background-image: url('./images/<?= $row1["image"] ?>'); background-repeat: no-repeat; background-size: contain; width: 252.5px; height: 157.81px;"></div>
                            <hr style="margin: 0; color: black;">
                            <div class="caption">
                                <h3><?=$row1["name"]?></h3>
                                <p>
                                    <?php
                                        $key = strtolower($row1["name"]);
                                        switch ($key) {
                                            case 'css3':
                                                $key = 'css';
                                                break;
                                            case 'c++':
                                                $key = 'cpp';
                                                break;
                                            case 'html5':
                                                $key = 'html';
                                                break;
                                        }
                                    ?>
                                    <a href="result.php?exam=<?=$key?>" class="btn btn-primary">Analysis</a> <a target="_blank" href="<?=$row1["link"]?>" class="btn btn-default">More-Info / Tutorials</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>


        </div>
        <!-- /.row -->

        <hr style="margin: 0 !important;">

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <!--<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tolltip1').tooltip();
        });
    </script>

</body>

</html>
