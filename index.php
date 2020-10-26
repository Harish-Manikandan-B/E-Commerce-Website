<!DOCTYPE html>
<html>
<head>
<?php include 'db.php';?>	
	<title>HOME</title>
			
			<style type="text/css">
						input[type=text] {
  						width: 40%;
  						padding: 4px 20px;
 						margin: 8px 0;
 						box-sizing: border-box;
 					    border: 2px solid red;
  						border-radius: 4px;
						}
						input[type=password] {
  						width: 40%;
  						padding: 4px 20px;
 						margin: 6px 0;
 						box-sizing: border-box;
 					    border: 2px solid red;
  						border-radius: 4px;
						}

						input:focus
						{
							background-color:#ffa400;
						}

						a{
							color:black;
							background-color:dodgerblue; 
							margin-left:20px;
							margin-right:10px;
							padding: 9px 45px;
							border:1.5px; 
							border-radius:4px;
							border-style: solid;
							border-color:black;

						}
					
						div1 {
 							 width: 100px;
  							 height: 40px;
  							 background-color:black;
  							 color:yellow;
  							 position: relative;
  							-webkit-animation-name: example;
  							-webkit-animation-duration: 4s; 
 						    -webkit-animation-iteration-count:infinite;
  							animation-name: example;
  							animation-duration: 4s;
  							animation-iteration-count:infinite;
							}
							@keyframes example 
							{
   							0%   {background-color:black; left:0px; top:0px;color:yellow ;}
  							75% {background-color:yellow; left:50px; top:0px;color: black;}
    						100% {background-color:black; left:0px; top:0px;color:yellow;}
							}

							.center
							{
								
								 
								transform: translate(98%,-80%);
								width:450px;
								padding: 0px;

								
							}

				</style>


				<script type="text/javascript">

					function check()
					{
						var y=page1.user.value;
						var x = page1.pass.value;
  						
  						if (y == "") 
  						{
						alert("username should be filled");
						return false;
						}
						if (x == "") 
						{
						alert("password must be filled");
						return false;
						}
						return true;
			  		}

			</script>
</head>

<body bgcolor="DodgerBlue">
	<div1 style="color:white ">THE MOBILE STORE</div1>
	<center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		   <div class="center"> 
		<form name="page1" action="check.php" method="post" onsubmit="return check()" style="border-style: solid;background-color:turquoise;">
					<table>
						<br>
						<br>
						<tr>
						USER ID:<input type="text" name="user" id="user" style="margin-left:27px;" required="" pattern="[a-zA-Z0-9!_]{6,12}" autocomplete="off" placeholder="Enter User ID">
						</tr>
						<br>
						<br>

						<tr>
						PASSWORD:  <input type="PASSWORD" name="pass" id="pass"  pattern="[a-zA-Z0-9!]{8,40}" required="" placeholder="Enter Password" >
						</tr>
						<br>

					</table>
						<br>
						<input type="submit" name="SUBMIT" style="margin-left:60px;margin-right:20spx;padding: 10px 49px;;border-radius:4px;background-color:dodgerblue;border-style: solid;border-color:black;color:black;" >  
						<a href="new_reg.php">New User</a>
						<br>
						<br>

		</form>
	</div>
		
	</center>	

</body>
</html> 