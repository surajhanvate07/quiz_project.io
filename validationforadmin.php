<?php

session_start();
$con=mysqli_connect('localhost','root');

if($con)
{
	echo"success\n";
}
else
{
	echo"failure";
}

mysqli_select_db($con,'quizproject');
$name=$_POST['user'];
$pass=$_POST['password'];



$q="select * from signinforadmin where name='$name'&& password='$pass'";

$result = mysqli_query($con,$q); 
$num = mysqli_num_rows($result);


if($num==1)
{
	echo "hi success";
	$_SESSION['username']=$name;
	header('location:homeforadmin3.php');
	
	
}  
else
{
	echo "fail";
	
}


?>