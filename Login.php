<!DOCTYPE html>
<html lang="en">
<head>
    <title>Personalise Log In</title>
    <link rel="stylesheet" href="css/Login.css">
</head>


<p class="alignleft">
		<img class="img" src="The Magical Christmas Adventure Logo.png" alt="centered image" width="250" height="250"/>
	</p>

<div class="login-boxM1">
	<h2>Login</h2>
		
		<form action="test.php" method=post enctype='multipart/form-data'>
			<div class="user-box">
				<label>Log in here to personalise your Christmas Experience</label>
				<br><br><br>
			</div>
			<div class="user-box">
				<label>Use the booking reference and your email from your booking confirmation email</label>
				<br><br><br>
			</div>
			<div class="user-box">
				<input type="text" name="email_entered" required="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title = "Must be a valid email address">
				<label>Email Address</label>
			</div>
			<div class="user-box">
				<input type="text" name="ref_entered" required="" required pattern="[0-9]+" title="please enter number only" maxlength="8" minlength="5"> 
				<label>Reference Number</label>
			</div>
			<a>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<input type=submit value='Submit' style="font-size:25px">
			</a>

		</form>
	</div>
</html>