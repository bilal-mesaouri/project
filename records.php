<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="records-style.css">
	<script type="text/javascript" src="records.js"></script>
	<title>Records</title>
</head>
<body>
	<div class="main">

		<div class="user" id="user">
			
			<?php 
			session_start();
			echo $_SESSION['user'];

			 ?>
			 <button onclick="hide()" class="btn">modify</button>
			 <form action='upload.php' method='post' enctype='multipart/form-data'><input type='file' name='pic' class="upfile" class="btn"><input type='submit' name='submit' value='submit' class="btn"></form>
						

		</div>
		<div class="wrap">

			<?php 

			$conn=mysqli_connect('localhost','root','','project') or die("connection failed ...");

			$query="SELECT * FROM etudiant ;";
			$result=mysqli_query($conn,$query);
			echo "<table class='tabl'> <tr> <td>user</td><td>psd</td><td>prenom</td><td>nom</td><td>age</td><td>numero</td><td >photo</td></tr>";
			
			while($row=mysqli_fetch_assoc($result)){

				echo "<tr>";
				foreach ($row as $key => $value) {
					if($key=='pic'&&!empty($value)){

						echo "<td><img style='width:170px;height:170px;' src={$row['pic']} alt='X'></td>";
					}
					if ($key!='psd' && $key!='pic') {
						echo "<td>{$value}</td>";
					}
					elseif ($key=='psd' && $row['username']==$_SESSION['user']) {
						echo "<td>{$value}</td>";
					}

					
					elseif ($key=='psd' && $row['username']!=$_SESSION['user']) {
						echo "<td>****</td>";
					}

					
				}
				echo "</tr>";
			}
			echo "</table>";
			?>
			
		</div>
		<div class="pop">

			<div class="content">
				<form method="post" action="modify.php">
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
					<div >
						<input type="submit" name="signin" value="Sign In" class="submit"><br>
						<label class="lab" style="color: red; max-width:180px ; "><?php
								// session_start();
								// if(isset($_SESSION['error']))
								// {
								// 	echo $_SESSION['error'];
								// }
								// session_destroy();
								?></label> 
						
					</div>
							
				</div>
				</form>
				<div class="logos">
					
				</div>
				<button onclick="hide()">close</button>
			</div>

		</div>


		<footer class="footer">
			
				<?php 
					if (isset($_POST['submit'])&&isset($_FILES['pic'])) {
						$type=explode('/',$_FILES['pic']['type']);
						$allowed = array('jpeg','jpeg','png');
						if(!in_array($type[1],$allowed))
						{
							echo "please enter a valid format";
						}
						else{
							print_r($_FILES['pic']);
							$new_img_name = "IMG-".date("Y-m-d-h:i:s.").$type[1];
							// $_FILES['pic']['name']=$new_img_name;
							$path="uploads/".$_FILES['pic']['name'];
							move_uploaded_file($_FILES['pic']['tmp_name'], $path);

							echo $_FILES['pic']['name'] ;
						}

					}
			 	?>

		</footer> 


	</div>


</body>
	
			
</html>