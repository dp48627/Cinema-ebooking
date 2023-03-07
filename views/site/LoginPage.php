<?php include('../layouts/header.php'); ?>


<head>
    <link rel="stylesheet" href="../../assets/css/basicStyle.css">
</head


<body>
    <div class="container d-md-flex align-self-center justify-content-md-center align-items-md-center">
        <div class="col text-center">
            <div class="row" style="border-color: var(--bs-blue);">
                <div class="col">
                    <h1>Login:</h1>
                </div>
            </div>
            <form id = "login" name = "loginPage" onsubmit="return validateForm()" action= "../phpScripts/process.php" method="post">
                <div class="row">
                    <div class="col-md-4"><label class="col-form-label">Email:</label></div>
                    <div class="col"><input class="form-control" type="email" name = "email" ></div>
                </div>
                <div class="row">
                    <div class="col-md-4"><label class="col-form-label">Password:</label></div>
                    <div class="col"><input class="form-control" type="text" name = "password"  ></div>
                </div>
                <div class="row">
 
                    <div class="col"><button class="btn btn-primary" type="submit" name ="Login">Log In</button></div>
                </div>

                <div class="row">
 
                    <div class="col"><button class="btn btn-primary" type="submit" name ="ForgotPass ">Forgot Password</button></div>
                </div>

            </form>
			<br><br><br><br>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include('../layouts/footer.php'); ?>