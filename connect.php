<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>connect</title>
</head>
<body>
	<?php 

	$user=$_POST['user'];
	$psd=$_POST['psd'];
	$conn=mysqli_connect('localhost','root','','project') or die("connection failed ...");

	$query="SELECT * FROM compte  WHERE user='$user';";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result);
	if($row!=NULL){
		
		if($row['status']!=0 && $row['psd']==$psd){
			echo ' you loged in successfully ...';
			session_start();
			$_SESSION['user']=$user;
			header("location:records.php");
			
		}
		elseif ($row['status']==0 && $row['psd']==$psd) {
			echo "your account is not activated ...";
			session_start();
			$_SESSION['error']="your account is not activated ...";
			header("location:signin.php");
		}
		else {
			echo 'password is wrong ';
			session_start();
			$_SESSION['error']="password is wrong ";
			header("location:signin.php");
		}}
	
	else {
		echo "there is no such a user";
		session_start();
		$_SESSION['error']="there is no such a user";
		header("location:signin.php");
	}

	

 ?>
</body>
</html>

