<?php include('../layouts/header.php'); ?>
<head>
    <title>Book Tickets</title>
   <link rel="stylesheet" href="../../assets/css/basicStyle.css">
</head>

<body>
    <div class="container" style="text-align: center;">
        <form>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h1><strong>Book Tickets For: Matrix Resurrections</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label">Select Number of Tickets:</label></div>
                    <div class="col"><input class="form-control" type="number"></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label">Select Type for ticket #1</label></div>
                    <div class="col"><select class="form-select">
                            <option value="12" selected="">Adult</option>
                            <option value="13">Child</option>
                            <option value="14">Senior</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label">Select Type for ticket #2</label></div>
                    <div class="col"><select class="form-select">
                            <option value="12" selected="">Adult</option>
                            <option value="13">Child</option>
                            <option value="14">Senior</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label">Select Type for ticket #3</label></div>
                    <div class="col"><select class="form-select">
                            <option value="12" selected="">Adult</option>
                            <option value="13">Child</option>
                            <option value="14">Senior</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Seat Selections Remaining: 3</h4>
                    </div>
                    <div class="col"><img class="d-flex flex-shrink-1 flex-fill justify-content-lg-center align-items-lg-center" src="../../assets/imgs/seats-example.jpg" width="500" height="500"></div>
                </div>
                <div class="row">
                    <div class="col"><button class="btn btn-primary" type="button" style="transform: scale(2);background: var(--bs-gray);">Add Tickets to Cart</button></div>
                    <div class="col"><button class="btn btn-primary" type="button" style="transform: scale(2);border-right-color: var(--bs-red);background: var(--bs-red);">Cancel Booking</button></div><br><br>
                </div>
            </div>
        </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<?php include('../layouts/footer.php'); ?>