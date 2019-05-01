<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$production = isset($url["host"]);
date_default_timezone_set("Asia/Bangkok");
$id = $_REQUEST['id'];
$text = $_REQUEST['text'];
$serverName = ($production) ? $url["host"] : "localhost";
$userName = ($production) ? $url["user"] : "root";
$userPassword = ($production) ? $url["pass"] : "";
$dbName = ($production) ? substr($url["path"], 1) : "log";
$connect = mysqli_connect($serverName,$userName,$userPassword,$dbName) or die ("connect error".mysqli_error());;
mysqli_set_charset($connect, "utf8");
$query ="INSERT INTO log_chat (user_line_id,TEXT,DATE) VALUE('12234','mickey',NOW())";
$resource = mysqli_query($connect,$query) or die ("error".mysqli_error());
?>
__SILENT___
