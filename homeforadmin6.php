<?php
 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizproject');

$id1=$_GET['idth'];

echo $id1;

$deletequery="delete from question where qid=$id1";
$res=mysqli_query($con,$deletequery);

header('location:homeforadmin2.php');


?>