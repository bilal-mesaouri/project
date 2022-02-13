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
							$path="uploads/".uniqid("IMG-",true).".".$type[1];
							echo($path);
							move_uploaded_file($_FILES['pic']['tmp_name'], $path);
							$conn=mysqli_connect('localhost','root','','project');
							if(isset($conn)){
								session_start();
								$user=$_SESSION['user'];
								$query="UPDATE etudiant SET pic='$path' WHERE username='$user';";
								$res=mysqli_query($conn,$query);
								if(empty($res))echo "not working";
								else{
									header("location:records.php");
								}
							}
							
						}

					}
			 	?>