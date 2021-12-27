<?php
/**
 * Created by PhpStorm.
 * User: Rakshit
 * Date: 09-09-2017
 * Time: 17:30
 */

include "db.php";
session_start();
if (isset($_POST["timer"]) && $_POST["timer"] == "yes"){
    echo $_SESSION["timer"]--;
    exit;
}
if(isset($_SESSION["timer"]) && $_SESSION["timer"] == 0){
    echo '<script>alert("Time Expired !!"); location.href= "result.php?exam=cpp"</script>';
}
if (!isset($_SESSION["lid"])){
    header("location: login.php");
}
if(!isset($_SESSION["cpp"])){
    echo '<script>alert("Time / Session Expired !");
            location.href="index.php";</script>';
    //header("location: index.php");
}
$sql = "SELECT * FROM login WHERE id = ".$_SESSION["lid"];
$res = $conn->query($sql);
$login = $res->fetch_assoc();

if (isset($_POST["insert"]) && $_POST["insert"] == "yes"){
    if ($_POST["ans"] == 'z'){
        $ans = '';
        $flag = 4;
    }
    else {
        $ans = $_POST["ans"];
        $flag = 2;
    }
    $sql = "UPDATE `cpp".$_SESSION["lid"]."` SET `answer`='".$ans."',`unvisited` = 1,review ='', `flag` = ".$flag." WHERE `qno`=".$_POST["qno"];
    if ($conn->query($sql) === TRUE){
        echo "success";
    }
    exit;
}

