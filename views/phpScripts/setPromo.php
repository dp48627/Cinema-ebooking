<?php include('../layouts/header.php'); 


$currOpt = $_POST['currentPromo'];

if($currOpt == 'Y') {
	$newOpt = 'N' ;
} else {
	$newOpt = 'Y';
}
$query= $con->prepare("UPDATE users SET emailPromo = '$newOpt' WHERE id = '$_SESSION[id]'");
		$success = $query->execute();
if($success) {
	echo "Email Promotions now set to '$newOpt'";
}


include ('../layouts/submitFooter.php');
?>
	