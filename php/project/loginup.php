<?php
session_start();

$_SESSION["username"] = "대남이";
setcookie("mynum","201640227",time()+(86400 * 30),"/");
?>
