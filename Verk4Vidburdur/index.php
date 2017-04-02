                        <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="func.js"></script>
	<link rel="icon" type="image/png" href="harpa.png" sizes="144x144" />
	<!--<script type="index.js"></script>-->
<title>Viðburður</title>
</head>
<body>

<div class="topmenu">
		
			<!-- <div class="topmenuuppl"> -->
				<h1 class="staersti"> Stærsti viðburður í Hörpu frá upphafi.</h1>
      		<!-- </div> -->
	

	</div>
<header class="slides">
  <img class="mySlides" src="csgo.jpg" style="width:100%;height: 100%;">
  <img class="mySlides" src="event1.jpg" style="width:100%;height: 100%;">
  <img class="mySlides" src="event2.jpg" style="width:100%;height: 100%;"> 

	<!--<div class="mynd"><img src="csgo.jpg" style="width:100%;height:500px;">
	</div> -->
<script>
	var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</header>
<aside class="uppl">
		<div class="inniuppl1">
			<h1>Hvenær?</h1><p> 24-26 Mars</p>
		</div>
		<div class="inniuppl2">
			<h1>Veldu viðburð</h1>
		</div>
		<div class="takki">
	<a href="http://tsuts.tskoli.is/2T/1611943609/Onn3/VSH2B/Verk4vidburdur/skraning.php"> <button class="button">Skrá mig </button></a>  <!-- laga --> 
		</div>

	
</aside>
<div class="mfeature_images">
	<div class="box"  target="#mfeature_item1">
		<div class="mfeature_image_inner">
		<img class="mynd" src="virtus.jpg" style="width: 100%;height: 100%;"  alt="event_features_1">
		<p class="texti"> Sestu og spjallaðu við bestu spilara heims.</p>
	</div>
	</div>

	<div class="box" target="#mfeature_item2">
		<div class="mfeature_image_inner2">
		<img class="mynd" src="huge.jpg"  style="width: 100%;height: 100%;" alt="event_features_1">
		<p class="texti"> Laugardags lan. verðlaun fyrir fyrsta sæti.</p>
	</div>
	</div>
	<div class="box" target="#mfeature_item3">
		<div class="mfeature_image_inner3">
		<img class="mynd" src="pingpong.jpg" style="width: 100%;height: 100%;" alt="event_features_1">
		<p class="texti"> Kepptu í ping pong, 100.000 kr í verðlaun.</p>
	</div>
	</div>
	<div class="box" target="#mfeature_item4">
		<div class="mfeature_image_inner4">
		<img class="mynd" src="represent.jpg" style="width: 100%;height: 100%;" alt="event_features_1">
		<p class="texti">Sestu í stærsta sal Hörpu og fylgstu með bestu spilurum heims keppa.</p>
	</div>
	</div>

	<div class="hovertext">
		<h1 class="hover"></h1>
	</div>

</div>






<footer>
	 <div class="container"> 
   <a href="http://tsuts.tskoli.is/2T/1611943609/Onn3/VSH2B/Verk4vidburdur/skraning.php"> <div class="btn">
        <span>Skrá mig</span>
        <div class="dot"></div></a>
    </div>
    <h1 class="btnhover">&#x261D; Skráðu þig strax í dag! &#x261D;</h1>
</div>

</footer>
</body>

</html>