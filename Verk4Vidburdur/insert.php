<!DOCTYPE html>
<html>
<head>
	<title>Bæta Við</title>
</head>
<body>
<h1></h1>  
 	<?php

 		//Tengja við gagnagrunn...
		$servername = "tsuts.tskoli.is";
		$username = "1611943609";
		$password = "mypassword";
		$db = "1611943609_harpa";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql  = "INSERT INTO vidburdur(name, email, eventName) VALUES ('$name','$email','$event')"

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
		// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

		$conn->close();

		
		sleep(1); //tefja um eina sek
		header("Location: lala.php"); //förum á aðalsíðu
		exit();


 	?>

</body>
</html>