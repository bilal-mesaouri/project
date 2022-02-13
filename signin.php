<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
				<div class="inp">
					<label class="lab1">sign in</label><br>
					<label class="lab2">new user ? <a href="signup1.php" target="blank" class="linko">create an account</a>
					</label><br><br>
					<form method="post" action="connect.php">
						<label>User</label><br>
						<input type="text" name="user" class="txt"><hr class="hr"><br><br><br>
						<label >Password</label><br>
						<input type="Password" name="psd" class="txt"><br><hr class="hr"><br>
						<input type="submit" name="signin" value="Sign In" class="submit">
						<label><p class="err" style="color: red;"><sub><?php 
						session_start();
						if(isset($_SESSION['error'])){
							echo $_SESSION['error'] ;}
							session_destroy()?></sub></p> </label>
					</form>
					
				</div>
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