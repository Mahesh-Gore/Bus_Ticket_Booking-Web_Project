<?php session_start(); ?>

<html>

<head>
	<title>LOGIN TO Online PMPML Bus Ticket</title>
	<link rel='stylesheet' type='text/css' href='style/style.css' />
	<script type="text/javascript" src="style/javascriptfile.js"></script>
	<script src="https://kit.fontawesome.com/ea215485af.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>
</head>

<body>
	<div class="header">
		<div class="logo"><img src="images/app.png"></div>
		<div class="name">Pune Mahanagar Parivahan Mahamandal Limited</div>
		<div class="sname">PMPML</div>
		<div class="logo"><img src="images/pmpml.jfif"></div>

	</div>
	<div class="nav" id="nav">
		<a href="home.html"><i class="fa fa-home" style="padding-right:10px"></i>Home</a>
		<a href="about.html"><i class="fa fa-info" style="padding-right:10px"></i>About us</a>
		<a href="help.html"><i class="fas fa-question" style="padding-right:10px"></i>Help</a>
		<a href="feedback.php"><i class="fas fa-comment-dots" style="padding-right:10px"></i>Feedback</a>
		<a href="javascript:void(0);" class="icon" onclick="mynavbar()"><i class="fa fa-bars"></i></a>
	</div>
	<div class="loginbody" style="background:url(images/bg.jpeg);background-repeat: no-repeat;background-size:cover;background-position: center;">
		<center>
			<form name="login" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<table cellpadding="10px">
					<tr>
						<th colspan="2">
							<text class="title">LOGIN</text>
						</th>
					</tr>
					<tr>
						<th><i class="fas fa-user fa-lg" style="padding-right:10px"></i>Enter user ID</th>
						<td><input type="text" name="uid" id="uid" placeholder="Enter your register mobile number"></td>
					</tr>
					<tr>
						<th><i class="fas fa-unlock-alt fa-lg" style="padding-right:10px"></i>Enter Password</th>
						<td><input type="password" name="pass" id="pass"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="checkbox" onclick="showpassword()">Show Password</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="login" value="Login" onclick="return lvalidate();"></td>
					</tr>
					<tr>
						<td colspan="2">if don't have an account <a href="register.php"> register </a><a href="forgetpass.html" class="rlink"> forget password ?</a></td>
					</tr>
				</table>
			</form>
		</center>
	</div>
	<div class="footer">
		<div class="follow">
			<font size="5px">Follow us on</font>
			<a href=""><i class="fab fa-facebook-square fa-2x"></i></a>
			<a href=""><i class="fab fa-instagram-square fa-2x"></i></a>
			<a href=""><i class="fab fa-twitter-square fa-2x"></i></a>
		</div>
		<div class="cr">Copyright &copy 2020 OBTPMPML All Rights Reserved.</div>
	</div>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
		include_once('connection.php');
		$uid = $_POST['uid'];
		$pass = $_POST['pass'];

		$query = "select * from users_data where unumber='$uid'";
		$result = mysqli_query($conn, $query);
		$rows = mysqli_fetch_assoc($result);
		if (mysqli_num_rows($result) == 0) {
			echo "<script type=text/javascript> alert('Seems like Username or password is wrong or you not have an account.')</script>";
		} else {
			$_SESSION['uid'] = $rows['unumber'];
			echo "<script type=text/javascript> window.location='bookticket.php'</script>";
		}
}

?>