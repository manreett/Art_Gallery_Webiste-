<?php

require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['loginBtn'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	try{
		$SQLQuery="SELECT * FROM users WHERE EmailAddress=:EmailAddress";
		$statement=$conn->prepare($SQLQuery);
		$statement->execute(array(':EmailAddress'=>$email));
		
		while($row=$statement->fetch())
		{
			$id=$row['Id'];
			$hashed_pssword=$row['Password'];
			$email=$row['EmailAddress'];
			
			if(password_verify($password,$hashed_pssword)){
				$_SESSION['id']=$id;
				$_SESSION['EmailAddress']=$email;
				header('location: checkUser1.php');
			}else{
				echo"ERROR: invalid EmailAddress or password";
			}
		}
	}
	catch(PDOException$e){
	echo"Fail to connect to database".$e->getMessage();
	}
}

?>