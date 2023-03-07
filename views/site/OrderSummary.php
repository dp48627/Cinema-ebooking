<?php include('../layouts/header.php'); ?>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
<head>
  <title>Order Summary</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-light text-black text-center">
  <h1>Order Summary</h1>
</div>

  <div class="row">

    <div class="col-sm-8" style="background-color:white;">
           <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">&nbsp&nbspYour cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
      
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Movie Ticket 1</h6>
             
              <small class="text-muted">Time: 7:25 PM </small>
              <br>
              <small class="text-muted">seat # 25 </small>
              <br>
              <small class="text-muted">auditorium C </small>
            </div>
            <span class="text-muted">$12</span>
             <button type="button" class="btn btn-warning">delete</button>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Movie Ticket 2</h6>
              <small class="text-muted">Time: 4:00 PM </small>
              <br>
              <small class="text-muted">seat # 10 </small>
              <br>
              <small class="text-muted">auditorium A </small>

            </div>
            <span class="text-muted">$12</span>
              <button type="button" class="btn btn-warning">delete</button>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Movie Ticket 3</h6>
              <small class="text-muted">Time: 2:20 PM </small>
              <br>
              <small class="text-muted">seat # 1 </small>
              <br>
              <small class="text-muted">auditorium B </small>
            </div>
            <span class="text-muted">$12</span>
              <button type="button" class="btn btn-warning">delete</button>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">−$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$31</strong>
          </li>
          <br>
                  <p style="display:inline">&nbsp&nbsp</p><button type="button" class="btn btn-secondary">Edit Cart</button>
              <button type="button" class="btn btn-primary">Check Out</button>
        </ul>
    </ul> 

    
    
    
    
    
    
    
    
    
    
    
    
    </div>
    <div class="col-sm-4" style="background-color:white;">
     <form class="card p-2">
     <span class="text-primary">Enter Promotion Code Here</span>
          <div class="input-group bottom">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
 
 
      </div>


     

</div>
  



</body>





<?php include('../layouts/footer.php'); ?>