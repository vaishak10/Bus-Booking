<?php
$username = filter_input(INPUT_POST("username"));
$password = filter_input(INPUT_POST("password"));
if(!empty($username)){
	if(!empty($password)){
		$host= "localhost";
		$username="root";
        $password="";
		$dbname="bus";
		
		$conn= new mysqli($host,$username,$password,$dbname);
		
		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}
		 else
			 $sql="INSERT INTO admin(username,Password) values('$username','$password')";
				 
			 }
	else{
		echo"password should not be empty";
		die();
	    }
    }
  else{
	   echo" username should not be empty";
	   die();
	
  }
  
 ?>