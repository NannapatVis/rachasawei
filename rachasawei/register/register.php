<?php
		//2.save regist info into database

		include_once "dbconnect.php";

		//set initial error flag as false
		$chk_error = false;

		//check it form is submitted
		if (isset($_POST['signup'])) {
			$user_name = $_POST['txtName'];
			$user_email = $_POST['txtEmail'];
			$user_passwd = $_POST['txtPassword'];
			$user_cpassword = $_POST['txtCPassword'];

			//validate user name
			if (preg_match_all("/^[a-zA-Z]+$/", $user_name)) {
				$chk_error = true;
				$err_msg = "Name must contain only alphabets and space";
			}
			//validate e-mail
			if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
				$chk_error = true;
				$err_msg = "Please enter valid e-mail";
			}
			//validate password
			if (strlen($user_passwd) < 6) {
				$chk_error = true;
				$err_msg = "Password must be minimum of 6 characters";
			}
			//validate password and confirm password
			if ($user_passwd != $user_cpassword) {
				$chk_error = true;
				$err_msg = "Password don't match";
			}

			//insert into users table
			if ($chk_error == false) {
				//INSERT INTO users(name,email,passwd) VALUSES('John','john@gmail.com', 'dffffddff')
				$SQL = "INSERT INTO users(name, email, password) VALUES('" . $user_name . "','" . $user_email . "','" . md5($user_passwd) . "')";
				if (mysqli_query($conn, $SQL)) {
					//insert success
					$success_msg = "Successfuly registered. <a href='login.php>Click here to login</a>";
				} else {
					//insert error
					$chk_error = true;
					$err_msg = "Insert error! Please contact admin.";
				}
			}
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>RACHASAWEI Registration</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="rachasawei.php">RACHASAWEI</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login.php">Login</a></li>
				<li class="active"><a href="register.php">Sign Up</a></li>
				<!--<li><a href="admin_login.php">Admin</a></li>-->
			</ul>
		</div>
	</div>
</nav>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<center><legend>Sign Up</legend></center>

					<div class="form-group">
						<label for="txtName">Name</label>
						<input type="text" name="txtName" placeholder="Enter Full Name" required value="" class="form-control" maxlength="30" />
					</div>

					<div class="form-group">
						<label for="txtEmail">Email</label>
						<input type="text" name="txtEmail" placeholder="Email" required value="" class="form-control" maxlength="30" />
					</div>

					<div class="form-group">
						<label for="txtPassword">Password</label>
						<input type="password" name="txtPassword" placeholder="Password" required class="form-control" maxlength="12" />
					</div>

					<div class="form-group">
						<label for="txtCPassword">Confirm Password</label>
						<input type="password" name="txtCPassword" placeholder="Confirm Password" required class="form-control"maxlength="12" />
					</div>

					<center><div class="form-group">
						<input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
					</div></center>
				</fieldset>
			</form>
			<!--3.display message -->
			<?php
				if ($chk_error) {
					echo "<span class='text-danger'>" . $err_msg . "</span>"; 
				} else {
					if (isset($success_msg)) {
						echo "<span class='text-success'>" . $success_msg . "</span>";
					}
				}
				
			?>

		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
		Already Registered? <a href="login.php">Login Here</a>
		</div>
	</div>
</div>
</body>
</html>
