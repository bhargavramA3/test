<?php
	 include(__DIR__ . "/config.php");
	
	$email = $_POST['email'];
	$password=$_POST['password'];
	
	//  $conn = new mysqli(localhost,root,sairam123,myDb);
	//  if(!$conn){
	//  	echo "database connection error";
	//  }
	 $query= "SELECT * FROM admin_table WHERE email = '$email' and pwd = '$password'";
	 $result=mysqli_query($conn,$query);
	 $row=mysqli_num_rows($result);

	 $count=mysqli_num_rows($result);
	//  echo $count;
	//  echo $email;
	//  echo $password;
	 $rowdata = mysqli_fetch_assoc($result);
	 if($count == 1) {
	 		if(strcmp($rowdata['role'],"user")){
	 			header("location: /dash.php");
	 		}else{
	 				header("location: /userdash.php");
	 		}
		
	  } else {
	 	header("location: /login");
		
	  }

?>