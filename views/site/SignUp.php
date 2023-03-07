<?php include('../layouts/header.php'); ?>


<?php
	$query = "SELECT * FROM cardtypes";
	$cardTypes = $con->query($query);
?>



<head>
    <link rel="stylesheet" href="../../assets/css/basicStyle.css">
</head>
<body>



    <div class="container d-md-flex align-self-center justify-content-md-center align-items-md-center">
        <div class="col text-center">
            <div class="row">
                <div class="col">
                    <h1>Register New User:</h1>
                </div>
            </div>
            <form id = "register" name = "register" onsubmit="return validateForm()" action= "../phpScripts/register.php" method="post">
                <div class="row">
                    <div class="col-md-4"><label class="col-form-label">First Name:</label></div>
                    <div class="col"><input class="form-control" type="text" style="border-width: 2px;border-color: var(--bs-dark);" name = "fname"required></div>
                </div>


                <div class="row">
                    <div class="col-md-4"><label class="col-form-label">Last Name:</label></div>
                    <div class="col"><input class="form-control" type="text" style="border-width: 2px;border-color: var(--bs-dark);" name = "lname"required></div>
                </div>


                <div class="row">
                    <div class="col-md-4"><label class="col-form-label">Email:</label></div>
                    <div class="col"><input class="form-control" type="email" style="border-width: 2px;border-color: var(--bs-dark);" name = "email"required></div>
                </div>
                <div class="row">
                    <div class="col-md-4"><label class="col-form-label">Password:</label></div>
                    <div class="col"><input class="form-control" type="password" name = "password"required ></div>
                </div>
                <div class="row">
                    <div class="col-md-4"><label class="col-form-label">Credit Card(Optional)</label></div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-4"><label class="col-form-label">Card Number:</label></div>
                            <div class="col"><input class="form-control" type="number" style="border-width: 2px;border-color: var(--bs-dark);" name = "cardNumber" ></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><label class="col-form-label">Holder Name:</label></div>
                            <div class="col"><input class="form-control" type="text" style="border-width: 2px;border-color: var(--bs-dark);"name = "cardHolderName" ></div>
                        </div>
						
						 <div class="row">
                            <div class="col-md-4"><label class="col-form-label">Card Type:</label></div>
                            <div class="col"><select name="type" id="cardTypeSelect">
								<?php foreach($cardTypes as $ct):?>
										<option value="<?php echo $ct['id']?>"><?php echo $ct['type']?></option>
								<?php endforeach;?>		
							</select></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"><label class="col-form-label">Bank Name:</label></div>
                            <div class="col"><input class="form-control" type="text" style="border-width: 2px;border-color: var(--bs-dark);"name = "bank" ></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4"><label class="col-form-label">CVV:</label></div>
                            <div class="col-lg-3"><input class="form-control" type="number" name = "cvv"  ></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4"><label class="col-form-label">Expiration Month:</label></div>
                            <div class="col"><input class="form-control" type="month" name = "expMonth" ></div>
                        </div>
                    </div>
                </div>
                <div class="row">

               <div class="col-md"><label class="col-form-label">Check Box to receive Promotions about upcoming movies</label></div>


               <div>
			   <div class="row">
			   <div class="form-check col-md">
			   </div>
               <div class="form-check col-md">
                 <input class="form-check-input" type="radio" name="promoBox" id="flexRadioDefault1" value= "N" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                      No I would not like to opt into promos
                    </label>
                    </div>
				<div class="form-check col-md">
			   </div>
			   </div>
			   <div class="row">
			   <div class="form-check col-md">
			   </div>
               <div class="form-check col-md">
                     <input class="form-check-input" type="radio" name="promoBox" id="flexRadioDefault2" value = "Y" >
                     <label class="form-check-label" for="flexRadioDefault2">
                        Yes I would like to opt into promos
                    </label>
                </div>
				<div class="form-check col-md">
			   </div>
                <div class="row" style="padding: 20px;">
                 <div class="row" style="padding: 20px;">
                    	<input type="submit" class ="btn" style="background: var(--bs-blue)" onclick="check(); event.preventDefault();" value="Submit">
                </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include('../layouts/footer.php'); ?>