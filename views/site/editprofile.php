<?php include('../layouts/header.php'); ?>


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
  $query ="SELECT c.id AS cID, c.userID, c.cardTypeID, c.maskedNum, c.cvv, c.expirationDate,c.bank,c.nameOnCard,ct.type FROM creditcards c INNER JOIN cardtypes ct ON c.cardTypeID = ct.id WHERE c.userID = '$_SESSION[id]'";
    $cards = $con->query($query);
  $select = mysqli_query($con, "SELECT * FROM users WHERE id = '$_SESSION[id]'");
    $user = mysqli_fetch_array($select);
  $query = "SELECT * FROM cardtypes";
	$cardTypes = $con->query($query);
?>

<div class="container-fluid p-5  text-black text-center">
    <div class = "py-5 text-center">
        <a href="">
            <img src="../../assets/imgs/logo-basic.png" alt="Logo" width = "200" height = "200">
        </a>
        <h2 class = "mb-4">Edit Profile</h2>
        <p class ="lead">Hello,  <?php  echo $user['email']?></p>
        <p class ="lead">You can modify your personal information here.</p>
    </div>
</div>
</div>
<div class = "container">

  <div class="row">

    <div class="col-sm-12" style="background-color:white;">
          <h1> Current profile Information :</h1><br>
		<div class="container  align-items-md-center">
			<div class="col">
					<div class="row">
							 <span class="text-dark">Email: <?php  echo $user['email']?></span>
					</div><br>

					<?php foreach($cards as $c):
					//Mask all but last 4 digits of CC number
					$maskedNum = str_pad(substr($c['maskedNum'],-4),strlen($c['maskedNum']),"*",STR_PAD_LEFT);
					?>
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Card</th>
										<th>
											<form action="../phpscripts/removecard.php" method="post" form>
												<input type ="hidden" name="card_id" value=<?php echo $c['cID']?> >
												<input type="submit" value = "Delete">
											</form>
										</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Holder:</td>
											<td><?php echo $c['nameOnCard']?></td>
										</tr>
										<tr>
											<td>CCNumber:</td>
											<td><?php echo $maskedNum?></td>
										</tr>
										<tr>
											<td>Type:</td>
											<td><?php echo $c['type']?></td>
										</tr>
										<tr>
											<td>Bank</td>
											<td><?php echo $c['bank']?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<?php endforeach;?>	
					<?php if(mysqli_num_rows($cards) < 3) {?>
					<form action="../phpscripts/addcard.php" method="post" form>					
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>ADD CARD</th>
											<th>
												<input type="submit" value = "Add">
											</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Holder:</td>
												<td><input class="form-control" type="text" style="border-width: 2px;border-color: var(--bs-dark);"name = "cardHolderName" ></td>
											</tr>
											<tr>
												<td>CCNumber:</td>
												<td><input class="form-control" type="number" style="border-width: 2px;border-color: var(--bs-dark);" name = "cardNumber" ></td>
											</tr>
											<tr>
												<td>Type:</td>
												<td><select name="type" id="cardTypeSelect">
														<?php foreach($cardTypes as $ct):?>
															<option value="<?php echo $ct['id']?>"><?php echo $ct['type']?></option>
														<?php endforeach;?>		
												</select></td>
											</tr>
											<tr>
												<td>Bank</td>
												<td><input class="form-control" type="text" style="border-width: 2px;border-color: var(--bs-dark);"name = "bank" ></td>
											</tr>
											<tr>
												<td>CVV</td>
												<td><input class="form-control" type="number" style="border-width: 2px;border-color: var(--bs-dark);" name = "cvv" ></td>
											</tr>
											<tr>
												<td>Exp Month</td>
												<td><input class="form-control" type="month" name = "expMonth" ></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</form>
					<?php } else {?>	
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>Credit Cards Full, Remove a Card to add more</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					<?php }?>	
					<br>
					<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>CHANGE PASSWORD</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					<form id = "passwordchange" onsubmit="return validateForm()" action= "../phpScripts/changepassword.php" method="post">
						 <div class="row">
							<div class="col-md-4"><label class="col-form-label">Original Password:</label></div>
							<div class="col"><input class="form-control" type="password" name = "password_verif"required ></div>
						</div><br>
						
						<div class="row">
							<div class="col-md-4"><label class="col-form-label">New Password:</label></div>
							<div class="col"><input class="form-control" type="password" name = "new_password"required ></div>
						</div><br>
						
						<div class="row">
							<div class="col-md-4"><label class="col-form-label">Confirm New Password:</label></div>
							<div class="col"><input class="form-control" type="password" name = "new_password_verif"required ></div>
						</div>
						
						<div class="row" style="padding: 20px;">
							<input type="submit" class ="btn" style="background: var(--bs-blue)" onclick="check(); event.preventDefault();" value="Submit Password Change">
						</div>
						<br><br>
					</form>
					<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<form action="../phpscripts/setPromo.php" method="post" form>
												<th>CHANGE PROMOTION</th>
												<?php if($user['emailPromo'] == 'Y') {?>
												<th>
														<input type ="hidden" name="currentPromo" value='Y' >
														<input type="submit" value = "Opt Out of Promotions">
												</th>
												<?php } else {?>
												<th>
														<input type ="hidden" name="currentPromo" value='N' >
														<button type="submit"  class="btn btn-secondary" >Opt Into Promotions </button>
												</th>
												<?php }?>
												</form>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					<div class="row">
						<span class="text-dark">Currently Receiving Promotions: <?php  echo $user['emailPromo']?></span>

					</div>
					
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