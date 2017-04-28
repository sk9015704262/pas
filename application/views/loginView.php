<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!--
	* CoreUI - Open Source Bootstrap Admin Template
	* @version v1.0.0-alpha.4
	* @link http://coreui.io
	* Copyright (c) 2017 creativeLabs Łukasz Holeczek
	* @license MIT
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="shortcut icon" href="img/favicon.png">

	<title>PAS-Login</title>

	<!-- Icons -->
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
	<link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/simple-line-icons.css" rel="stylesheet">

	<!-- Main styles for this application -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" >
	<!-- Bootstrap and necessary plugins -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



	<!-- Plugins and scripts required by all views -->
	<script src="<?php echo base_url() ?>assets/js/views/charts.js"></script>


	<!-- GenesisUI main scripts -->

	<script src="<?php echo base_url() ?>assets/js/app.js"></script>

</head>

<body class="app flex-row align-items-center">

	<div class="container">

		<div class="row justify-content-center">
	<div class="text-center  col-md-7">
		  <h1>Placement Automation System</h1>
		  </div>
<div class="text-center col-md-7">
		  <p>TPO LOGIN</p>
		  </div>

		  </div>

		<div class="row justify-content-center">


			<div class="col-md-8">
				<div class="card-group mb-0">
					<div class="card p-2">
						<div class="card-block">
							<h1>Login</h1>
							<?php $this->load->helper('form');?>
							<?php echo form_open('Login/validate_credentials'); ?>
							<p class="text-muted">Sign In to your account</p>
							<?php if (isset($data)) { ?>
<small> Invalid Username and Password </small>
<?php } ?>
						<div class="input-group mb-1">
								<span class="input-group-addon"><i class="icon-user"></i>
								</span>
								<input type="text" class="form-control" name="username" placeholder="Email">
							</div>
							<div class="input-group mb-2">
								<span class="input-group-addon"><i class="icon-lock"></i>
								</span>
								<input type="password" name="psw"  class="form-control" placeholder="Password">
							</div>
							<div class="row">
								<div class="col-12">
									<input  type="submit" value="Login" class="form-control btn btn-primary px-2">
								</div>

								<?php echo form_close(); ?>
																																<!--
																																<div class="col-6 text-right">
																																				<button type="button" class="btn btn-link px-0">Forgot password?</button>
																																			</div> -->
																																		</div>
																																	</div>
																																</div>
																																<div class="card card-inverse card-primary py-3 hidden-md-down" style="width:44%">
																																	<div class="card-block text-center">
																																		<div>
																																			<h2>Sign up</h2>
																																			<p>Not a Member ?</p>
																																			<button type="button" class="btn btn-primary active mt-1">Register Now!</button>
																																		</div>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>

																												<!-- Bootstrap and necessary plugins -->
																												<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
																												<script src="../../bower_components/tether/dist/js/tether.min.js"></script>
																												<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

																											</body>

																											</html>
