<?php
    // this needs to dynamically distinguish between currently showing & coming soon
    $Mquery = "SELECT * FROM movies";
	$movies = $con->query($Mquery);
    //$select = mysqli_query($con, "SELECT * FROM movies");
   //$movies = mysqli_fetch_array($select);
?>