<?php include('../layouts/adminheader.php'); ?>


<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
<head>
  <title>Edit Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<?php
    $select = mysqli_query($con, "SELECT * FROM movies WHERE id = '$_POST[movieID]'");
    $movie = mysqli_fetch_array($select);
?>

<div class="container-fluid p-5  text-black text-center">
    <div class = "py-5 text-center">
        <a href="">
            <img src="../../assets/imgs/logo-basic.png" alt="Logo" width = "200" height = "200">
        </a>
        <h2 class = "mb-4">Update Movie Information for: <?php echo $movie['name']?></h2>
    </div>
</div>
</div>
<div class = "container">

  <div class="row">

    <div class="col-sm-12" style="background-color:white;">
		<div class="container  align-items-md-center">
			<div class="col">
                <form action="../phpscripts/updateMovie.php" method="post" form>					
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Movie Title: </td>
                                                <td><input class="form-control" type="text" placeholder="<?php echo $movie['name'] ?>" style="border-width: 2px;border-color: var(--bs-dark);" name = "movieName" required></td>
                                            </tr>
                                            <tr>
                                                <td>Rating: </td>
                                                <td><select name="movieRating" id="movieRatingSelect" required>
                                                        <?php for($i = 0; $i<4; $i++): // 'G','PG','PG-13','R'
                                                                if($i == 0) { ?>
                                                                    <option value="<?php echo 'G'?>" <?php if($movie['rating'] == 'G') echo 'selected'; ?>>
                                                                        <?php echo 'G'?>
                                                                    </option>
                                                                <?php } 
                                                                if($i == 1) { ?>
                                                                    <option value="<?php echo 'PG'?>" <?php if($movie['rating'] == 'PG') echo 'selected'; ?>>
                                                                        <?php echo 'PG'?>
                                                                    </option>
                                                                <?php }
                                                                if($i == 2) { ?>
                                                                    <option value="<?php echo 'PG-13'?>" <?php if($movie['rating'] == 'PG-13') echo 'selected'; ?>>
                                                                        <?php echo 'PG-13'?>
                                                                    </option>
                                                                <?php }
                                                                if($i == 3) { ?>
                                                                    <option value="<?php echo 'R'?>" <?php if($movie['rating'] == 'R') echo 'selected'; ?>>
                                                                        <?php echo 'R'?>
                                                                    </option>
                                                                <?php } ?>
                                                        <?php endfor;?>		
                                                </select></td>
                                            </tr>
                                            <tr>
                                                <td>Runtime: </td>
                                                <td><input class="form-control" type="time" placeholder="<?php echo $movie['runtime'] ?>" style="border-width: 2px;border-color: var(--bs-dark);" name = "movieRuntime" required></td>
                                            </tr>
                                            <tr>
                                                <td>Release Date: </td>
                                                <td><input class="form-control" type="date" placeholder="<?php echo $movie['releaseDate'] ?>" name = "releaseDate" required></td>
                                            </tr>
                                            <tr>
                                                <td>Trailer URL: </td>
                                                <td><input class="form-control" type="text" placeholder="<?php echo $movie['trailerURL'] ?>" style="border-width: 2px;border-color: var(--bs-dark);" name = "movieTrailerURL" required></td>
                                            </tr>
                                            <tr>
                                                <td>Tags: </td>
                                                <td><input class="form-control" type="text" placeholder="<?php echo $movie['tags'] ?>" style="border-width: 2px;border-color: var(--bs-dark);" name = "movieTags" required></td>
                                            </tr>
                                            <tr>
                                                <td>Synopsis: </td>
                                                <td><input class="form-control" type="text" placeholder="<?php echo $movie['synopsis'] ?>" style="border-width: 2px;border-color: var(--bs-dark);" name = "movieSynopsis" required></td>
                                            </tr>
                                            <!-- add more fields as needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <input type="submit" class="btn btn-success" value = "Submit">
                </form>
			</div>
		</div>
	</div>
 
  </div>
</div>
</body>
<br>
<br>
<br>
<?php include('../layouts/footer.php'); ?>