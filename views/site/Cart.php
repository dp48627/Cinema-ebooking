<?php include('../layouts/header.php'); ?>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


<div class="container-fluid p-5 bg-light text-black text-center">
  <h1>Check out</h1>
   <div class="col" style="background-color:white;">
     <div class="col" style="background-color:white;">
           <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
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

          <button type="button" class="btn btn-secondary">Edit Cart</button>

        </ul>
    </ul> 

    
    
    
    
    
    
    
    
    
    
    
    
    </div>
    <br>
  <div class= "row">

    <div class="col" style="background-color:white;">

        <div class="col">

          <h4 class="mb">Billing address</h4><br>

          <form class="needs-validation" novalidate>

            <div class="row">
              <div class="col">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="First name ex. John" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>


              <div class="col">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Last name ex. Smith" value="" required><br>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>



            <div class="mb">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required><br>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite"><br>
            </div>

            <div class="row">

              <div class="col">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>



              <div class="col">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required><br>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>

            </div>


            <h4 class="mb-3">Payment</h4><br><br>

            <div class="row">

              <div class="col">
                <label for="cc-name">Name</label>
                <input type="text" class="form-control" id="cc-name" placeholder="ex. John Smith" required>
                <small class="text-muted">Displayed name on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>


              <div class="col">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="1234-123456-12345" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required><br>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>

            </div>

            <h4 class="mb-3">Expiration</h4><br><br>
            <div class="row">

              <div class="col-md">
                <label for="state">Month</label>

                <select class="custom-select d-block w-100" id="month" required>
                  <option value="">Choose...</option>
                  <option>Januray</option>
                </select>

                <div class="invalid-feedback">
                  Please provide the experation date.
                </div>
              </div>
          

              

                <div class="col-md">
                <label for="state">Year</label>
                <select class="custom-select d-block w-100" id="year" required>
                  <option value="">Choose...</option>
                  <option>1999</option>
                </select>
                <div class="invalid-feedback">
                  Please provide the experation date.
                </div><br>
				</div>

                <h4 class="mb-3">Confirm payment </h4><br>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Finalize Checkout</button>
                  <h4 class="mb-3">  </h4>

         



              </div>
                



                
            </form>

        </div>
      </div>

    </div>




  

 
    </div>

  </div>



  </body>
<?php include('../layouts/footer.php'); ?>
