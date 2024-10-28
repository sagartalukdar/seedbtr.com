<?php 

session_start();
if (isset($_SESSION['this_user_id'])) {

header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>SEED| ADMIN</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!-- Data Tables -->
	 <link rel="stylesheet" href="../datatable/css/bootstrap.min.css">
    <link rel="stylesheet" href="../datatable/css/datatables.min.css">
    <link rel="stylesheet" href="../datatable/css/style.css">

    <!-- dropzone -->
	<link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!--bootstrap -->

	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<!-- login style -->
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- inbox style -->
	<link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../assets/css/pages/login.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="../assets/img/seed1.png" />
		<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 




</head>

<body>
	<div class="main">
		<!-- Sing in  Form -->
		<section class="sign-in">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image">
						<figure><img src="../assets/img/pages/signin.jpg" alt="sign up image"></figure>
						
					</div>
					<div class="signin-form">
						<h2 class="form-title">Admin Login</h2>
						<div class="" style="color:red;">
						 <?php if (isset($_SESSION['errorLogin'])) {
                            echo $_SESSION['errorLogin'];
                            unset($_SESSION['errorLogin']);
                        } 
                            
                        ?>
                    </div>
						<form class="register-form" id="login-form"  method="POST" action="session/session.php">
							<div class="form-group">
								<div class="">
									<input name="username" type="text" placeholder="User Name"
										class="form-control input-height" required autofocus /> </div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="password" type="password" placeholder="Password"
										class="form-control input-height" required /> </div>
							</div>
							<div class="form-group">
								<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
								<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
									me</label>
							</div>
							<div class="form-group form-button">
								<button class="btn btn-round btn-primary" name="signin" id="signin">Login</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- end js include path -->
</body>


</html>