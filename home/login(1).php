<?php
session_start();
include "db.php";
if(isset($_POST["submit"])){
    //print_r($_POST);
    $sql = "SELECT * FROM login WHERE username LIKE '".$_POST["username"]."'";
    $result = $conn->query($sql);
        $row = $result->fetch_assoc();
            if ($row["username"] == $_POST["username"] && $_POST["password"] == $row["password"]) {
                echo "<script>alert('Login SuccessFul !'); location.href='index.php';</script>";
                $_SESSION["lid"] = $row["id"];
                $r = $conn->query("INSERT INTO logs(`lid`) VALUES(".$row["id"].")");
                /*header("Location: Home.php");*/
            } else {
                echo "<script>alert('Login Failed !');</script>";
            }

}
/**
 * Created by PhpStorm.
 * User: Rakshit
 * Date: 07-07-2017
 * Time: 17:38
 */
?>


<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
?>
<body style="background-color: #c9aceb">
<div class="container">

    <form class="form-signin" action="login.php" method="post">
        <h2 class="form-signin-heading" style="color: ;">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus><br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <input name="submit" class="btn btn-lg btn-success btn-block" type="submit" value="Sign In">
    </form>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>

