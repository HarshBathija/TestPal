<?php
/**
 * Created by PhpStorm.
 * User: Rakshit
 * Date: 08-08-2017
 * Time: 16:48
 */

/*header('Content-Description: File Transfer');
header("Content-type: application/octet-stream; charset=utf-8");
header("Content-Disposition: attachment;Filename=test.doc");*/
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
<body>
<button onclick="printfile()">Save as Pdf</button>
<b>My first document</b>
<img src="images/bgimg.jpg" alt="" />
<h1>Hello World</h1>
<script>
    function printfile() {
        window.open('index.php',"_blank");
        window.print();
    }
</script>
</body>
</html>
