<?php 
 
  include("db_connect.php");

  $fname=$_REQUEST['fname'];
  $lname=$_REQUEST['lname'];
  $mail=$_REQUEST['mail'];
  $subject=$_REQUEST['subject'];
  $message=$_REQUEST['message'];


  $query= mysqli_query($db_connect,"INSERT INTO user(fname,lname,mail,subject,message) VALUES('$fname','$lname','$mail','$subject','$message')") or die(mysqli_error($db_connect));

  mysqli_close($db_connect);

  header("location:contactUs.php?note=success");

?>