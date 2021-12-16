<?php
    include_once 'source/session.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<style>
body{
background-image: url('images/21.jpg')}
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color:#A17188 ;
  color: white;
}
}
</style>
</head>
<div style=" color:white">
<body>
<?php if(!isset($_SESSION['EmailAddress'])):header("location:logout.php");?>
<?php else:?>

<?php echo "<h1>Welcome ".$_SESSION['EmailAddress']." To The Art Gallery Website</h1>"; ?>
<br>
<br>
<h2 style="text-align:center;"><a class="active" href=homepage.html>Go to Home Page</a></h2>
<br>
<br>
<h2 style="text-align:center"><a href="logout.php">Logout</a></h2>

<?php endif?>
</div>

</body>
</html>
