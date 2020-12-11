<? php

session_start();
if(!isset($_SESSION['username'])){
	echo $_SESSION['username']);
	header('location:login.php');
}
?>


<?php

$con=mysqli_connect('localhost','root');
/*if ($con) {
	echo "success";
}*/

mysqli_select_db($con,'Quizproject1');

?>


<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css" >
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
<body background="Quiz-bg.jpg">

	<div class="container">
		<h3 class="text-center text-success py-5">Welcome <?php session_start(); echo $_SESSION['username']; ?></h3>
		<!--use session_start() everytime when you use session in php because somotimes it causes error--> 
		
	</div>


	<div class="card w-50  mx-auto">
		<h6 class="text-center card-header bg-dark" style="color: white;"> <?php echo $_SESSION['username']; ?>,you have to select only one option out of 4.best of luck </h6>
		
	</div>

	





	


<form action="check.php" method="post">
		<?php

			$con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'quizproject');

			$query1="select * from question";
			$res=mysqli_query($con,$query1);
			$rows1=mysqli_num_rows($res);

			echo $rows1; 
			for($i=0;$i<$rows1;$i++)
			{
			

			$q="select * from question where qid=$i";
			$query=mysqli_query($con,$q) or die(mysqli_error($con));
			while($rows=mysqli_fetch_array($query))
			{

		?>
			<div class="card w-50 mx-auto bg-dark" style="color: white;">
				<h6 class="card-header"> <?php echo $i.". ".$rows['question']?></h6>
			</div>
				<?php
					$q="select * from answer where ans_id=$i";
					$query=mysqli_query($con,$q);
					

					while($rows=mysqli_fetch_array($query))
					{ 
				?>	
				<div class=" w-50 mx-auto py-2 bg-light" >
					<input type="radio" name="quizcheck[<?php  echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>" >
					 <?php echo $rows['answer'] ?>
				</div>
			
		
		<?php		
			}
					}
			}
		?>

		
				<div >
				<input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">	</br></br>
				</div>
				
				
			
		
	</form>
	



<footer>
  <p class="p-3 bg-dark text-white text-center">@QuizWord</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>		
</body>
</html>


