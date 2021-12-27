<?php
header('Access-Control-Allow-Origin: *');
$postdata = file_get_contents("php://input");
$postdata = json_decode($postdata,true);
include "db.php";
$a = array();
$a["success"] = false;
if (isset($postdata["login"]) && $postdata["login"] == "yes") {
    $sql = "SELECT * FROM login WHERE username='" . $postdata["username"] . "' ";
    $res = $conn->query($sql);
    if ($res->num_rows == 0) {
        $a["success"] = false;
    }
    $a["data"] = array();
    while ($row = $res->fetch_assoc()) {
        if ($row["username"] == $postdata["username"] && $postdata["password"] == $row["password"]) {
            $a["data"][] = $row;
            $a["success"] = true;
            break;
        }
    }
}
if (isset($postdata["listexams"]) && $postdata["listexams"] == "yes") {
    $sql = "SELECT * FROM `exams`";
    $res =$conn->query($sql);
    $a["success"] = true;
    $a["data"] = array();
    while ($row = $res->fetch_assoc()) {
        $a["data"][] = $row;
    }
}
echo json_encode($a);
?>