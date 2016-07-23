<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login Portal</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="login-box">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
            <form action="login_auth.php" class="form-signin" method="post">
			<label for="username">Username</label>
			<br/>
			<input type="text" name="username" id="username" placeholder="username" required>
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password" id="password" placeholder="password" required>
			<br/>
			<button type="submit">Sign In</button>
			<br/>
            </form>
		</div>
	</div>
</body>
    
</html>