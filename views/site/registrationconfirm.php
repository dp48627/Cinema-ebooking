<?php include('../layouts/header.php'); ?>
<head>
    <link rel="stylesheet" href="../../assets/css/basicStyle.css">
    <title>Thank You For Registering</title>
</head>
<body>
    <div class="container d-md-flex align-self-center justify-content-md-center align-items-md-center">
        <div class="col text-center">
            <div class="row" style="border-color: var(--bs-blue);">
                <div class="col">
                    <h1>Thank you for Registering: User!</h1>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col"><p>Your account has succesfully been created. All that's left now is to verify your email
                        so you can begin booking Movies! A verification email has been sent to esr*****@uga.edu
                    </p></div>
                </div>
                <div class="row">
					<div class="col"><p>If you cannot see the verification email, please click the link below in order to resend.</p></div>
                </div>

                
                <div class="row">
                    <div class="col"><a href="#">Resend Verification Email</a></div>
                </div>
            </form>
        </div>
    </div>
	<br><br><br><br><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include('../layouts/footer.php'); ?>