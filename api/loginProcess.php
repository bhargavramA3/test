<?php
	include(__DIR__ . "/config.php");
	session_start();
	$email = $_POST['email'];
	$password=$_POST['password'];
	
	// $conn = new mysqli(localhost,root,sairam123,myDb);
	// if(!$conn){
	// 	echo "database connection error";
	// }
	$query= "SELECT * FROM admin_table WHERE email = '$email' and pwd = '$password'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_num_rows($result);

	$count=mysqli_num_rows($result);
	// echo $count;
	// echo $email;
	// echo $password;
	$rowdata = mysqli_fetch_assoc($result);
	if($count == 1) {
	  
		// session_register("myusername");
		$_SESSION['login_user'] = $email;
			echo $rowdata['role'];
			if(strcmp($rowdata['role'],"user")){
				header("location: /dash");
			}else{
					header("location: /userdash");
			}
		
	 } else {
		

		echo '<script>alert("incorrect credentials")</script>'; 
		header("location: /login");
		
	 }

?>