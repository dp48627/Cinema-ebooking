<!doctype html>
<?php 
	include('../phpScripts/coreydbConnector.php');
	session_start()
?>

<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/sticky-footer.css" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">
    <style>
      body
      {
        padding-top: 8em;
      }
    </style>
  </head>

<body class="d-flex flex-column h-100">
<header class="p-3 bg-dark text-white fixed-top">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="../site/home.php" class="nav-link px-2 text-white">Home</a></li>
      </ul>



      <div class="text-end">
      
		<?php 
			 if(isset($_SESSION["id"])) {
		?>
        <a class="btn btn-outline-light me-2" href="../site/editprofile.php" >
        My Profile
		<a class="btn btn-outline-light me-2" href="../phpScripts/signout.php" >
        Sign Out
		<?php 
			} else {
		?>
        <a class="btn btn-outline-light me-2" href="../site/LoginPage.php" >
        Login
        <a class="btn btn-danger" href="../site/SignUp.php" >
        Sign Up
		<?php 
			 }
		?>

       </a>


      </div>

    </div>
  </div>
</header>