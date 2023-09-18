<?php
$num = $_GET["num"];


$con = mysqli_connect("localhost","root","","sample");
$sql = "delete from members where num=$num";

mysqli_query($con, $sql);
mysqli_close($con);

session_start();
unset($_SESSION["userid"]);
unset($_SESSION["username"]);

echo"<script> location.href = 'index.php';</script>";






?>