<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<title>Sign UP</title>
</head>
<body>
		<div class="main">
		<div class="nav">
			<details>
			  <summary></summary>
			  <nav class="menu">
			    <a href="#link">Home</a>
			    <a href="#link">Work</a>
			    <a href="#link">Links</a>
			    <a href="#link">Contact</a>
			    <a href="#link">About</a>
			  </nav>
			</details>
		</div>
		<div class="container">
			<div class="wrap">
				<form method="post" action="signup.php">
				<div class="inp1">
					<div class="prblm">

						<label class="lab">User <sub>(must be unic)</sub></label><br>
						<input type="text" name="user" class="txt"><hr class="hr"><br><br>
						<label class="lab">Password</label><br>
						<input type="Password" name="psd" class="txt"><br><hr class="hr"><br>
						<label class="lab">Number</label><br>
						<input type="numeric" name="num" class="txt"><br><hr class="hr"><br>
					</div>
				</div>
				<div class="inp2">
					<div class="prblm">
						<label class="lab">First-Name</label><br>
						<input type="text" name="fname" class="txt"><hr class="hr"><br><br>
						<label class="lab">Last-Name</label><br>
						<input type="text" name="lname" class="txt"><br><hr class="hr"><br>
						<label class="lab">Age</label><br>
						<input type="numeric" name="age" class="txt"><br><hr class="hr"><br>
						
					</div>
				</div>
				<div class="inp3">
					
					<input type="submit" name="signin" value="Sign In" class="submit"><br><br>
					<label class="lab-err" style="color: red; "><?php
							session_start();
							if(isset($_SESSION['error']))
							{
								echo $_SESSION['error'];
							}
							session_destroy();
							?></label>
				</div>
							
				
				</form>
				<div class="logos">
					
				</div>
			</div>
		</div>
		<div class="outro">
			<p>All copy rights are reserved </p>
		</div>
	</div>
</body>
</html>