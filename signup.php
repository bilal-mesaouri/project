<?php 

	$data=[
	"user"=>$_POST['user'],
	"psd"=>$_POST['psd'],
	"num"=>$_POST['num'],
	"fname"=>$_POST['fname'],
	"lname"=>$_POST['lname'],
	"age"=>$_POST['age']
];


	$conn= mysqli_connect('localhost','root','','project');
	$check = 0 ;
	foreach ($data as $key => $value) {
		if($value!=''){
			continue ;
		}
		else{
			$check=1;
			break ;
		}
	}
	if($check==0){
		$query = "INSERT INTO etudiant (username,psd,prenom,nom,age,num) VALUES ('$data[user]','$data[psd]','$data[fname]','$data[lname]','$data[age]','$data[num]'); ";
		$query2 = "INSERT INTO compte (user,psd) VALUES ('$data[user]','$data[psd]'); ";

		$res1=mysqli_query($conn,$query);
		$res2=mysqli_query($conn,$query2);
		echo "successfully signed up ...";
		if(empty($res1)||empty($res2)){
			session_start();
			$_SESSION['error']="please make sure the username is unique ";
			header("location:signup1.php");
		}
		else{
			header("location:signin.php");
		}
	}
	else{
		session_start();
		$_SESSION['error']="please enter all the values";
		header("location:signup1.php");
	}



 ?>