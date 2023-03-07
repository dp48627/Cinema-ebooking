<?php include('../layouts/header.php'); 

$newType = $_POST['type'];
$newPrice = $_POST['price'];

$query= $db->prepare("INSERT INTO tickettype (type, price)
			VALUES ('$newType','$newPrice')");
	$query->execute();
	$success = $query->rowCount();
?>
<?php 
		if($success > 0) {
			print("Type added Succesfully. \n");
		} else {
			print("Error, type could not be added");
		}
				?>
					<form action="dbPull.php" method="post">
						<input type="submit" class="btn" id="short" value="Return to Type Page">
					</form>