<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="login.css">
   <title>Document</title>
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="loginController.php" method="post" >
			<h1>Create Account</h1>
		
			<span>or use your email for registration</span>
			<input type="text" name="username" placeholder="username" />
			<input type="email" name="email"  placeholder="Email" />
         <input type="password" name="password" placeholder="Password" />
         <input type="password" name="cpassword" placeholder="confirmer password">
         <input type="text" name="image" placeholder="image">
			<button type="submit" name="register">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="loginModel.php" method="post" >
			<h1>Sign in</h1>
			
			<span>or use your account</span>
			<input name="email" type="email" placeholder="Email*" />
			<input name="password" type="password" placeholder="Password*"  />
			<a href="#">Forgot your password?</a>
			<button type="submit" name="">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="login.js"></script>

</body>
</html>