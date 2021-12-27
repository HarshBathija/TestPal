<?php
    function redirect_to($new_location) {
        header("Location: " . $new_location);
        exit();
    }
?>

<?php require_once("db.php");
    if (isset($_POST["validateuser"]) && $_POST["validateuser"] == "yes") {
        $query = "SELECT * FROM `login` WHERE username LIKE '".$_POST["username"]."'";
        $res = $conn->query($query);
        if($res->num_rows > 0){
            echo "success";
        }
        exit;
    }

    if (isset($_POST['submit'])) {
        newUser($conn);
    }
    
    function newUser($connection) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];

        $query = "INSERT INTO `login` (`username`,`email`,`password`,`name`) VALUES ('$username','$email','$password','$name')";
        $result = $connection->query($query);
        $id = $connection->insert_id;

        if ($result) {
            $sql = "CREATE TABLE `html".$id."` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;";
$sql1 = "ALTER TABLE `html".$id."`
  ADD PRIMARY KEY (`qno`)";
$sql2 = "ALTER TABLE `html".$id."`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11";
$sql3 = "INSERT INTO `html".$id."` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '0', 0, 1, 0),
(2, '', '0', 0, 1, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '0', 0, 1, 0);
";
            $res = $connection->query($sql);
            $res = $connection->query($sql1);
            $res = $connection->query($sql2);
            $res = $connection->query($sql3);
            $sql4 = "CREATE TABLE `php".$id."` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;";
            $sql5 = "ALTER TABLE `php".$id."`
  ADD PRIMARY KEY (`qno`)";
            $sql6 = "ALTER TABLE `php".$id."`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11";
            $sql7 = "INSERT INTO `php".$id."` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '0', 0, 1, 0),
(2, '', '0', 0, 1, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '0', 0, 1, 0);
";
            $res = $connection->query($sql4);
            $res = $connection->query($sql5);
            $res = $connection->query($sql6);
            $res = $connection->query($sql7);
            $sql8 = "CREATE TABLE `java".$id."` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;";
            $sql9 = "ALTER TABLE `java".$id."`
  ADD PRIMARY KEY (`qno`)";
            $sql10 = "ALTER TABLE `java".$id."`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11";
            $sql11 = "INSERT INTO `java".$id."` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '0', 0, 1, 0),
(2, '', '0', 0, 1, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '0', 0, 1, 0);
";
            $res = $connection->query($sql8);
            $res = $connection->query($sql9);
            $res = $connection->query($sql10);
            $res = $connection->query($sql11);
            $sql12 = "CREATE TABLE `css".$id."` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;";
            $sql13 = "ALTER TABLE `css".$id."`
  ADD PRIMARY KEY (`qno`)";
            $sql14 = "ALTER TABLE `css".$id."`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11";
            $sql15 = "INSERT INTO `css".$id."` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '0', 0, 1, 0),
(2, '', '0', 0, 1, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '0', 0, 1, 0);
";
            $res = $connection->query($sql12);
            $res = $connection->query($sql13);
            $res = $connection->query($sql14);
            $res = $connection->query($sql15);
            $sql16 = "CREATE TABLE `cpp".$id."` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;";
            $sql17 = "ALTER TABLE `cpp".$id."`
  ADD PRIMARY KEY (`qno`)";
            $sql18 = "ALTER TABLE `cpp".$id."`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11";
            $sql19 = "INSERT INTO `cpp".$id."` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '0', 0, 1, 0),
(2, '', '0', 0, 1, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '0', 0, 1, 0);
";
            $res = $connection->query($sql16);
            $res = $connection->query($sql17);
            $res = $connection->query($sql18);
            $res = $connection->query($sql19);
            $sql20 = "CREATE TABLE `javascript".$id."` (
  `qno` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL DEFAULT '0' COMMENT 'if 0 then review else answer for review ',
  `unvisited` int(11) NOT NULL DEFAULT '0' COMMENT 'if 0 then unvisited ',
  `flag` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Unvisited  2 - Answered  3 - Review   4 - Not Answered',
  `result` int(11) NOT NULL DEFAULT '0' COMMENT '0 - incorrect 1 - correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;";
            $sql21 = "ALTER TABLE `javascript".$id."`
  ADD PRIMARY KEY (`qno`)";
            $sql22 = "ALTER TABLE `javascript".$id."`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11";
            $sql23 = "INSERT INTO `javascript".$id."` (`qno`, `answer`, `review`, `unvisited`, `flag`, `result`) VALUES
(1, '', '0', 0, 1, 0),
(2, '', '0', 0, 1, 0),
(3, '', '0', 0, 1, 0),
(4, '', '0', 0, 1, 0),
(5, '', '0', 0, 1, 0),
(6, '', '0', 0, 1, 0),
(7, '', '0', 0, 1, 0),
(8, '', '0', 0, 1, 0),
(9, '', '0', 0, 1, 0),
(10, '', '0', 0, 1, 0);
";
            $res = $connection->query($sql20);
            $res = $connection->query($sql21);
            $res = $connection->query($sql22);
            $res = $connection->query($sql23);
            if($res) {
                echo "<script>alert('Successfully Signed Up !');
                  window.location = 'login.php'; </script>";
            }
        }
        else {
            redirect_to("oomctt.txt");
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
      <title>SignUp</title>
      <link rel="stylesheet" type="text/css" href="./css/style_signin_login.css">
      <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    </head>
<body>

<h2>Signup Form</h2>

<form action="signup.php" method="post" style="border:1px solid #ccc">
  <div class="container">

      <label><b>Name </b></label>
      <input type="text" placeholder="Enter Username" name="name" id="name" required>

    <label><b>Username </b><span style="color: red;" id="errorUsername"></span></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" oninput="checkUser()" required>

    <label><b>Email</b><span style="color: red;" id="errorEmail"></span></label>
    <input type="text" placeholder="Enter Email" id="email" oninput="validateEmail(document.getElementById('email').value)" name="email" required>

    <label><b>Password</b><span style="color: red;" id="errorPassword"></span></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" oninput="validatePassword();" required>

    <label><b>Repeat Password</b><span style="color: red;" id="errorRepeatPassword"></span></label>
    <input type="password" id="repeatpassword" placeholder="Repeat Password" oninput="validateRepeatPassword();" name="psw-repeat" required>
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" id="cancelbtn">Cancel</button>
      <button type="submit" name="submit" id="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
    
</script>
<script type="text/javascript">
    function checkUser() {
        var user = $('#username').val();
        if (user.length >= 5) {
            $.post('signup.php',{validateuser:"yes",username:$('#username').val()})
        .done(function(data){
            if (data.trim() == "success") {
                $('#errorUsername').html('Username Already exists !');
                $('#signupbtn').attr('disabled','');
            }
            else{
                $('#errorUsername').html('');
                $('#signupbtn').removeAttr('disabled');
            }
        })
        }
        else {
            $('#errorUsername').html('Username Length is Too Short !');
            $('#signupbtn').attr('disabled','');
        }
    }

    function validateEmail(email) {
        console.log(email);
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(email)) {
        document.getElementById('errorEmail').innerHTML = " Invalid Email";
        document.getElementById('signupbtn').setAttribute('disabled','');
    }
    else {
        document.getElementById('errorEmail').innerHTML = "";
        document.getElementById('signupbtn').removeAttribute('disabled');
    }
}
    
    function validateAge() {
        var age = document.getElementById('age').value;
        if (!isNaN(age)) {
            if (parseInt(age) < 18) {
                document.getElementById('errorAge').innerHTML = " Should be above 18";
                document.getElementById('signupbtn').setAttribute('disabled','');    
            }
            else {
                document.getElementById('errorAge').innerHTML = " ";
                document.getElementById('signupbtn').removeAttribute('disabled');       
            }
        }
        else {
            document.getElementById('errorAge').innerHTML = " Should be a Number";
            document.getElementById('signupbtn').setAttribute('disabled','');    
        }
    }

    function validatePassword() {
        var pass = document.getElementById('password').value;
        if (pass.length <= 8) {
            document.getElementById('errorPassword').innerHTML = " Password length too short !";
            document.getElementById('signupbtn').setAttribute('disabled','');    
        }
        else{
            document.getElementById('errorPassword').innerHTML = " ";
            document.getElementById('signupbtn').removeAttribute('disabled');
        }
    }

    function validateRepeatPassword() {
        var pass1 = document.getElementById('password').value;
        var pass2 = document.getElementById('repeatpassword').value;
        if (pass1 != pass2) {
            document.getElementById('errorRepeatPassword').innerHTML = " Passwords Don't Match !";
            document.getElementById('signupbtn').setAttribute('disabled','');        
        }
        else {
            document.getElementById('errorRepeatPassword').innerHTML = " ";
            document.getElementById('signupbtn').removeAttribute('disabled');    
        }
    }
</script>
</body>
</html>

