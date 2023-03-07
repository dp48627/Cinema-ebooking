<?php include('../layouts/adminheader.php'); 

$id = $_POST['movieID'];
$name = $_POST['movieName'];
$rating = $_POST['movieRating'];
$runtime = $_POST['movieRuntime'];
$releaseDate = $_POST['movieReleaseDate'];
$trailerURL = $_POST['movieTrailerURL'];
$tags = $_POST['movieTags'];
$synopsis = $_POST['movieSynopsis'];

$query = $con->prepare("UPDATE movies 
                        SET name = '$name', 
                            rating = '$rating', 
                            runtime = '$runtime', 
                            releaseDate = '$releaseDate', 
                            trailerURL = '$trailerURL', 
                            tags = '$tags', 
                            synopsis = '$synopsis'
                        WHERE id = '$id'");
$success = $query->execute();

if($success) 
{
    echo "Movie Updated Succesfully";
} 
else {
    echo "Error: Movie Update Failed";
}

include ('../layouts/submitMovie.php');
?>