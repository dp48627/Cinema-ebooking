<?php include('../layouts/header.php'); 

$select = mysqli_query($con, "SELECT * FROM users WHERE id = '$_SESSION[id]'");
    $row = mysqli_fetch_array($select);

$ogPassword = $_POST['password_verif'];
$newPassword = $_POST['new_password'];
$newPasswordConf = $_POST['new_password_verif'];

$verify = password_verify($ogPassword, $row['password']);
     if ($verify) {
		if($newPassword == $newPasswordConf) {
			$hash = password_hash($newPassword, PASSWORD_DEFAULT);
			$query= $con->prepare("UPDATE users SET password = '$hash' WHERE id = '$_SESSION[id]'");
			$success = $query->execute();
			if($success) {
				echo "Password Updated Succesfully Logging out";
				header('Refresh: 0; URL = ../phpScripts/signout.php');
			} else {
				echo "Password Updated Failed!!!";
			}
		} else {
			echo "Error: New Password Must Match";
		}
     } else {
      echo 'Incorrect Password!';
     }
	 
	 include ('../layouts/submitFooter.php');
?>

