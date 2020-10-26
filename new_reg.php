<!DOCTYPE html>
<html>

<head>
		<title>HOME</title>
			
			<style type="text/css">
						input[type=text] {
  						width: 20%;
  						padding: 12px 20px;
 						margin: 8px 0;
 						box-sizing: border-box;
 					    border: 2px solid red;
  						border-radius: 4px;
						}
						input[type=password] {
  						width: 20%;
  						padding: 12px 20px;
 						margin: 6px 0;
 						box-sizing: border-box;
 					    border: 2px solid red;
  						border-radius: 4px;
						}

						hr 
						{
  						border: 1px solid grey;
  						margin-left: 100px;
  						margin-right: 100px;
  						margin-bottom: 25px;
						}
						input[type=email] {
  						width: 20%;
  						padding: 12px 20px;
 						margin: 6px 0;
 						box-sizing: border-box;
 					    border: 2px solid red;
  						border-radius: 4px;
						}
						* {
 							 box-sizing: border-box;
							}
						input:focus
						{
							background-color:#ffa400;
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
							.signin 
							{
  							background-color: #f1f1f1;
  							text-align: center;
							}
				</style>





				<script type="text/javascript">

					function validate()
					{
						var y=page.user.value;
						var x = page.pass.value;

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
						
						if(page.pass.value!=page.rpass.value)
						{
							alert("RE-ENTER password correctly");
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
		
		
		<form name="page" action="adduser.php" method="post" onsubmit="return validate()" style="border-style: solid;background-color: white;position: a ">
					
		    <h1><b>Register</b></h1>
    			<p><b>Please fill in this form to create an account.</b></p>
    			<hr>
    			<br>
   						 
   				NAME:<input type="text" name="name" id="name" placeholder="Enter your full Name" minlength="3" maxlength="40" style="margin-left:120px;" pattern="[a-zA-Z]+[\s][a-zA-Z]+"required="" autocomplete="off" >
   				<br>

				ADDRESS<input type="text" name="ad1" id="ad1" style="margin-left: 100px;" placeholder="door-no,apartment,street,city" pattern="[a-zA-Z0-9]*" required="">
				<br>
				
				EMAIL:<input type="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="Enter your email" style="margin-left: 118px;" required="" autocomplete="off">
				<br>
					 
				USER ID:<input type="text" name="user" id="user" style="margin-left:109px;" required="" pattern="[a-zA-Z0-9!_]{6,12}" autocomplete="off" placeholder="Enter User ID">
				<br>
						
				PASSWORD:<input type="PASSWORD" name="pass" id="pass" style="margin-left: 87px;" pattern="[a-zA-Z0-9!]{8,40}" required="" placeholder="Enter Password" >
				<br>
						
				CONFIRM PASSWORD:<input type="PASSWORD" name="rpass" id="rpass" style="margin-left: 12px;" pattern="[a-zA-Z0-9!]{8,40}" required="" placeholder="Re-enter Password" >
			    <br>

				<hr>
    			<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
				
				<br>
				<input type="submit" name="submit" style="margin-left:60px;margin-right:20spx;padding: 10px 49px;;border-radius:4px;background-color:dodgerblue;border-style: solid;border-color:black;color:white;" >  
						
						<br>
						<br>
						<hr>
						<p><b>Already have an account?</b> <a href="home_page.html">Sign in</a>.</p>

				</form>
	</center>	

</body>
</html> 