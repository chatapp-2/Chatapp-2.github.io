<?php
$msg = $_POST["msg"];
$file = fopen("db.html","a");
fwrite($file, "<p>".$msg."</p>"."<br>");
fclose($file);
header("location: index.php");
?>