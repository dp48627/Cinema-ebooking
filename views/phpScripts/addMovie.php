<?php include('../layouts/adminheader.php');  

$name = $_POST['movieName'];
$rating = $_POST['movieRating'];
$runtime = $_POST['movieRuntime'];
$releaseDate = $_POST['movieReleaseDate'];
$trailerURL = $_POST['movieTrailerURL'];
$tags = $_POST['movieTags'];
$synopsis = $_POST['movieSynopsis'];

$query= $con->prepare("INSERT INTO movies (name, rating, runtime, releaseDate, trailerURL, tags, synopsis)
			           VALUES ('$name','$rating',' $runtime','$releaseDate','$trailerURL','$tags','$synopsis')");
$success = $query->execute();

if($success) 
{
    echo "Movie Added Succesfully";
} 
else {
    echo "Error: Adding Movie Failed";
}

include ('../layouts/submitMovie.php');	
?>

