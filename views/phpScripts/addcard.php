<?php include('../layouts/header.php');  

$newCardNum = $_POST['cardNumber'];
$newCardName = $_POST['cardHolderName'];
$chosenCardType = $_POST['type'];
$newBank = $_POST['bank'];
$newCVV = $_POST['cvv'];
$newExpMonth = $_POST['expMonth'];

//Encrypt data
$maskedNum = str_pad(substr($newCardNum,-4),strlen($newCardNum),"*",STR_PAD_LEFT);
$newCardNum = password_hash($newCardNum, 
          PASSWORD_DEFAULT);

$query= $con->prepare("INSERT INTO creditcards (userID,cardTypeID,number,maskedNum,cvv,expirationDate,bank,nameOnCard)
			VALUES ('$_SESSION[id]','$chosenCardType','$newCardNum',' $maskedNum','$newCVV','$newExpMonth','$newBank','$newCardName')");
$success = $query->execute();

if($success) {
		echo "Card Added Succesfully";
	} else {
		echo "Error: Adding Card Failed";
	}
	
	include ('../layouts/submitFooter.php');
	
?>

