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

        <button type="button" class="btn btn-success me-2">Create Movie</button>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        </div>
    </div>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Movie Title</th>
        <th scope="col">Currently Has Promotion</th>
        <th scope="col">Promotion Description</th>
        <th scope="col">Promotion Expiry</th>
        <th scope="col">Promotion Options</th>
        </tr>
    </thead>
    <tbody>
    <?php for ($i = 0; $i < 5; $i++) { // foreach ($movies as $movie): ?>
        <tr>
            <th scope="row"><?php echo $i //movieID ?></th>
            <td><?php echo "Movie Title" ?></td>
            <td><?php echo "True" ?></td>
            <td><?php echo "All tickets are 35% off" ?></td>
            <td><?php echo "Month DD, YYYY" ?></td>
            <td>
                <button type="button" class="btn btn-primary me-2">Create</button>
                <button type="button" class="btn btn-primary me-2">Edit</button>
                <button type="button" class="btn btn-danger me-2">Delete</button>
            </td>
        </tr>
    <?php } // endforeach; ?>
    </tbody>
    </table>
</div> 

<?php include('../layouts/footer.php'); ?>