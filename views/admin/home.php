<?php include('../layouts/adminheader.php'); ?>

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

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        </div>
    </div>

    <div id="movie-grid" class="row align-items-start mb-5">
    <?php for ($i = 0; $i < 5; $i++) { // foreach ($movies as $movie): ?>
        <!--div class="row justify-content-center align-items-center"-->
            <div id="movie_<?php echo $i // movieTitle?>" class="col-4 justify-content-center align-items-center px-md-2 mb-3">  
                <div class="col-sm-12">
                    <iframe width="100%"
                            height="275px" 
                            src=<?php echo "https://www.youtube.com/embed/9ix7TUGVYIo"// movieURL ?>
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                    ></iframe>
                </div>    
                <div class="col-sm-12">
                    <?php echo "Movie Title" ?>
                </div>
                <div class="col-sm-12">
                    <?php echo "Runtime" . "  |  " . "Rating" ?>
                </div>
                <div class="col-sm-12">
                    <?php echo "Released " . "Month DD, YYYY" ?>
                </div>  
                <div>
                    <button type="button" class="btn btn-outline-dark me-2">Book Movie</button>
                </div>
            </div>
        <!--/div-->
    <?php } // endforeach; ?>
    </div>
</div> 

<?php include('../layouts/footer.php'); ?>