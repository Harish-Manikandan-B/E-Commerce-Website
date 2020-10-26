<?php 
include 'db.php';
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];


$s1="select stock from pro where pid=1";
$result=$conn->query($s1);
if($result->num_rows>0)
{
	echo "<script>alert("hey");</script>";
}

$s2="select stock from pro where pid=2";
$s3="select stock from pro where pid=3";


$c1="select cost from pro where pid=1";
$c2="select cost from pro where pid=2";
$c3="select cost from pro where pid=3";
//$result=$conn->query($sql);
//if($result->num_rows>0)
$sum=0;
if(($p1<=$s1)&&($p2<=$s2)&&($p3<=$s3))
{
	//$sum=($p1*$c1)+($p2*$c2)+($p2*$c3);
	echo "<script>alert('TOTAL COST IS'+($c1))</script>";
	header("refresh:0.09;page3.php");
	//$a=$s1-$p1;
	//$b=$s2-$p2;
	//$c=$s3-$p3;
	//$sq1="UPDATE `pro` SET `stock`=$a WHERE "; 
	
}
?>


