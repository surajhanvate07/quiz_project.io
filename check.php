<? php

session_start();
if(!isset($_SESSION['username'])){
	echo $_SESSION['username']);
	header('location:login.php');
}
?>


<?php

session_start();
$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'quizproject');

if(isset($_POST['submit'])){
	if(!empty($_POST['quizcheck']))
	{
		$count=count($_POST['quizcheck']);
		#echo"Out of 5, You have attempted ".$count." questions";
	}

}
$result=0;
$i=1;


$selected=$_POST['quizcheck'];
#print_r($selected);

$q="select * from question";
$query=mysqli_query($con,$q);

while($rows=mysqli_fetch_array($query)){
	#print_r($rows['ans_id']);
if($rows['ans_id']==$selected[$i])
{
	$result++;
}
$i++;
}


#echo "</br>Score of quiz is".$result;
#for knowing no of questions.
$query1="select * from question";
$res=mysqli_query($con,$query1);
$rows1=mysqli_num_rows($res);

$name=$_SESSION['username'];
$finalresult="insert into user(username,totalques,answerscorrect)values('$name','$rows1','$result')";
$queryresult=mysqli_query($con,$finalresult);


?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>




<body background="Quiz-bg.jpg">

<div class=" bg-secondary " style="width: 500px;margin-top: 15%;margin-left:32%;border-radius: 10px;">
	<div>
		<div>
			<h1 class="text-center py-5 "style="color: Tomato;">Your Result</h1>
		</div>
	</div>
	<div class="text-center">
		<h2>Your attempt is <?php echo $count; ?></h2>
		<h2>Out of <?php echo $rows1 ?> you score is <?php echo $result; ?></h2>
	</div>
	<div class="container">
	  	<div class="row" >
	  		
				<a href="logout.php" class="btn btn-info mb-3" style="margin-left: 40%;">LOGOUT</a>
			
	  	</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>	
</body>
</html>
