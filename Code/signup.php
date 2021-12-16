<?php

require_once 'source/db_connect.php';

if(isset($_POST['sinupBtn']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$hashed_password=password_hash($password,PASSWORD_DEFAULT);

	try{
	$SQLInsert="INSERT INTO users (FirstName,LastName,Username,Password,EmailAddress) VALUES (:firstname,:lastname,:username,:password,:EmailAddress)";
	$statement=$conn->prepare($SQLInsert);
	$statement->execute(array(':firstname'=>$firstname,':lastname'=>$lastname,':username'=>$username,':password'=>$hashed_password,':EmailAddress'=>$email));
	
	if($statement->rowCount() == 1)
	{
		header('location: LoginForm.html');
	}

	} catch(PDOExecption $e){
		echo"Error".$e->getMessage();
		
	}
}

?>