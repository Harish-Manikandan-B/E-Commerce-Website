<!doctype html>
<html lang="en">
  <head>
   <?php include 'db.php'; ?> 
       <title>temp!</title>
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
 							 box-sizing:content-box;
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
							button
							{
								margin-left:60px;margin-right:20px;padding: 10px 49px;;border-radius:4px;background-color:dodgerblue;border-style: solid;border-color:black;color:white;
							}
				</style>

 </head>
  <body bgcolor="dodgerblue">

  <form action="pg3.php" method="post">

  <div1 style="color:white ">THE MOBILE STORE</div1>

    <br><br>
<center>
  

	<div style="border-style:solid;background-color:yellow;margin-left: 400px;margin-right: 400px;margin-top:0px;">

    <div class="card" style="width: 18rem;">
  <img src="phone1.jpg" style="border-style:solid ;margin-left:10px;margin-top: 13px;">
  <div class="card-body">
    <h5 class="card-title" style="font-family: arial;margin-left: 10px;color:blue;"><b>ASUS ZENFONE MAX PRO 1</b></h5>
    <p class="card-text" style="font-family: arial;margin-left: 10px;">6 GB RAM | 64 GB ROM | Expandable Upto 2 TB
						 |15.21 cm (5.99 inch) |Full HD+ Display   
						 |16MP + 5MP | 16MP Front Camera
						 |5000 mAh Battery
						 |Qualcomm Snapdragon 636 Octa Core Processor.</p>
             <input value="0" type="text" style="width:60px;" placeholder="qty" name="p1"  max="<?php $result=$conn->query("select stock from pro where pid='1'/");echo $result['stock']?>">
      </div>
</div>


<br>




   <div class="card" style="width: 18rem;">
  <img src="case1.jpg" style="border-style:solid ;margin-left: 15px;">
  <div class="card-body">
    <h5 class="card-title" style="font-family: arial;margin-left: 50px;color:blue;">ASUS ZENFONE MAX PRO 1 CASE</h5>
    <p class="card-text" style="font-family: arial;margin-left: 20px;">Quality case from MAX CASE|Fits perfectly and protects your phone from impact.</p>
    <input type="text" value="0" style="width:60px; " placeholder="qty" name="p2" max="<?php $result=$conn->query("select stock from pro where pid='2'/");echo $result['stock']?>">
      </div>
  </div>

<br>

    <div class="card" style="width: 18rem;">
  <img src="earphones1.jpg" style="border-style:solid ;margin-left: 40px;">
  <div class="card-body">
    <h5 class="card-title" style="font-family: arial;color:blue ;margin-left: 20px;">SKULL CANDY EARPHONES</h5>
    <p class="card-text" style="font-family: arial;margin-left: 20px;">You get only the best from Skull Candy .</p>
    <input type="text" value="0" placeholder="qty" style="width:60px;" name="p3" max="<?php $result=$conn->query("select stock from pro where pid='3'/");echo $result['stock']?>">
      </div>
  </div>



<br>
<button type="submit" name="submit"> Proceed to buy</button>

<br>
<br>
    </div>
  </form>
  </body>

</html>