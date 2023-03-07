<?php include('../layouts/header.php'); ?>



<div class = "countainer">
    <div class = "py-5 text-center">
        <a href="">
            <img src="../../assets/imgs/logo-basic.png" alt="Logo" width = "200" height = "200">
        </a>
        <h2 class = "mb-4">Your order has been confirmed</h2>
        <p class ="lead">Hello, Donguk</p>
        <p class ="lead">Your order has been received and is now being processed. Your order details are shown below for your reference: </p>
        <p class ="lead">Order Date: <span id="datetime"></span></p>
    </div>
</div>
    
<div class="purchaserDetail">
    <table class="table">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Show Time</th>
                <th>Stadium</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width: 60%">Movie 1</td>
                <td>4:30 PM</td> 
                <td>Stadium A</td>
                <td>$15</td>
            </tr>
                <tr>
                    <td style="width: 60%">Movie 2</td>
                    <td>4:00 PM</td> 
                    <td>Stadium B</td>
                    <td>$17</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<div class = "countainer">
    <div class = "text-end">
        <p class="fw-bold fs-4"> Total: $32&nbsp&nbsp</p>
    </div>
</div>


<?php include('../layouts/footer.php'); ?>

<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>