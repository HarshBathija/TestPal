<?php
/**
 * Created by PhpStorm.
 * User: Rakshit
 * Date: 07-07-2017
 * Time: 17:57
 */

$offlineHosts = array("127.0.0.1", "localhost", "192.168.1.16","19.168.1.102");
//check if online or offline then update the settings accordingly
if(in_array($_SERVER['HTTP_HOST'], $offlineHosts)){

    define("DB_HOST", "localhost");
    define("DB_NAME", "project");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
}
//online DB config
else{

    define("DB_HOST", "sql300.0fees.us");
    define("DB_NAME", "0fe_20691279_project");
    define("DB_USER", "0fe_20691279");
    define("DB_PASSWORD", "rsb151617");

}

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>