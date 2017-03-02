<!DOCTYPE html>
<html>
  <head>
    <title>CREAT SSH</title>
	
	<!-- include css file here-->
   <link rel="stylesheet" href="css/style.css"/>
   
	<!-- include JavaScript file here-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/metode.js"></script>
  </head>	
  <body>
<img src="ba.png" align="left" height="75px" width="350px">
	<div class="container">
		<div class="main">
	      <form  method="POST" action="index.php" id="form">
			<h2>SSH SGDO-1</h2><hr/>		
			
			<label>User :</label>
			<input type="text" name="user" id="user" required="required"/>
			
			<label>Passwarod :</label>
			<input type="text" name="pass" id="pass" required="required"/>

            <input type="submit" name="submit" id="submit" value="Buat">			
			
		  </form>
		<?php include "proses.php";?>
		</div>
   </div>
  </body>
</html>
