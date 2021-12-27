<?php
/**
 * Created by PhpStorm.
 * User: Rakshit
 * Date: 06-08-2017
 * Time: 13:19
 */
include "db.php";
session_start();
if(!isset($_SESSION["lid"])){
    header("location: login.php");
}
if (isset($_POST["givetest"]) && $_POST["givetest"] == "yes"){
    $sql = "UPDATE `".$_POST["table"]."` set answer='',review=0,unvisited=0,flag=1,result=0";
    $res = $conn->query($sql);
    if ($res === TRUE){
        echo 'success';
    }
    exit;
}
$_SESSION["java"] = 'java';
$_SESSION["cpp"] = 'cpp';
$_SESSION["php"] = 'php';
$_SESSION["javascript"] = 'javascript';
$_SESSION["html"] = 'html';
$_SESSION["css"] = 'css';
$_SESSION["timer"] = 300;
$sql = "SELECT * FROM login WHERE id = ".$_SESSION["lid"];
$res = $conn->query($sql);
$login = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<script>
    document.cookie = "timerval=300";
    console.log(<?=$_COOKIE["timerval"]?>);
</script>
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

    <hr>
    <div class="hidden" id=""><!--  Analysis Comes Here  --></div>
    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Exams Available :</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">
        <?php
        $flag = 0;
        $i = 1;
        $sql1 = "SELECT * FROM `exams` WHERE 1";
        $res1 = $conn->query($sql1);
        while ($row1 = $res1->fetch_assoc()) {
            $sql = "SELECT * FROM `exams-given` WHERE lid=".$_SESSION["lid"]." AND `eid`=".$row1["eid"];
            $res = $conn->query($sql);
            if($res->num_rows > 0){
                $row = $res->fetch_assoc();
                $flag = 1;
            }
            else {
                $flag = 0;
            }
            ?>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div style="background-image: url('./images/<?= $row1["image"] ?>'); background-repeat: no-repeat; background-size: contain; width: 252.5px; height: 157.81px;"></div>
                    <hr style="margin: 0;">
                    <div class="caption">
                        <h3><?=$row1["name"]?> <span style="font-size: 0.5em; color: red;"><?=($flag) ? 'Test Already Given' : ''?></span></h3>
                        <p>
                            <a onclick="givetest('<?=strtolower($row1["name"])?>',<?=$flag?>)" class="btn btn-success"><?=($flag) ? 'Re-Test' : 'Test'?></a> <a target="_blank" href="<?=$row1["link"]?>" class="btn btn-default">More-Info / Tutorials</a>
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

    function givetest(filename,flag) {
        if(flag) {
            var con = confirm("Warnig: Your Previous Details will be lost !!\n Are you sure you want to continue ??");
        }
        else {
            con = true;
        }
        if (con) {
            if (flag) {
                table = filename;
                switch(filename) {
                    case 'html5':
                        table = 'html';
                        break;
                    case 'c++':
                        table = 'cpp';
                        break;
                    case 'css3':
                        table = 'css';
                        break;
                }
                $.post('exams.php', {table: table + '<?=$_SESSION["lid"]?>', givetest: "yes"})
                    .done(function (data) {
                        if (data.trim() == "success") {
                            location.href = filename + '.php';
                        }
                    })
            }
            else
                location.href = filename + '.php';
        }

    }
</script>

</body>

</html>

