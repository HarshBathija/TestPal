<?php
/**
 * Created by PhpStorm.
 * User: Rakshit
 * Date: 07-08-2017
 * Time: 00:17
 */
include "db.php";
error_reporting(0);
session_start();
if(!isset($_SESSION["lid"])){
    header("location: login.php");
}
$exams = $_GET["exam"];
switch ($_GET["exam"]){
    case 'cpp':
        $exams = "c++";
        break;
    case 'html':
        $exams = "html5";
        break;
    case 'css':
        $exams = "css3";
        break;
}
$sql = "SELECT * FROM `exams` WHERE name LIKE '".$exams."'";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
$sql = "SELECT * FROM `exams-given` WHERE lid=".$_SESSION["lid"]." AND eid=".$row["eid"];
$res = $conn->query($sql);
if($res->num_rows <= 0) {
    $sql = "INSERT INTO `exams-given` (`lid`, `eid`) VALUES(" . $_SESSION["lid"] . ",".$row["eid"].")";
    $res = $conn->query($sql);
}
$sql = "SELECT * FROM login WHERE id = ".$_SESSION["lid"];
$res = $conn->query($sql);
$login = $res->fetch_assoc();
unset($_SESSION[$_GET["exam"]]);
unset($_SESSION["timer"]);
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

    <hr>
    <div class="hidden" id=""><!--  Analysis Comes Here  --></div>
    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Exams Available :</h3>
        </div>
    </div>
    <!-- /.row -->
    <?php
    $correct = 0;
    $incorrect = 0;
    $dna = 0;
    $mfrc = 0;
    $mfrw = 0;
    $sql = "SELECT * FROM `".$_GET["exam"].$_SESSION["lid"]."`";
    $res = $conn->query($sql);
    while ($row = $res->fetch_assoc()){
        $sql1 = "SELECT * FROM ".$_GET["exam"]." WHERE id=".$row["qno"];
        $res1 = $conn->query($sql1);
        $row1 = $res1->fetch_assoc();
        if ($row["answer"] == ''){
            $dna++;
        }
        else if ($row["answer"] == $row1["answer"]){
            $correct++;
        }
        else if ($row["answer"] != $row1["answer"]){
            $incorrect++;
        }
        if ($row["flag"] == 3 && $row["review"]==$row1["answer"]){
            $mfrc++;
        }
        else if ($row["flag"] == 3 && $row["review"] != $row1["answer"]){
            $mfrw++;
        }
    }
    ?>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Attempted answers', 'Hours per Day'],
                ['Correct',     <?=$correct?>],
                ['Incorrect',      <?=$incorrect?>],
                ['Did not Attempt', <?=$dna?>],
                ['Marked For Review But Wrong', <?=$mfrw?>],
                ['Marked For Review But Correct',    <?=$mfrc?>]
            ]);

            var options = {
                title: 'Question Wise Result (Note: Correct answers include marked for review ones too)'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
    <!-- Page Features -->
    <div class="row text-ceanter">
        <div class="col-md-12 col-sm-6 hero-feature">
            <div class="thumbnail" style="height: 100% !important;">
                <h3 style="margin-top: 0.5%"><b><?=$_GET["exam"]?> Result </b>Score: <?=$correct?>/10</h3>
                <hr style="margin: 0;">
                <div class="caption">
                    <div id="piechart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-6 hero-feature">
            <div class="thumbnail" style="height: 100% !important;">
                <h3 style="margin-top: 0.5%"><b>Analysis Of the Answers</b></h3>
                <hr style="margin: 0;">
                <div class="caption">
                    <table id="example" class="display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Q. No.</th>
                                <th>Question</th>
                                <th>Answer (Expected)</th>
                                <th>Your Answer</th>
                                <th>Explanation</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql = "SELECT * FROM `".$_GET["exam"].$_SESSION["lid"]."`";
                            $res = $conn->query($sql);
                            while ($row = $res->fetch_assoc()) {
                                $sql1 = "SELECT * FROM ".$_GET["exam"]." WHERE id=".$row["qno"];
                                $res1 = $conn->query($sql1);
                                $row1 = $res1->fetch_assoc();
                                ?>
                                <tr>
                                    <td><?=$row["qno"]?></td>
                                    <td><?=$row1["question"]?></td>
                                    <td><?=$row1[$row1["answer"]]?></td>
                                    <td><?=$row1[$row["answer"]]?></td>
                                    <td><?=$row1["explaination"]?></td>
                                    <td><?php
                                        switch ($row["flag"]){
                                            case 1:
                                                echo 'Did not visit the question';
                                                break;
                                            case 2:
                                                echo 'Answered / Attempted';
                                                break;
                                            case 3:
                                                echo 'Marked for review';
                                                break;
                                            case 4:
                                                echo 'Did not answer the question';
                                                break;
                                        }
                                        ?></td>
                                </tr>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
    $(document).ready(function() {
        $('#example').DataTable( {
            "scrollX": true
        } );
    } );
</script>

</body>

</html>


