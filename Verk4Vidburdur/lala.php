<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="text" name="name">
	<input type="text" name="email">
	<input type="hidden" name="event">
	<input type="submit" name="submit">

</form>
</body>
<?php
require_once("connection.php");

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$event = $_POST['event'];


$getData = "SELECT * FROM vidburdur";
$result = $Conn->query($getData);
if(!is_null($result)){
	foreach ($result as $res) {
		if ($res['name'] == $name && $res['email'] == $email && $res['eventName'] ==$event) {
			echo '<script>alert("Þú ert nú þegar skráð/ur í þennan viðburð");</script>';
		}
		else{
			$insertData = $Conn->prepare("INSERT INTO vidburdur(name, email, eventName)
										VALUES(:Name, :Email, :Event)");
			$insertData->bindParam(':Name', $name);
			$insertData->bindParam(':Email', $email);
			$insertData->bindParam(':Event', $event);
			$insertData->execute();
			echo '<script>alert("Þú hefur verið skráð/ur í þennan viðburð");</script>';

		}
	}
}
else{
	$insertData = $Conn->prepare("INSERT INTO vidburdur(name, email, eventName)
										VALUES(:Name, :Email, :Event)");
			$insertData->bindParam(':Name', $name);
			$insertData->bindParam(':Email', $email);
			$insertData->bindParam(':Event', $event);
			$insertData->execute();

			echo '<script>alert("Þú hefur verið skráð/ur í þennan viðburð");</script>';
}

}

?>
</html>