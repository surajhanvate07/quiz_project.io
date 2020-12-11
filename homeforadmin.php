<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body style="background: -webkit-linear-gradient(left,#5DADE2,#00c6ff);">
		<div class="row">
	  		<a href="homeforadmin3.php" class="btn btn-danger ml-5 mb-5 mt-4" role="button">back </a>
	  	   	<a href="mainhome.php" class="btn btn-danger  ml-5 mb-5 mt-4" role="button">logout.</a>
	  	</div>
	

	       <div class="col-lg-6 bg-secondary   " style="border-radius: 5px;margin-left: 25%;margin-top: 2%;">
				<h2 class="text-center p-2">Enter data for questions.</h2>
					<form action="" method="POST">
						<div class="row pl-5">

								<div class="form-group">
									<label style="margin-left:40%;">qid</label>
									<input type="text" name="qid" class="form-control">
								</div>
								<div class="form-group pl-2">
									<label style="margin-left:35%;">Question</label>
									<input type="text" name="question" class="form-control">
								</div>

								<div class="form-group pl-2">
									<label style="margin-left:30%;">answer id</label>
									<input type="text" name="que_ans_id" class="form-control">
								</div>

						</div>
					 <h2 class="text-center p-2">Enter data for Answers.</h2>
						<div class="row pl-5">
										<div class="form-group ">
											<label style="margin-left:40%;">aid</label>
											<input type="text" name="aid1" class="form-control " placeholder="Enter aid for option1">
										</div>

										<div class="form-group pl-2">
											<label style="margin-left:35%;">option</label>
											<input type="text" name="answer1" class="form-control" placeholder="Enter option1">
										</div>
										<div class="form-group pl-2">
											<label style="margin-left:30%;">answer id </label>
											<input type="text" name="ans_ans_id1" class="form-control"placeholder="Enter ans_id for option1">
										</div>
						</div>
						<div class="row pl-5">
										<div class="form-group">
											
											<input type="text" name="aid2" class="form-control" placeholder="Enter aid for option1.">
										</div>

										<div class="form-group pl-2">
											
											<input type="text" name="answer2" class="form-control" placeholder="Enter option2.">
										</div>

										<div class="form-group pl-2">
											
											<input type="text" name="ans_ans_id2" class="form-control" placeholder="Enter ans_id for option2">
										</div>
						</div>
						<div class="row pl-5">
										<div class="form-group">
											
											<input type="text" name="aid3" class="form-control" placeholder="Enter aid for option3">
										</div>

										<div class="form-group pl-2">
											
											<input type="text" name="answer3" class="form-control" placeholder="Enter option3">
										</div>

										<div class="form-group pl-2">
											
											<input type="text" name="ans_ans_id3" class="form-control" placeholder="Enter ans_id for option3">
										</div>
										
						</div>

						<div class="row pl-5">
										<div class="form-group">
											
											<input type="text" name="aid4" class="form-control" placeholder="Enter aid for option4">
										</div>

										<div class="form-group pl-2">
											
											<input type="text" name="answer4" class="form-control" placeholder="Enter option4">
										</div>

										<div class="form-group pl-2">
											
											<input type="text" name="ans_ans_id4" class="form-control" placeholder="Enter ans_id for option4">
										</div>
										
						</div>
						<!--<div class="row pl-5">
								<button type="submit" class="btn btn-light mb-3  " name="add" style="margin-left:40% ">Add </button>
						</div>-->
						<button type="submit" class="btn btn-light mb-3  " name="add" style="margin-left:40% ">Add </button>
					</form>
	        </div>
		
		

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>		
</body>
</html>


<?php

#session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Quizproject1');
 

 if(isset($_POST['add']))
 {
 	$qid=$_POST['qid'];
 	$que=$_POST['question'];
 	$que_ans_id=$_POST['que_ans_id'];
 	
 	$aid1=$_POST['aid1'];
 	$ans1=$_POST['answer1'];
 	$ans_ans_id1=$_POST['ans_ans_id1'];
 	
 	$aid2=$_POST['aid2'];
 	$ans2=$_POST['answer2'];
 	$ans_ans_id2=$_POST['ans_ans_id2'];
 	
 	$aid3=$_POST['aid3'];
 	$ans3=$_POST['answer3'];
 	$ans_ans_id3=$_POST['ans_ans_id3'];
 	
 	$aid4=$_POST['aid4'];
 	$ans4=$_POST['answer4'];
 	$ans_ans_id4=$_POST['ans_ans_id4'];

 	#echo $qid.$que.$que_ans_id;
 	
 	
 	
 	$insertquery="insert into question(qid,question,ans_id) values('$qid','$que','$que_ans_id')";
 	$res=mysqli_query($con,$insertquery);

 	$insertquery1="insert into answer(aid,answer,ans_id) values('$aid1','$ans1','$ans_ans_id1')";
 	$res1=mysqli_query($con,$insertquery1);
 	$insertquery2="insert into answer(aid,answer,ans_id) values('$aid2','$ans2','$ans_ans_id2')";
 	$res2=mysqli_query($con,$insertquery2);
 	$insertquery3="insert into answer(aid,answer,ans_id) values('$aid3','$ans3','$ans_ans_id3')";
 	$res3=mysqli_query($con,$insertquery3);
 	$insertquery4="insert into answer(aid,answer,ans_id) values('$aid4','$ans4','$ans_ans_id4')";
 	$res4=mysqli_query($con,$insertquery4);


 	#do not enter previously added data it will not not be added i,e use qid>5 as qid till 5 is added.
 
 	if($res&&$res1)
 	{
 ?>
 		<script > alert('data added in question and answer table');</script>
 <?php
 	}

 	if($res)
 	{
 ?>
 		<script > alert('data added in question table');</script>
 <?php
 	}

 	if($res1)
 	{
 ?>
 		<script > alert('data added in answer table');</script>
 <?php
 	}
 
}
?>


