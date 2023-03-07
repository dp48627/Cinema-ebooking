<?php include('../layouts/header.php'); ?>

<?php 

    if(isset($_POST['Login']))
    {
    $email = $_POST['email'];
    $password = $_POST['password'];




    $select = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
    $row = mysqli_fetch_array($select);


    if(is_NULL($row)){
     echo "No valid Email on record Redirecting you to the registration";
           header('Refresh: 2; URL = ../site/SignUp.php');

    } else {
        $verify = password_verify($password, $row['password']);
     if ($verify) {
      echo 'Password Verified!  ';
        } else {
      echo 'Incorrect Password!  ';
        }
    


    if (is_array($row) && $verify) {
        $_SESSION["id"] = $row['id'];
        if ($row['authorization'] == 'Admin' ) {
            echo 'Welcome Admin Redirecting...';
           header('Refresh: 2; URL = ../admin/home.php');
        } else {
                echo "WELCOME: redirecting you to the home page";
           header('Refresh: 2; URL = ../site/home.php');
        }

    } else {
        echo "invalid email or password Please Try again Redirecting you to the Login";
           header('Refresh: 2; URL = ../site/LoginPage.php');
    }

           



    }
    }


    



    else
    {
        echo "redirecting...";
         header('Refresh: 1; URL = ../site/forgotpass.php');
    }

    ?>