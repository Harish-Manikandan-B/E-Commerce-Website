<?php
include 'db.php';
$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$ad1=$_POST['ad1'];
$cid=$_POST['user'];
$sql="INSERT INTO `reg` (`name`, `em`, `ad`, `cid`, `pass`) VALUES ('".$name."','".$email."','".$ad1."','".$cid."','".$pass."')";
if($conn->query($sql))
{
	header("refresh:0.001;index.php");
}
else
{
	echo $conn->error;
}
?>