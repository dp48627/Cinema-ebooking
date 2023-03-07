<?php include('../layouts/header.php'); ?>

<?php
	$query ="DELETE FROM creditcards WHERE id = '$_POST[card_id]'";
	$success = $con->query($query);
	if($success) {
		echo "Card Removed Succesfully";
	} else {
		echo "Error: Card Removal Failed";
	}
	
	include ('../layouts/submitFooter.php');
?>

