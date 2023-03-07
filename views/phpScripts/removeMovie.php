<?php include('../layouts/adminheader.php'); ?>

<?php
	$query ="DELETE FROM movies 
			 WHERE id = '$_POST[movieID]'";
	$success = $con->query($query);
	if($success) {
		echo "Movie Removed Succesfully";
	} else {
		echo "Error: Movie Removal Failed";
	}
	
	include ('../layouts/submitMovie.php');
?>