 <?php
$username="root";
$password="";
$dsn='mysql:dbname=assignment3;host:localhost:3306';
try{
$conn=new PDO($dsn,$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
echo"Fail to connect to database".$e->getMessage();
}
?>