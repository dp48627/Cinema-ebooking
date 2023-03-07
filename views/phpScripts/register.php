<?php include('../layouts/header.php'); 

$newEmail = $_POST['email'];
$newPassword = $_POST['password'];
$newPromo = $_POST['promoBox'];
$newCardNum = $_POST['cardNumber'];
$newCardName = $_POST['cardHolderName'];
$chosenCardType = $_POST['type'];
$newBank = $_POST['bank'];
$newCVV = $_POST['cvv'];
$newExpMonth = $_POST['expMonth'];

$maskedNum = str_pad(substr($newPassword,-4),strlen($newPassword),"*",STR_PAD_LEFT);


//Encrypt data
$newPassword = password_hash($newPassword, 
          PASSWORD_DEFAULT);
//Check for duplicate emails
$query = "SELECT * FROM users WHERE email = '$newEmail'";
$emailDupes = $con->query($query);

if(mysqli_num_rows($emailDupes) > 0) {
	header('URL = ../site/regError.php');
}

//post to users table

$query= $con->prepare("INSERT INTO users (email, password, emailPromo)
			VALUES ('$newEmail','$newPassword', '$newPromo')");
$success = $query->execute();

//Retrieve new user ID
$query = "SELECT * FROM users WHERE email = '$newEmail'";
$users = $con->query($query);

foreach ($users as $user) :
	$newUserID = $user['id'];
endforeach;

// insert new customer with default accountstate of inactive and userID = newUserID
$query = "SELECT * FROM customers WHERE userID = '$newUserID'";
$CustomerDupes = $con->query($query);

if(mysqli_num_rows($CustomerDupes) > 0) {
	header('URL = ../site/regError.php');
} else {
	$query= $con->prepare("INSERT INTO customers (userID)
			VALUES ('$newUserID')");
	$query->execute();
}

//add CreditCard
if (!empty($newCardName)) {
$query= $con->prepare("INSERT INTO creditcards (userID,cardTypeID,number,maskedNum,cvv,expirationDate,bank,nameOnCard)
			VALUES ('$newUserID','$chosenCardType','$newCardNum',' $maskedNum','$newCVV','$newExpMonth','$newBank','$newCardName')");
$success = $query->execute();
	}
?>
<?php 
/*
		if($success > 0) {
			print("Type added Succesfully. \n");
			           header('Refresh: 2; URL = ../site/home.php');
		} else {
			print("Error, type could not be added");
		}
		*/
				?>
				
<form action="../site/home.php" method="post">
	<button type="submit" class="btn btn-secondary"> Return to home page </button>
</form>