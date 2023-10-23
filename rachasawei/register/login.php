<?php
		//4.check login info from users table
		session_start();

		if (isset($_SESSION['user_id'])) {
			//back to index.php
			header("Location: http://localhost/rachasawei/rachasawei.php");
		}

		include_once "dbconnect.php";

		//check if form is submitted
		if (isset($_POST['login'])) {
			$user_email = $_POST['txtEmail'];
			$user_passwd = $_POST['txtPassword'];
			//SELECT * EROM users WHERE email = '6410510114@psu.ac.th' AND password = '12345678';
			$SQL = "SELECT * FROM users WHERE email = '" . $user_email . "' AND password = '" . md5($user_passwd) . "'";
			$result = mysqli_query($conn, $SQL);
			if ($row = mysqli_fetch_array($result)) {
				//email & password correct
				$_SESSION["user_id"] = $row['id'];
				$_SESSION["user_name"] = $row['name'];
				header("Location: http://localhost/rachasawei/rachasawei.php");
			}else {
				//email or password incorrect
				$err_msg = "E-mail or password incorrect!";
			}
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>RACHASAWEI Login</title>
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
			<a class="navbar-brand" href=".php">RACHASAWEI</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<!--<li><a href="admin_login.php">Admin</a></li>-->
			</ul>
		</div>
	</div>
</nav>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="loginform">
				<fieldset>
					<center><legend>Login</legend></center>

					<div class="form-group">
						<label for="txtEmail">Email</label>
						<input type="text" name="txtEmail" placeholder="Your Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="txtPassword">Password</label>
						<input type="password" name="txtPassword" placeholder="Your Password" required class="form-control" />
					</div>

					<center><div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div></center>
				</fieldset>
			</form>
			<!--5.display message -->
			<span class='text-danger'>
				<?php 
					if(isset($err_msg)) {
						 echo $err_msg; 
						}
				?>
			</span>

		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
		New User? <a href="register.php">Sign Up Here</a>
		</div>
	</div>
</div>
</body>
</html>
