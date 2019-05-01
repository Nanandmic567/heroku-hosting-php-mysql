<?php
date_default_timezone_set("Asia/Bangkok");
$id = $_REQUEST['id'];
$text = $_REQUEST['text'];
$serverName = "us-cdbr-iron-east-02.cleardb.net";
$userName = "b07243a7245e6e";
$userPassword = "0766a58f";
$dbName = "heroku_c8e3b40b80e5798";
$connect = mysqli_connect($serverName,$userName,$userPassword,$dbName) or die ("connect error".mysqli_error());
mysqli_set_charset($connect, "utf8");
$query = "INSERT INTO line_log(user_id,text,date_time) VALUE ('$id','$text',NOW())";
$resource = mysqli_query($connect,$query) or die ("error".mysqli_error());
?>
__SILENT___
