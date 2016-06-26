<?php $link = mysqli_connect("localhost", "root", "lsded24489" , "collector") ;
$name = $_GET["name"];
$comment = $_GET["comment"];

$send = mysqli_query($link, "INSERT INTO `feedback` (`name`, `comment`) VALUES ('$name', '$comment')");
mysqli_close($send);
mysqli_close($link);

header('location: feedback1.html');
exit();