<?php
	session_start();
	$data=[
	"user"=>$_POST['user'],
	"psd"=>$_POST['psd'],
	"num"=>$_POST['num'],
	"fname"=>$_POST['fname'],
	"lname"=>$_POST['lname'],
	"age"=>$_POST['age']
	];
	
	$attrs='';
	$cmt_attrs='';

	foreach ($data as $key => $value) {
		if(empty($value)){
			echo "--->".$key."<br>";
			unset($data[$key]);
			continue;
		}
		if($key=='user'){
		$attrs = $attrs."username='".$value."',";}
		else{
			$attrs = $attrs.$key."='".$value."',";
		}
		if($key=="user"||$key=="psd"){

			$cmt_attrs = $cmt_attrs.$key."='".$value."',";
			
		}

	}
	
	$attrs = substr($attrs, 0,-1);
	$cmt_attrs = substr($cmt_attrs, 0,-1);


	$conn= mysqli_connect('localhost','root','','project');
	$check = 0 ;
	$query = "UPDATE etudiant SET $attrs WHERE username='$_SESSION[user]';"	;
	$query2 = "UPDATE compte SET $cmt_attrs WHERE user='$_SESSION[user]';";
	echo $query."<br>" ;	
	echo $query2;


	// if($check==0){
	// 	// $query = "INSERT INTO etudiant (username,psd,prenom,nom,age,num) VALUES ('$data[user]','$data[psd]','$data[fname]','$data[lname]','$data[age]','$data[num]'); ";
	// 	// $query2 = "INSERT INTO compte (user,psd) VALUES ('$data[user]','$data[psd]'); ";

		$res1=mysqli_query($conn,$query);
		$res2=mysqli_query($conn,$query2);
		if(!$res1)echo 1 ;
		if(!$res2)echo 2 ;
		if(!empty($data['user']))$_SESSION['user']=$data['user'];
		//header("location:records.php")



 ?>