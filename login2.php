<?php
include "db.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WeFarm</title>
<link href="css/bootstrap-5.3.8.css" rel="stylesheet" type="text/css">
<script src="js/validation.js" defer></script>	
</head>
	
<body class="bg-success">
<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="card login-card shadow-lg col-md-10">
        <div class="row g-0 align-items-stretch"> 
			
			<div class="col-md-6 d-none d-md-block overflow-hidden">
                <img src="images/pexels-naratip-sretan-297235907-13293414.jpg" style="width: 100%; height: 100%; min-height: 100%; object-fit: cover;"   alt="Farm Background">
            </div>

            <div class="col-md-6 bg-white d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-center">
                    
                    <form id="form" method="POST">
                        <h2 class="fw-bold mb-4 text-success" style="letter-spacing: 2px;">LOGIN</h2>
                        <p class="text-muted mb-5">Welcome back! Please login to your account.</p>
                            <p id="error-message">dsfsfd</p>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg bg-light border-0" 
                                   placeholder="Username" id="username">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control form-control-lg bg-light border-0" 
                                   placeholder="Password" id="password">
                        </div>

                        <div class="d-grid shadow-sm">
                            <button type="submit" class="btn btn-success btn-lg fw-bold">LOGIN</button>
                        </div>

                        <div class="mt-4">
                            <a href="#" class="text-muted small text-decoration-none">Forgot password?</a>
                        </div>
                    </form>

                </div>
            </div>
            </div>
    </div>
</div>
<script src="js/popper-2.11.8.min.js"></script> 
<script src="js/bootstrap-5.3.8.js"></script>
</body>
</html>