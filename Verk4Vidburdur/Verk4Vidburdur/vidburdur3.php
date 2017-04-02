<!DOCTYPE html>
<html>
<head>
	<title>Viðburðir</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="vidburdir.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div class="topnav">
  <a  href="http://tsuts.tskoli.is/2T/1611943609/Onn3/VSH2B/Verk4vidburdur/index.php">Home</a>
  <a href="">News</a>
  <a href="http://tsuts.tskoli.is/2T/1611943609/Onn3/VSH2B/Verk4vidburdur/skraning.php">Viðburðir</a>
  <a href="">About</a>
	</div>
	<div class="topmenu">
				<h1 class="staersti"> Viðburður 3  </h1>
				<h1 class="staersti2">Kepptu í ping pong, 100.000 kr í verðlaun.</h1>
				
	</div>
	
	<div class="lorem"><p>lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque congue dui eleifend diam accumsan, a hendrerit libero mattis. Fusce ut nibh nec augue auctor convallis. Maecenas id turpis a diam pulvinar efficitur vel ut lorem. Ut nibh dolor, pharetra sit amet suscipit et, tristique quis sem. Nullam tempus urna dui, quis pharetra erat imperdiet ac. Maecenas commodo, nibh sit amet tincidunt ultricies, massa lacus lacinia ex, ac placerat arcu metus porttitor massa. Nulla condimentum nunc arcu, ut placerat eros maximus ultricies. Cras a erat porta, tristique mauris vel, mollis dolor. Quisque eu ex sed massa imperdiet molestie non non enim. Duis vulputate rhoncus dui. Proin sagittis, nisl eu ultricies pharetra, mi est commodo mauris, ut cursus enim diam at risus. Vestibulum vel aliquet odio, at fermentum diam. Nulla consequat malesuada nibh, sed pharetra orci lobortis vitae. Maecenas egestas, metus nec gravida accumsan, tellus nisi aliquam mauris, sed accumsan nisi odio a felis.</p></div>

	<aside class="aside">
		<div class="insideleft"><img src="pingpong.jpg" style="width: 100%;height: 100%;"></div>
		<div class="insideright"><h1>Skráning í þennan viðburð:</h1>
			<div class="inputs">
				<form method="post" >
				<span>Name <span class="required">*</span></span> <input type="text" class="input-field" name="name" /><br><br>
				<span>Email <span class="required">*</span></span><input type="email" class="input-field" name="email" /><br><br>
				<input type="hidden" name="event" value="ping pong">
				
				<input type="submit" name="submit" value="Skrá mig" />

			</form>
			</div>
		</div>
			
	</aside>

	

</body>
<?php
require_once("connection.php");

if (isset($_POST['submit'])) 
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$event = $_POST['event'];
	

	//Hér erum við að athuga hvort það sé búið að skrá ákveðin gaur á viðburð nú þegar...
	$getData = "SELECT * FROM vidburdur Where name = '$name' and email = '$email' and eventName = '$event'";
	//$getData = "SELECT * FROM vidburdur";
	$result = $Conn->query($getData);

	
	if( $result->fetchColumn() > 0 ) 
	{
		echo '<script>alert("Þú ert nú þegar skráð/ur í þennan viðburð");</script>';
	}
	else
	{

		$sql = "INSERT INTO vidburdur (name,email,eventName) VALUES ('$name', '$email', '$event')";    
    	$Conn->exec($sql);
		
		echo '<script>alert("Þú hefur verið skráð/ur í þennan viðburð");</script>';
	}
}


?>
</html>
</html>