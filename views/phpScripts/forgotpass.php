<?php include('../layouts/header.php'); ?>

<?php 
//session_start();

    if(isset($_POST['reset']))
    {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admincode = $_POST['adminCode'];
    $password = password_hash($password, 
          PASSWORD_DEFAULT);
    //echo $email;
    //echo $password;
    //echo $admincode;
    //admin master code to reset 
    $masterCode = 'reset';
    if ($admincode == $masterCode){
        $query  = "UPDATE users SET password = '$password' WHERE email = '$email'";
        $result = mysqli_query($con, $query);
        if($result) {
        // do something like success
        echo 'sucess!!  ';
        echo "redirecting...";
         header('Refresh: 2; URL = ../site/LoginPage.php');
        } else {
   // do something else
   echo 'error';
        }


    } else {
        echo 'wrong code';
        echo "redirecting...";
         header('Refresh: 2; URL = ../site/LoginPage.php');
    }

  }       
    else
    {

    }

    ?>