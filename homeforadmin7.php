<?php
 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizproject');

$id1=$_GET['idth1'];

echo $id1;

$deletequery="delete from answer where aid=$id1";
$res=mysqli_query($con,$deletequery);

header('location:homeforadmin2.php');

?>