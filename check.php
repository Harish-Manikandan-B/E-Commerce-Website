<?php 
include 'db.php';
$name=$_POST['user'];
$pass=$_POST['pass'];
$sql="select * from  reg";

$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		if(($name===$row['cid']) && ($pass===$row['pass']))
			header("Location:page3.php");
		else
		{
			echo "<script>alert('ENTER CORRECT USERNAME AND PASSWORD')</script>";
			header("refresh:0.09;index.php");
		}

	}
}
  

?>