if (isset($_POST["review"]) && $_POST["review"] == "yes"){
    $ans = $_POST["ans"];
    $flag = 3;
    $sql = "UPDATE `cpp".$_SESSION["lid"]."` SET `answer`='".$ans."',`unvisited` = 1, review ='".$ans."' , `flag` = ".$flag." WHERE `qno`=".$_POST["qno"];
    if ($conn->query($sql) === TRUE){
        echo "success";
    }
    exit;
}
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


    <!-- Title -->
    <div class="row" style="margin: 5% 0 1% 2%">
        <div class="col-lg-12">
            <h3>C++ Test </h3>
        </div>
    </div>
    <!-- /.row -->
    <script>
        $(document).ready(function () {
            timer(<?=$_SESSION["timer"]?>);
        });
        function timer(val) {
            if (val < 0){
                alert("Time Up !!");
                location.href = "result.php";
            }
            $("#timer").html(val);
            setTimeout(function () {
                $.post('c++.php',{timer:"yes", val: val})
                    .done(function (data) {
                        timer(data);
                    })
            },1000);
        }
    </script>
    <!-- Page Features -->
    <div class="row">
        <div class="col-md-8 col-sm-6 hero-feature">
            <div class="thumbnail">
                <div class="caption">
                    <?php
                    if (isset($_GET["qno"])){
                        $qno = $_GET["qno"];
                    }
                    else {
                        $qno = 1;
                    }
                    $sql = "SELECT * FROM `cpp` WHERE id =".$qno;
                    $res = $conn->query($sql);
                    $row = $res->fetch_assoc();
                    $sql1 = "SELECT * FROM  `cpp".$_SESSION["lid"]."` WHERE flag in(2,3) and qno=".$qno;
                    $res1 = $conn->query($sql1);
                    $row1 = $res1->fetch_assoc();
                    ?>
                    <h3>Question :</h3>
                    <p><?=$row["question"]?></p>
                    <p style="color: red;"><?=($row1["flag"]==3) ? 'Option Marked for Review' : ''?></p>
                    <div class="radio">
                        <label><input type="radio" id="ans" name="optradio" <?=($row1["answer"]=='a') ? 'checked' : ''?> value="a"><?=strip_tags($row["a"])?></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" id="ans" name="optradio" <?=($row1["answer"]=='b') ? 'checked' : ''?> value="b"><?=strip_tags($row["b"])?></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" id="ans" name="optradio" <?=($row1["answer"]=='c') ? 'checked' : ''?> value="c"><?=strip_tags($row["c"])?></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" id="ans" name="optradio" <?=($row1["answer"]=='d') ? 'checked' : ''?> value="d"><?=strip_tags($row["d"])?></label>
                    </div>
                    <br>
                    <?=($qno != 1) ? '<button style="margin-right: 3%" class="btn btn-default" onclick="prevquestion('.$qno.')">Previous</button>' : ''?>
                    <button style="margin-right: 3%" class="btn btn-default" onclick="review(<?=$qno?>)">Mark for review</button>
                    <?=($qno != 10) ? '<button class="btn btn-default" onclick="nextquestion('.$qno.');">Next</button>' : '<button class="btn btn-success" onclick="nextquestion('.$qno.');">Submit</button>'?>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 hero-feature">
            <div class="thumbnail">
                <div class="caption">
                    <h2>Instructions:</h2>
                    <b><h4><span>Timer : </span><span id="timer"></span> s </h4></b>
                    <p><button class="btn btn-default">Unvisited</button>
                        <button class="btn btn-success">Answered</button></p>
                    <p><button class="btn btn-danger">Not Answered</button>
                        <button class="btn btn-warning">Marked For review</button></p>
                    <h4>Go To Question :</h4>
                    <?php
                    $sql = "SELECT * FROM `cpp`";
                    $res = $conn->query($sql);
                    while ($row = $res->fetch_assoc()) {
                        $sql1 = "SELECT * FROM `cpp".$_SESSION["lid"]."` WHERE qno=".$row["id"];
                        $res1 = $conn->query($sql1);
                        $row1 = $res1->fetch_assoc();
                        switch ($row1["flag"]){
                            case 1:
                                $btn = 'default';
                                break;
                            case 2:
                                $btn = 'success';
                                break;
                            case 3:
                                $btn = 'warning';
                                break;
                            case 4:
                                $btn = 'danger';
                                break;
                        }
                        ?>
                        <button style="margin-bottom: 2%" class="btn btn-<?=$btn?>" onclick="location.href='c++.php?qno=<?=$row["id"]?>'"><?=$row["id"]?></button>
                        <?php
                    }
                    ?>
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
    function nextquestion(val) {
        var ans = '';
        console.log($("input[name='optradio']:checked").length);
        if($("input[name='optradio']:checked").length > 0){
            ans = $("input[name='optradio']:checked").val();
        }
        else {
            ans = 'z';
        }
        $.post('c++.php', {ans: ans, qno: val, insert: "yes"})
            .done(function (data) {
                if (data.trim() == "success"){
                    if(parseInt(val)+1 != 11)
                        location.href = "c++.php?qno="+(parseInt(val)+1);
                    else {
                        location.href = "result.php";
                    }
                }
            })
    }

    function review(val) {
        if($("input[name='optradio']:checked").length > 0){
            $.post('c++.php', {ans: $("input[name='optradio']:checked").val(), qno: val, review: "yes"})
                .done(function (data) {
                    if (data.trim() == "success"){
                        if(parseInt(val)+1 != 11)
                            location.href = "c++.php?qno="+(parseInt(val)+1);
                        else {
                            location.href = "result.php";
                        }
                    }
                })
        }
        else {
            alert("Please select the option for review !");
        }
    }

    function prevquestion(val) {
        var ans = '';
        console.log($("input[name='optradio']:checked").length);
        if($("input[name='optradio']:checked").length > 0){
            ans = $("input[name='optradio']:checked").val();
        }
        else {
            ans = 'z';
        }
        $.post('c++.php', {ans: ans, qno: val, insert: "yes"})
            .done(function (data) {
                if (data.trim() == "success"){
                    if(parseInt(val)+1 != 1)
                        location.href = "c++.php?qno="+(parseInt(val)-1);
                }
            })
    }
</script>

</body>

</html>

