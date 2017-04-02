
<?php
		$host = "tsuts.tskoli.is";
		$username = "1611943609";
		$password = "mypassword";
		$db = "1611943609_harpa";

		

		try {
			//create connection
			$Conn = new PDO("mysql:host=$host;dbname=$db" , $username , $password);
			// set the PDO error mode to exception
			$Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch (PDOException $e) {
			echo "Connection Failed: " .$e->getMessage();
		}//catch

?>

