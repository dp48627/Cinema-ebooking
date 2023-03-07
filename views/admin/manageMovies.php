<?php 
include('../layouts/adminheader.php'); 
include('../phpScripts/getMovies.php');    
?>

<div class="container">
    <div class="filter-bar">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-6 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 text-secondary">Currently Showing</a></li>
            <li><a href="#" class="nav-link px-2 text-secondary">Coming Soon</a></li>
        </ul>

        <form action="../admin/addMovie.php" method="post" form>
            <input type="submit" class="btn btn-success" value = "Create Movie">
        </form>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        </div>
    </div>

    <div id="movie-grid" class="row align-items-start mb-5">
    <?php if ($movies != NULL):
        foreach ($movies as $movie): ?>
            <div id="movie_<?php echo $movie['id']?>" class="col-4 justify-content-center align-items-center px-md-2 mb-3">  
                <div class="col-sm-12">
                    <iframe width="100%"
                            height="275px" 
                            src=<?php echo $movie['trailerURL'] ?>
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                    ></iframe>
                </div>    
                <div class="col-sm-12">
                    <?php echo $movie['name'] ?>
                </div>
                <div class="col-sm-12">
                    <?php echo $movie['runtime'] . "  |  " . $movie['rating'] ?>
                </div>
                <div class="col-sm-12">
                    <?php echo "Released " . $movie['releaseDate'] ?>
                </div>  
                <div class="row align-items-start">
                    <div class="col-sm-4">
                        <form action="../admin/updateMovie.php" method="post" form>
                            <input type ="hidden" name="movieID" value=<?php echo $movie['id']?> >
                            <input type="submit" class="btn btn-primary" value = "Edit Details">
                        </form>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-primary">Edit Showtimes</button>
                    </div>
                    <div class="col-sm-4">
                        <form action="../phpscripts/removeMovie.php" method="post" form>
                            <input type ="hidden" name="movieID" value=<?php echo $movie['id']?> >
                            <input type="submit" class="btn btn-danger" value = "Delete">
                        </form>
                    </div>
                </div>
            </div>
    <?php endforeach; 
    endif; ?>
    </div>
</div> 

<?php include('../layouts/footer.php'); ?>