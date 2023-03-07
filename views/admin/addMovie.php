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

<div class="container-fluid p-5  text-black text-center">
    <div class = "py-5 text-center">
        <a href="">
            <img src="../../assets/imgs/logo-basic.png" alt="Logo" width = "200" height = "200">
        </a>
        <h2 class = "mb-4">Add a New Movie:</h2>
    </div>
</div>
</div>
<div class = "container">

  <div class="row">

    <div class="col-sm-12" style="background-color:white;">
		<div class="container  align-items-md-center">
			<div class="col">
                <form action="../phpscripts/addMovie.php" method="post" form>					
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Movie Title: </td>
                                                <td><input class="form-control" type="text" style="border-width: 2px;border-color: var(--bs-dark);" name = "movieName" required></td>
                                            </tr>
                                            <tr>
                                                <td>Rating: </td>
                                                <td><select name="movieRating" id="movieRatingSelect" required>
                                                        <?php for($i = 0; $i<4; $i++): // 'G','PG','PG-13','R'
                                                                if($i == 0) { ?>
                                                                    <option value="<?php echo 'G'?>">
                                                                        <?php echo 'G'?>
                                                                    </option>
                                                                <?php } 
                                                                if($i == 1) { ?>
                                                                    <option value="<?php echo 'PG'?>">
                                                                        <?php echo 'PG'?>
                                                                    </option>
                                                                <?php }
                                                                if($i == 2) { ?>
                                                                    <option value="<?php echo 'PG-13'?>">
                                                                        <?php echo 'PG-13'?>
                                                                    </option>
                                                                <?php }
                                                                if($i == 3) { ?>
                                                                    <option value="<?php echo 'R'?>">
                                                                        <?php echo 'R'?>
                                                                    </option>
                                                                <?php } ?>
                                                        <?php endfor;?>		
                                                </select></td>
                                            </tr>
                                            <tr>
                                                <td>Runtime (minutes): </td>
                                                <td><input class="form-control" type="number" style="border-width: 2px;border-color: var(--bs-dark);" name = "movieRuntime" required></td>
                                            </tr>
                                            <tr>
                                                <td>Release Date: </td>
                                                <td><input class="form-control" type="date" name = "movieReleaseDate" required></td>
                                            </tr>
                                            <tr>
                                                <td>Trailer URL: </td>
                                                <td><input class="form-control" type="text" style="border-width: 2px;border-color: var(--bs-dark);" name = "movieTrailerURL" required></td>
                                            </tr>
                                            <tr>
                                                <td>Tags: </td>
                                                <td><input class="form-control" type="text" style="border-width: 2px;border-color: var(--bs-dark);" name = "movieTags" required></td>
                                            </tr>
                                            <tr>
                                                <td>Synopsis: </td>
                                                <td><input class="form-control" type="text" style="border-width: 2px;border-color: var(--bs-dark);" name = "movieSynopsis" required></td>
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